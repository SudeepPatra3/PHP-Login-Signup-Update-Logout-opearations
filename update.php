<!-- validation for password update -->

<?php
$username = $_POST['user'];
$username = trim($username);
$password = $_POST['pass'];
$conn = mysqli_connect('localhost', 'root', '', 'test');
$sql = "UPDATE user set pass='" . $password . "' where username='" . $username . "'";
if (mysqli_query($conn, $sql)) {
    echo "<h1>Update Sucessfully</h1>";
    header('Location: welcome.php');
} else {
    echo "error";
}
?>