<?php

include 'connect_db.php';
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$course = $_POST['course'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$sql = "insert into tbl_crud (name, course, email, password)values('$name', '$course', '$email', '$password')";

	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "Data successfully added!";
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

    <title>Student Information</title>
  </head>
  <body>
    <div class= "container my-5">
    	<form method = "post">

  <div class="form-group my-4">
    <label>Name</label>
    <input type="text" class="form-control text-center" placeholder = "Full Name" name = "name" autocomplete = "off">
    </div>

  <div class="form-group my-4">
    <label>Course</label>
    <input type="text" class="form-control text-center" placeholder = "Course" name = "course" autocomplete = "off">
    </div>

  <div class="form-group my-4">
    <label>Email</label>
    <input type="email" class="form-control text-center" placeholder = "Email" name = "email" autocomplete = "off">
    </div>

  <div class="form-group my-4">
    <label>Password</label>
    <input type="text" class="form-control text-center" placeholder = "Password" name = "password" autocomplete = "off">
    </div>
  
  <div class= "d-grid gap-2 my-5">
  <button type="submit" class="btn btn-warning text-decoration-none" name = "submit">Save Data</button>
  </div>
</form>
    </div>

  </body>
</html>