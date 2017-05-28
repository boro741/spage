<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Microblogging site</title>
        
    </head>
    <body>
        <?php 
            if(isset($_SESSION['loggedin'])){
                echo '<form action="postForm.php" method="post">
                    <TextArea name="microBlog" id="microBlog" cols="30" rows="10">
                    </TextArea>
                    </br>
                    <input type="submit">
                </form>';
            }
            else {
                echo '<form action="login.php" method="post">
                        Username: <input type="text" name="username" id="username" /> </br>
                        Password: <input type="password" name="password" id="password" />
                        <input type="submit">
                </form>';
            }
        
        
        if (isset($_SESSION['loggedin'])){
                echo '<a href="logout.php">Log Out</a>';
        } else {
                echo '<a href="register.php">Register</a>';
        }
        ?>
    </body>
</html>
