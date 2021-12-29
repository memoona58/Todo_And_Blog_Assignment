<?php

if (isset($_POST['user-name'])) {
  $user_fname = $_POST['email'];
  $user_email = $_POST['fname'];
  $user_name = $_POST['username'];
  $user_password = $_POST['pass'];

  require './utilities/user.php';

  $check = for_register($user_name, $user_password, $email);
  if ($check == "REGISTERED") {
    $user = do_login($user_name, $user_password);
    if ($user != null) {
      $_SESSION["_user"] = $user;
      header("Location: home.php");
    }
  }
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container text-center register">
    <h3>Registration form for bloghost post</h3>  
    <form action="register.php" method="POST">
    <input type="text" placeholder="Full Name" name="fname" class="form-control">
        <input type="text" placeholder="User Name" name="username" class="form-control">
        <input type="Email" placeholder="Valid Email" name="email" class="form-control">
        <input type="password" placeholder="Password" name="pass" class="form-control">
        <input type="Submit" placeholder="Register here" name="register" class="btn btn-success form-control">
        
    </form>
</div>
</body>
</html>