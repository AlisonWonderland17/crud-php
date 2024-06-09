<?php

include 'connect_db.php';

$id = $_GET['updateid'];
$sql = "Select * from tbl_crud where id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$course = $row['course'];
$email = $row['email'];
$password = $row['password'];

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$course = $_POST['course'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$sql = "update tbl_crud set id = $id, name = '$name', course = '$course', email = '$email', password = '$password' where id = $id ";

	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "Data successfully updated!";
    header('location:view.php');
	}

	else {
		die(mysqli_error($con));
	}
}

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Student Information</title>
  </head>
  <body>
    <div class= "container my-5">
    	<form method = "post">

  <div class="form-group my-4">
    <label>Name</label>
    <input type="text" class="form-control text-center" placeholder = "Full Name" name = "name" autocomplete = "off" value = <?php echo $name;?>>
    </div>

  <div class="form-group my-4">
    <label>Course</label>
    <input type="text" class="form-control text-center" placeholder = "Course" name = "course" autocomplete = "off" value = <?php echo $course;?>>
    </div>

  <div class="form-group my-4">
    <label>Email</label>
    <input type="email" class="form-control text-center" placeholder = "Email" name = "email" autocomplete = "off" value = <?php echo $email;?>>
    </div>

  <div class="form-group my-4">
    <label>Password</label>
    <input type="text" class="form-control text-center" placeholder = "Password" name = "password" autocomplete = "off" value = <?php echo $password;?>>
    </div>

  <div class= "d-grid gap-2 my-5">
  <button type="submit" class="btn btn-warning" name = "submit">Update Data</button>
  </div>
  
</form>
    </div>

  </body>
</html>