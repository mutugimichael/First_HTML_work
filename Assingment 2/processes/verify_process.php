<?php
require_once "dbh.inc.php";

$email = $_POST["email"];
$verification_code = $_POST["verification_code"];

$sql = "SELECT * FROM users WHERE email='$email' AND verification_code='$verification_code'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    
    $sql_update = "UPDATE users SET verified=1 WHERE email='$email'";
    if (mysqli_query($conn, $sql_update)) {
        echo "Email verified successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid verification code.";
}

mysqli_close($conn);
?>
