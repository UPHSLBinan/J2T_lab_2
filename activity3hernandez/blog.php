<!DOCTYPE html>
<html>
<head>
	<title>Create Blog Post</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="blogpost.php" method="post">
     	<h2>Create Blog Post</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Title</label>
     	<input type="text" name="title" placeholder="Title (Type Here)"><br>

     	<label>Body</label>
     	<input type="text" name="body" placeholder="Body (Type Here)"><br>
         <a href="home.php">Back to Home</a>
     	<button type="submit">Create</button>
     </form>
</body>
</html>