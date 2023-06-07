<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notification Upload</title>
</head>
<body>
<?php
// Connect to the database
include_once('config.php');

// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Get the input values
  $title = $_POST['title'];
  $message = $_POST['message'];
  
  // Insert the values into the database
  $sql = "INSERT INTO notifications (title, message, created_at) VALUES ('$title', '$message', NOW())";
  mysqli_query($conn, $sql);

  // Redirect to the notification page
  header('Location: notification.php');
  exit();
}
?>

<!-- Create the HTML form for the admin to input the notification -->
<form method="POST" action="">
  <label>Title:</label>
  <input type="text" name="title">
  <br>
  <label>Message:</label>
  <textarea name="message"></textarea>
  <br>
  <button type="submit" name="submit">Save Notification</button>
</form>

</body>
</html>