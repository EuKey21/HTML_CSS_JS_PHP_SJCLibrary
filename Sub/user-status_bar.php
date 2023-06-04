<div class="card" style="clear:both; padding-top: 100px; margin-bottom:60px">
    <div class="card-header" style="height:40px; ">
        <div class="my-user-status">
            <?php if(isset($_SESSION['userid'])): ?> <!--check if there is a user id in session--> 
                <p>
                    <?php echo "<b class='h5'>".$_SESSION['name']."</b>"; ?>
                    <a href="user-logout.php?userid=<?php echo $_SESSION['userid']?>" class="h5">
                    <!--dynamic hyperlink to access different accounts-->
                        <?php echo '  Logout '?><i class ="fa fa-sign-in" ></i></a>
                </p>
            <?php else: ?>
                <p>
                    <a href="user-login.php" class="h4" ><?php echo ' Login '?><i class ="fa fa-sign-in" ></i></a> <!--takes the user to login page-->
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
