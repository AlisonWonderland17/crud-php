<?php

include 'connect_db.php';

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>View Database</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class = "container my-5">

<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">ID No.</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "Select * from tbl_crud";
  $result = mysqli_query($con, $sql);
  if($result) {
  	while($row = mysqli_fetch_assoc($result)){
  		$id = $row['id'];
  		$name = $row['name'];
  		$course = $row['course'];
  		$email = $row['email'];
  		$password = $row['password'];
      
  		echo '<tr class = "table-danger">
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$course.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>
	<button class = "btn btn-primary"><a href="update.php?updateid='.$id.'" class = "text-light text-decoration-none">Modify</a></button>
	<button class = "btn btn-danger"><a href="delete.php?deleteid='.$id.'" class = "text-light text-decoration-none">Delete</a></button>
	</td>
    </tr>';
 } 		
}
  ?>

</tbody>
</table>

 <div class= "d-grid gap-2 my-5">
 <button class="btn btn-primary my-5"><a href = "index.php" class = "text-light text-decoration-none">Add Student Data</a></button>
 </div>
 </div>
 </body>
 </html>