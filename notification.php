<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/notification.css">
  <title>Document</title>
</head>
<body>
<div class="nav">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Gallary</a></li>
            </ul>
        </div>
    </div>
    <div class="notification-main">
      <div class="notifi">
          <?php
          // Connect to the database
          include_once('config.php');

          // Select all the notifications from the database
          $sql = "SELECT * FROM notifications ORDER BY created_at DESC";
          $result = mysqli_query($conn, $sql);
          ?>

          <!-- Create the HTML to display the notifications -->
          <h1>Notifications</h1>
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="notification">
              <h2><?php echo $row['title']; ?></h2>
              <p><?php echo $row['message']; ?></p>
              <small><?php echo $row['created_at']; ?></small>
            </div>
          <?php } ?>
          </div>
      </div>
</body>
</html>