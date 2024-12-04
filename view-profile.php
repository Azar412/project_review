<?php include 'header.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
	<link href="./css/style.css" rel="stylesheet">
</head>
<body>
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');
?>

<?php
 $query="select * from register"; 

$result=mysqli_query($con,$query); 
?>

<div class="table-responsive container-fluid">

	<table class="table mt-5 text-dark table-bordered table-striped" align="center" > 
	<thead>
	<tr class="bg-white"> 

   	     <th class="text-center bg-white">Employee ID</th>
			  <th class="text-center">Name</th>
			  <th class="text-center">GENDER</th>
              <th class="text-center">Email ID</th>
			  <th class="text-center">Designation</th>
              <th class="text-center">DOB</th>
              <th class="text-center">Mobile Number</th> 
              <th class="text-center">Salary</th>
              <th class="text-center">Image</th>
              <th>EDIT</th>
              <th>DELETE</th>

		</tr>
	</thead>
        <tr>
		<?php while($rows=mysqli_fetch_assoc($result))  
		{
		?>
        <td class="text-center "><?php echo $rows['emp_id'];?></td>
        <td class="text-center "><?php echo $rows['fname'];?></td>
        <td class="text-center"><?php echo $rows['gender'];?></td>
        <td class="text-center"><?php echo $rows['email'];?></td>
        <td class="text-center"><?php echo $rows['designation'];?></td>
        <td class="text-center"><?php echo $rows['dob'];?></td>
        <td class="text-center"><?php echo $rows['mobile'];?></td>
        <td class="text-center"><?php echo $rows['salary'];?></td>
        <td><img class="image" style="width:50px;" src="./images/<?php echo $rows['image']; ?>"></td>
        <td ><a href="profileedit.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">Edit</a></td>   
        <td ><a href="profiledelete.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">delete</a></td>
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
      <script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>

