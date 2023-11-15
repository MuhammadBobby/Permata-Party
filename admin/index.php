<?php
session_start();

// pemeriksaan session login
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Permata party??</title>
</head>

<body>

  <h1>Hello Admin</h1>

  <a href="logout.php">Logout</a>
</body>

</html>