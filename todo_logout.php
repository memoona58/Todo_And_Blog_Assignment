<?php
session_start();
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}session_destroy();
if (isset($_SESSION['todo_list'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>home</title>
</head>
<body>

    <h2>You are log out</h2>
    <h4>Click here to go to Bloghost page.<br> <h3><a href="index.php">Bloghost Page</a></h3></h4>
    <h4>CLick on login button to  add a new Todo-List. <br> <h3><a href="todo_login.php">Login Page </a></h3></h4>
    
</body>
</html>