<?php
/* Database connection start */
$servername = "54.159.161.206";
$username = "root";
$password = "notesshare";
$dbname = "notes";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 

?>