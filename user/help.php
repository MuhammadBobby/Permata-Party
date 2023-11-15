<?php
require "function.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$saran = $_POST["saran"];

$query = "INSERT INTO help VALUES ('','$nama', '$email', '$saran')";
mysqli_query($conn, $query);

header("Location: index.php?sukses=true#help");
exit;
