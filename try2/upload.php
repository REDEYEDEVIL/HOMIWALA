<?php 
	include_once('config.php');

	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$file = $_FILES['image'];

		$fileName = $file['name'];
		$fileTmpName = $file['tmp_name'];
		$fileSize = $file['size'];
		$fileError = $file['error'];
		$fileType = $file['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 1000000) {
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = '../data'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);

					$sql = "INSERT INTO images (title, image) VALUES ('$title', '$fileDestination')";
					mysqli_query($conn, $sql);

					header("Location: index.php?uploadsuccess");
				} else {
					echo "File size is too big!";
				}
			} else {
				echo "Error uploading file!";
			}
		} else {
			echo "You cannot upload files of this type!";
		}
	}
?>
