<?php
if (isset($_SESSION['_user'])) {
  $user = $_SESSION['_user'];
 // $login_menu_item = "Hello " . '<a href="dashboard.php">' . $user["user_full_name"] . '</a>' . ' (<a href="logout.php">Logout</a>)';
}

?>

<header>
    <!--<nav>
        <ul style="column-count: 3; list-style: none">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <?php if(isset($login_menu_item)):?>
                <li><?=$login_menu_item?></li>
            <?php endif;?>
        </ul>
    </nav>-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="register.php">Blog_Registration</a>
      <a class="nav-item nav-link active" href="addpost.php">Add_blog </a>
      <a class="nav-item nav-link active" href="todo_list.php">Todo_list </a>
    </div>
  </div>
</nav>

</header>
