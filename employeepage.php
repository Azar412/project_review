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
$emp_id=$_GET['emp_id'];
$query="select * from register where emp_id=$emp_id"; 
$result=mysqli_query($con,$query); 
?>

<div class="table-responsive container-fluid">
	<table class="table mt-5 text-dark table-bordered table-striped" align="center" > 
	<thead>
	<!-- <tr class="bg-white"> 

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

		</tr> -->
	</thead>
        <tr>
		<?php while($rows=mysqli_fetch_assoc($result))  
		{
		?>
        <div class="container">
        <div class="row mt-5">
                            <div class="col-lg-4">
                            <img src="./images/<?php echo $rows['image'];?>"  >
                            </div>
                            <div class="col-lg-4">
                            <p>NAME : <?php echo $rows['fname'];?></p>
                            <p>Gender : <?php echo $rows['gender'];?> </p>
                            <p>Email : <?php echo $rows['email'];?> </p>
                            <p>Designation : <?php echo $rows['designation'];?> </p>
                            <p>DOB : <?php echo date('d', strtotime($rows['dob']))." "
                            .date('M', strtotime($rows['dob']))." , ".date('Y', strtotime($rows['dob']));?> </p>
                             <p>Mobile : <?php echo $rows['mobile'];?> </p>
                             <a href="editprofile.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">Edit</a>
                            </div>

                        </div>
                        </div>
       
        <!-- <td ><a href="profiledelete.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">delete</a></td> -->
	    </tr>
	    
        </table>
        </div>

        
        <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="add-project.php?id=<?php echo $rows['id'];?>" >Add Project</a>
            </div>

            <div class="col-lg-4">
                <a href="daily-task.php?id=<?php echo $rows['id'];?>" >Daily Task</a>
            </div>
        </div>
        </div>
        <?php
        }
        ?>


      <script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>
