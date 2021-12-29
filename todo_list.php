<?php
session_start();
 //var_dump($_SESSION);
if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = (array) null;
}
if (isset($_POST['delete'])) {
    array_splice($_SESSION['todo_list'], $_POST['tasklist']);
    //, $_POST['tasklist']
}
if (isset($_POST['addTask'])) {
    $task =  $_POST['task'];
    if (strlen($task) > 0)
        array_push($_SESSION['todo_list'], $task);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-list</title>
    <style>
        .heading{
    width: 40%;
    margin: 25px auto;
    text-align: center;
    color: black;
    background: rgb(235, 192, 114);
    border: 2px solid rgb(226, 221, 221);
    border-radius: 20px;
}
.form1{
    width: 40%;
    margin: 30px auto;
    border-radius: 3px;
    padding: 10px;
    background: wheat;
    border: 1px solid  rgb(158, 143, 143);
}
.form2{
    width: 20%;
    margin: 15px auto;
    padding: 5px;
}
.task_input{
    width: 73%;
    height: 15px;
    padding: 10px;
    border: 2px solid  rgb(158, 143, 143);
}
.add_btn{
    height: 39px;
    background: wheat;
    border: 1px solid  rgb(158, 143, 143);
    padding: 5px 20px;
}
table{
    width: 30%;
    margin: 30px auto;
    border-collapse: collapse;
}
tr{
    border-bottom: 0.5px solid #f1eeee;
}
th{
    font-size: 19px;
    color: rgb(158, 143, 143);
}
th, td{
    border: none;
    height: 5px;
    padding: 2px;
}
tr:hover{
    background: #e9e9e9;
}
.task{
    text-align: left;
}
.delete{
    text-align: center;
}
.delete a{
    color: white;
    
    text-decoration: none;
}
.logout{
    width: 15%;
    margin: 12px auto;
    border-radius: 1px;
    padding: 7px;
    background: wheat;
    border: 1px solid  rgb(158, 143, 143);
    text-align: center;
}
    </style>
</head>

<body>
<div class="heading">
        <h3>Add Your To Do list</h3>
        </div>
    <div>
        <form class="form1" method="POST">
            <input type="text" class="task_input" name="task" placeholder="Enter Your list..">
            <button class="add_btn" type="submit" name='addTask'>Add Task</button>
        </form>
        <?php if (isset($_SESSION['todo_list'])) : ?>
            <?php if (count($_SESSION['todo_list']) > 0) : ?>
                <table class='table'>
                    <thead>
                        <tr>
                            <th >#</th>
                            <th >Tasks</th>
                            <th >Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['todo_list'] as $key => $task) : ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td><?= $task ?></td>
                                <td>
                                    <form class="form2"  method="post">
                                        <input type="text" name="tasklist" value="<?= $key ?>" hidden>
                                        <button name='delete' type="submit">X</button>                          
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
        <?php endif ?>
        <div>
<p class="logout">click here to logged out <a href="todo_logout.php">Logout</a></p>
</div>
    </div>
</body>
</html>