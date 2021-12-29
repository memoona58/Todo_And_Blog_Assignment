<?php
require_once 'utilities/blogposts.php';
require_once 'utilities/user.php';

	if (!is_user_loggedin()) {
		header("Location: index.php");
		return;
	}

	$blogposts = get_all_posts();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Home</title>
	</head>
	<body>
		
		<?php include "header.php";?>
		<br><a class="btn btn-success" href="addpost.php">Add Post</a>
		<div style="text-align: center">
		
			<h1>This is home page</h1>
			<?php
			if ($blogposts != null):
				foreach($blogposts as $blogpost):
					$author = $blogpost["user_full_name"];
					$post_id = $blogpost["post_id"];
					$post_title = $blogpost["post_title"];
					$post_body = $blogpost["post_body"];
					$likes = $blogpost["likes"];
					$reads = $blogpost["_reads"];
					$post_date = $blogpost["post_date"]; 
					$post_date = date_create($post_date); 
					$post_date = date_format($post_date,"jS, F, Y.");
			?>
			<section class="blogpost">
				<div class="blogtitle"><?=$post_title?></div>
				<div class="blogauthor">By <?=$author?></div>
				<div><?=$post_body?>. <a href="post.php?id=<?=$post_id?>">Read more...</a></div>
				<div class="blogpostfooter">
					<?php if($likes > 0): ?>
					<a href="postlikes.php?id=<?=$post_id?>">
					<?php endif;?>
					<span class="blogdate"><small><i class="count"><?=$likes?></i> people like the blog.</small></span>
					<?php if($likes > 0): ?>
					</a>
					<?php endif;?>

					<?php if($reads > 0): ?>
					<a href="postreads.php?id=<?=$post_id?>">
					<?php endif;?>
					<span class="blogdate"><small><i class="count"><?=$reads?></i> people have read the blog.</small></span>
					<?php if($reads > 0): ?>
					</a>
					<?php endif;?>
				
					<div class="blogdate"><small>Posted on: <?=$post_date?></small></div>
				</div>
			</section>
			<?php
			endforeach;
			endif;
			?>
		</div>
	</body>
</html>
