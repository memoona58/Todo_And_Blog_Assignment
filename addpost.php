<?php
require 'utilities/blogposts.php';
require 'utilities/user.php';

if (!is_user_loggedin()) {
    header("Location: index.php");
    return;
}

$user = $_SESSION['_user'];


if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $addblog = $_POST['addblog'];
 $res = write_post($user['user_id'], $title, $addblog);
    if ($res == "POSTED") {
        header("Location: home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "header.php"; ?>
<div class="container text-center">
    <h3>Add blog</h3> 
<form action=" " method="POST">
    <input type="text" placeholder="Add blog title" name="title" class="form-control">
    <textarea name="addblog" class="form-control" rows="10" placeholder="Add your Blog here"></textarea>
        <input type="Submit" value="Publish"  class="btn btn-primary form-control">  
        
    </form>
    
</div>

</html>