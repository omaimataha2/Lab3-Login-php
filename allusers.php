<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Form </title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</head>
</head>
<body>

<?php

$users=file("user.txt");

echo '<table class="table table-striped">
  <thead>
    <tr >
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Adress</th>
      <th scope="col">Country</th>
      <th scope="col">Gendr</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
      <th scope="col">Department</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>';

foreach ($users as $index=>$l){
    $line = explode(":",$l);


  echo "<tbody>";
    echo "<tr>
      <td>{$line[0]}</td>
      <td>{$line[1]}</td>
      <td>{$line[2]}</td>
      <td>{$line[3]}</td>
      <td>{$line[4]}</td>
      <td>{$line[5]}</td>
      <td>{$line[6]}</td>
      <td>{$line[7]}</td>
      <td><button class='btn btn-primary'> <a  href='./viewuser.php?id={$index}' class='text-decoration-none text-white'>View</a>  </button></td>
      <td><button class='btn btn-primary'><a  href='./edituser.php?id={$index}' class='text-decoration-none text-white'>Edit</a></button></td>
      <td><button class='btn btn-primary'><a  href='./deleteuser.php?id={$index}' class='text-decoration-none text-white'>Delete</a></button></td>
      
    </tr> ";
   
 echo "</tbody>";
}
echo "</table>";


?>

</body>
</html>