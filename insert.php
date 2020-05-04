<!-- This page will insert new user into databse -->

<?php
$link = mysqli_connect("localhost", "root", "", "test");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($link, $_REQUEST['user']);
$password = mysqli_real_escape_string($link, $_REQUEST['pass']);

$sql = "INSERT INTO user (username, pass) VALUES ('$username', '$password')";
if (mysqli_query($link, $sql)) {
    $succ = "Successful";
    header('Location: login.php');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



?>