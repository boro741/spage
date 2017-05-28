<?php 
    require_once 'meekrodb.2.3.class.php';
    DB::$user = 'localhost';
    DB::$dbName = 'MicroBlog';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    DB:: insert('Credentials', array(
            'username' => $username,
            'password' => $hash
        ));

    // After registering it directs back to home page
    header('Location: http://localhost:80/spage/index.php');
?>