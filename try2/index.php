<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Gallery</h1>
	</header>
	<main>
		<?php 
			include_once('config.php');

			$sql = "SELECT * FROM images";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<div class="gallery-item">';
					echo '<img src="'.$row['image'].'" alt="'.$row['title'].'">';
					echo '<h3>'.$row['title'].'</h3>';
					echo '</div>';
				}
			} else {
				echo "<p>No images found</p>";
			}
		?>
	</main>
	<footer>
		<form method="POST" enctype="multipart/form-data" action="upload.php">
			<input type="text" name="title" placeholder="Title" required>
			<input type="file" name="image" required>
			<button type="submit" name="submit">Upload</button>
		</form>
	</footer>
</body>
</html>
