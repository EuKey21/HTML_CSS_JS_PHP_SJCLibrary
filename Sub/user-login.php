<?php

require '_methods.php';
include 'Parts/header.php';

?>
 
<div class="my-login">
    <div class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4">
                <form class="my-login-box" action="user-login-validate.php" method="POST">
                    <div class="form-group">
                        <h4 class="text-center font-weight-bold"> Login </h4>
                        <label for="userid">User ID</label>
                        <input name="userid" type="text" required class="form-control" placeholder="Enter User ID">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" required class="form-control" placeholder="Password">
                    </div>
                    <div class="my-btn-padding">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include 'Parts/footer.php'; ?>