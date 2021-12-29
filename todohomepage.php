<?php
session_start();
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
    <style>
    body{
    background: gray;
   
        }
    .heading{
        width: 40%;
    margin: 20px auto;
    text-align: center;
    color: black;
    background: rgb(235, 192, 114);
    border: 1.5px solid rgb(226, 221, 221);
    border-radius: 20px;
    }
    .inside{
    width: 25%;
    margin: 4px auto;
    border-radius: 0.5px;
    padding: 4px;
    background: wheat;
    border: 1px solid  rgb(158, 143, 143);
    text-align: justify;
}
.intro{
    width: 25%;
    margin: 4px auto;
    padding: 4px;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="heading">
    <h1>This is the home page for Todo-List Assignment</h1>
    </div>
    <div class="intro">
    <h2>RollNo: 2K18/CSM/58 <br> Submitted by : Memoona Abbasi <br> Submitted To : Gulsher Laghari</h2>
    </div>
    <div class="inside">
    <h3>Click here to go on your todo-list page. <a href="todo_list.php">To-do List</a></h3>
    </div>
</body>
</html>