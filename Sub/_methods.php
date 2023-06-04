<?php

/***************
 * book method *
 **************/

//Read the json file and return an array of books
function getBooks() {
    return json_decode( file_get_contents('Json/books.json'), true );
}

//Get a specific book by its ISBN
function getBookByISBN($ISBN) {
    $books = getBooks();
    foreach ($books as $book) {
        if ($book['ISBN'] == $ISBN) {
            return $book;
        }
    }
    return null;
}

//Get the new book (array) from books-add.php and push it into the existing lists
//encode it to the json file
function addBook($data) {
    $books = getBooks();

    $books[] = $data;
    file_put_contents( 'Json/books.json', 
                        json_encode($books, JSON_PRETTY_PRINT));
    return $data;
}

//Get the updated information (array) from books-update
//search the book lists by ISBN
//replace the the specific book with the new information
function updateBook($data, $ISBN) {
    $books = getBooks();
    foreach ($books as $i => $book) {
        if ($book['ISBN'] == $ISBN) {
            $books[$i] = array_merge($book, $data);
        }
    }
    file_put_contents( 'Json/books.json', 
                        json_encode($books, JSON_PRETTY_PRINT));
}

//Get the ISBN of book going to remove
//search the book lists and remove the book with the ISBN
function removeBook($ISBN) {
    $books = getBooks();
    foreach ($books as $i => $book) {
        if ($book['ISBN'] == $ISBN) {
            unset($books[$i]);
        }
    }
    file_put_contents( 'Json/books.json', 
                        json_encode($books, JSON_PRETTY_PRINT));
}

//Get an array of genre
//Search books that have the genres in the array
function filterByGenre($genres) {
    $books = getBooks();
    $filter = [];

    foreach ($genres as $genre) {
        foreach ($books as $book) {
            if ($book['genre'] == $genre) {
                $filter[] = $book;
            }
        }
    }

    return $filter;
}

//Get a string of key words
//If the string is a part of the book's properties, then push it into a new array that going to be returned
function searchBooks($data) {
    $books = getBooks();
    $search = [];

    foreach ($books as $book) {
        if ( stristr($book['ISBN'], $data) ) {
            $search[] = $book;
        }
        else if ( stristr($book['title'], $data) ) {
            $search[] = $book;
        }
        else if ( stristr($book['author'], $data) ) {
            $search[] = $book;
        }
        else if ( stristr($book['genre'], $data) ) {
            $search[] = $book;
        }
        else if ( stristr($book['publisher'], $data) ) {
            $search[] = $book;
        }
        else if ( stristr($book['publish_year'], $data) ) {
            $search[] = $book;
        }
    }
    return $search;
}


//If the field is not empty, then compare the field with the existing book properties.
//If true for one comparison, then push that book into the result(search[counter])
//If one of the comparisons fails, then pop out the book from search[counter]
//If all comparisons hold true, the book stays in the array
//and counter is increment
function searchAdvance($data) {
    $books = getBooks();
    $search = [];
    $counter = 0;

    foreach ($books as $book) {
        if ($data['ISBN'] != "") {
            if ($data['ISBN'] == $book['ISBN']) {
                $search[$counter] = $book;
            }
            else {
                continue;
            }
        }
        if ($data['title'] != "") {
            if ($data['title'] == $book['title']) {
                $search[$counter] = $book;
            }
            else {
                unset($search[$counter]);
                continue;
            }
        }
        if ($data['author'] != "") {
            if ($data['author'] == $book['author']) {
                $search[$counter] = $book;
            }
            else {
                unset($search[$counter]);
                continue;
            }
        }
        if ($data['genre'] != "") {
            if ($data['genre'] == $book['genre']) {
                $search[$counter] = $book;
            }
            else {
                unset($search[$counter]);
                continue;
            }
        }
        if ($data['publisher'] != "") {
            if ($data['publisher'] == $book['publisher']) {
                $search[$counter] = $book;
            }
            else {
                unset($search[$counter]);
                continue;
            }
        }
        if ($data['publish_year'] != "") {
            if ($data['publish_year'] == $book['publish_year']) {
                $search[$counter] = $book;
            }
            else {
                unset($search[$counter]);
                continue;
            }  
        }
        if ($search[$counter] != null) {
            $counter++;
        }
    }

    return $search;
}

//Get the ISBN and user ID
//Search the book lists with the ISBN
//If the reserved property of the book is empty, replace it with the user ID
function reserveBook($ISBN, $userid) {
    $books = getBooks();
    foreach ($books as $i => $book) {
        if ($book['ISBN'] == $ISBN && $book['reserved'] == "") {
            $books[$i]['reserved'] = $userid;
        }
    }
    file_put_contents( 'Json/books.json', 
                        json_encode($books, JSON_PRETTY_PRINT));
}

//Get the ISBN and user ID
//Search the book lists with the ISBN
//If the reserved property of the book is the user ID, replace it with an empty string
function returnBook($ISBN, $userid) {
    $books = getBooks();
    foreach ($books as $i => $book) {
        if ($book['ISBN'] == $ISBN && $book['reserved'] == $userid) {
            $books[$i]['reserved'] = "";
        }
    }
    file_put_contents( 'Json/books.json', 
                        json_encode($books, JSON_PRETTY_PRINT));
}

//Get the user ID
//Search the reserved property of the books in the list
//If it marches the user ID, push it into a new array going to be returned
function getMyReservedBooks($userid) {
    $books = getBooks();
    $reserved = [];
    foreach ($books as $book) {
        if ($book['reserved'] == $userid) {
            $reserved[] = $book;
        }
    }
    return $reserved;
}

//Get the picture and the ISBN
//Store the picture with the ISBN in a specfic folder in the web pages
function uploadImage($pic, $ISBN) {

    //check for picture format
    $picExt = explode(".", $pic['name']); //split the file name into array by the dot
    $picExtLowerCase = strtolower(end($picExt)); //get the array after the dot
    //$allowedFormat = ['jpg', 'jpeg', 'png'];
    //if (in_array($picExtLowerCase, $allowedFormat)) {
    if ($picExtLowerCase == 'jpg') {

        //check for error
        if($pic['error'] === 0) {

            //check for pic size
            if($pic['size'] < 500000) { //5mb
                move_uploaded_file($pic['tmp_name'], "Json/books_pictures/$ISBN.$picExtLowerCase");
            }
            else {
                echo "<script type='text/javascript'>alert('Your picture is too big [should be less than 5mb]');</script>";
            }

        }
        else {
            echo "<script type='text/javascript'>alert('There was an error in uploading');</script>";
        }

    }else {
        echo "<script type='text/javascript'>alert('Picture format is not supported');</script>";
    }

}

/****
 * 
$var = getUsers();
echo '<pre>';
var_dump($var);
echo '</pre>';
 */

/***************
 * user method *
 **************/

//Read the json file and return an array of users
function getUsers() {
    return json_decode( file_get_contents('Json/users.json'), true );
}

//Get the user ID
//Search the user ID in the list of user
//Return all the user information
function getUserById($userid) {
    $users = getBooks();
    foreach ($users as $user) {
        if ($user['ISBN'] == $userid) {
            return $user;
        }
    }
    return null;
}

//Get user id and user password
//Search the user ID in the list of users
//If found, then check the password. If password marches, return true
//Eles return false (if user ID not found or password not marched)
function validateUser($userid, $password) {
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['userid'] == $userid) {
            if ($user['password'] == $password) {
                return true;
            }
        }
    }

    return false;
}

//Get user ID
//Search for the user type by its ID
function getUserTypeById($userid) {
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['userid'] == $userid) {
            return $user['user_type'];
        }
    }

}

//Get user ID
//Search for the user name by its ID
function getUserNameById($userid) {
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['userid'] == $userid) {
            return $user['name'];
        }
    }
}


?>