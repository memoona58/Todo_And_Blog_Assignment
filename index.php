<?php
session_start();

require_once 'utilities/user.php';

if(isset($_POST['user-name'])) {
	$user_name = $_POST['user-name'];
	$user_pass = $_POST['user-pass'];

	$user = do_login($user_name, $user_pass);
	
	if($user != null) {
		$_SESSION["_user"] = $user;
		header("Location: home.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css">
		<title>Main</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<?php include "header.php";?>
		<div style="text-align: center">
		<H3>TODO_LIST And BLOGHOST Assignment</H3>
		<h4>Submitted by: Memoona Abbasi</h4>
		<h4>Roll No: 2K18/CSM/58</h4>
		<h6>for Todo_list Check Nav_bar options or click here  <a class="nav-item nav-link active" href="todo_list.php">Todo_list </a></h6>
		<br>
			<h1>Login Form</h1>
			

			<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
				<div>
					<label
						>User Name
						<input type="text" name="user-name" value="<?=$user_name?>" required />
					</label>
				</div>
				<div>
					<label
						>User Password
						<input type="password" name="user-pass" required />
					</label>
				</div>
				<div>
					<input type="submit" value="Submit" />
				</div>
			</form>
		</div>
	</body>
</html>
