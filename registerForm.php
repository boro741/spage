<?php 
    require_once 'meekrodb.2.3.class.php';
    DB::$user = 'localhost';
    DB::$dbName = 'MicroBlog';

    $username = $_POST['username'];
    $password = $_POST['pasword'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    DB:: insert('Credentials', array(
            'username' => $username,
            'password' => $hash
        ));

    header('Location: http://localhost:8888/index.php');
?>