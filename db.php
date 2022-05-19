<?php
$con = mysqli_connect("localhost", "skay", "skaySAMMY1234@.", "secondyear");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
date_default_timezone_set('Asia/Kolkata');
$error = "";
?>