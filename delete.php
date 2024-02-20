<?php
include('connection.php');
if (isset($_GET['deleteid'])) {
    $stuid = $_GET['deleteid'];
    $sql = "DELETE FROM `stutbl` WHERE `id` = '$stuid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Deleted Sucessfully";
        header('location:display.php');
    }
}
