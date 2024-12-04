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
  <div class="container-fluid">
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');
?>

<?php
 $query="select * from project"; 

$result=mysqli_query($con,$query); 
?>

<div class="table-responsive container-fluid">
<h2 class="text-center">Project Status</h2>
	<table class="table mt-5 text-dark table-bordered bg-white" align="center" > 
	<thead>
	<tr class="bg-white"> 
            <!-- <th class="text-center bg-white">S.No</th> -->
              <th class="text-center bg-white">Project Name</th>
			  <th class="text-center">Quardinator</th>
			  <th class="text-center">Alloted Date</th>
			  <th class="text-center">Static</th>
              <th class="text-center">Dynamic</th>
              <th class="text-center"> Process</th> 
              <th class="text-center">Status</th>
              <th class="text-center">Payment</th>
              <th>EDIT</th>
              <th>DELETE</th>

		</tr>
	</thead>
        <tr class="bg-white">
		<?php while($rows=mysqli_fetch_assoc($result))  
		{
		?>
        <td class="text-center bg-white"><?php echo $rows['project_name'];?></td>
        <td class="text-center bg-white"><?php echo $rows['quardinator'];?></td>
        <td class="text-center bg-white"><?php echo $rows['dates'];?></td>
        <td class="text-center bg-white"><?php echo $rows['static'];?></td>
        <td class="text-center bg-white"><?php echo $rows['dynamic'];?></td>
        <td class="text-center bg-white"><?php echo $rows['process'];?></td>
        <td class="text-center bg-white"><?php echo $rows['status'];?></td>
        <td class="text-center bg-white"><?php echo $rows['payment'];?></td>
        <td class="bg-white"><a href="projectedit.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">Edit</a></td>   
        <td class="bg-white"><a href="projectdelete.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">delete</a></td>
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>
      <script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>

