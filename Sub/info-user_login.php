<?php

require '_methods.php';
include 'Parts/header.php';

$users = getUsers();

?>
<?php include 'navbar.php'; ?>
<?php include 'user-status_bar.php'; ?>

<div class="container">
    <table class="table table-hover my-transparent-table">
        <thead>
            <tr>
                <th>UserID</th>
                <th>Password</th>
                <th>User Name</th>
                <th>User Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['userid'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['user_type'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'Parts/footer.php';