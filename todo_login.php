<?php
session_start();
if (isset($_POST['Login'])){
    $_SESSION['user'] = array(
        "user_name" => "user1",
        "user_pass" => "pass1",
    );
    header("Location: todo_list.php");
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <h3>You are logged in</h3>
    <form action="" method="post">
        <input type="submit" value="Login" name='Login'>
    </form>
</body>
</html>