<?php
include('connection.php');
$stuid = $_GET['updateid'];
$sql = "SELECT * FROM `stutbl` WHERE `id`='$stuid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$fname = $row['firstname'];
$lname = $row['lastname'];
$email = $row['email'];
$program = $row['pos'];
if (isset($_POST['btn1'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $course = $_POST['pos'];
    $sql = "UPDATE `stutbl` SET `id`='$stuid',firstname=' $fname',lastname='$lname',email='$email',
    pos='$course' WHERE id='$stuid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Data Inserted Successfully";
        header('location:display.php');
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="Enter The Student First Name" value=<?php echo $fname; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Enter The Student Last Name" value=<?php echo $lname; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter The Student Email Address" value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Program of Study</label>
                <input type="text" name="pos" class="form-control" placeholder="Enter The Student Program of Study" value=<?php echo $program; ?>>
            </div>



            <button type="submit" name="btn1" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>

</html>