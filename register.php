<?php
require 'connect.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_users (fullname, username, email, password) VALUE ('$fullname', '$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
}
else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}