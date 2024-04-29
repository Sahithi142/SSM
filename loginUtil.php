<?php
if (!isset($_POST["submit"])) {
    die("Not authorized");
}
session_start();
include_once 'con.php';
$table = null;
if ($_POST['signinas'] == "1") {
    $table = "student";
} else if ($_POST['signinas'] == "2") {
    $table = "faculty";
} else if ($_POST['signinas'] == "3") {
    $table = "hod";
}
$sql = "select * from $table where email = '$_POST[email]' and password = '$_POST[password]'";
// echo $sql . "<br>";
if ($res = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($res) == 1) {
        $_SESSION["isLoggedIn"] = true;
        if ($table == "student") {
            $_SESSION["studentDetails"] = mysqli_fetch_assoc($res);
            echo "<script>location.replace('studentHome.php');</script>";
        } else if ($table == "faculty") {
            $_SESSION["facultyDetails"] = mysqli_fetch_assoc($res);
            // print_r($_SESSION["facultyDetails"]);
            echo "<script>location.replace('facultyHome.php');</script>";
        } else {
            $_SESSION["hodDetails"] = mysqli_fetch_assoc($res);
            echo "<script>location.replace('hodHome.php');</script>";
        }
    } else {
        die("invalid credentials <a href='login.php'>Login again.</a>");
    }
    print_r($res);
}
