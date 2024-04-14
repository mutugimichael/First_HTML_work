<?php
require_once "dbh.inc.php";

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$verification_code = rand(100000, 999999);

$sql = "INSERT INTO users (username, email, password, verification_code) VALUES ('$username', '$email', '$password', '$verification_code')";
if (mysqli_query($conn, $sql)) {
    
    $subject = "Email Verification";
    $message = "Your verification code is: $verification_code";
    mail($email, $subject, $message);
    
    header("Location: verify_email.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

