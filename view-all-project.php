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
    <style>
        th,td{
            border:2px solid black !important;
            text-align: center;
        }
        </style>
</head>
<body class="">

  <div class="container">
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');
?>

<?php
 $query="select * from project where status='ongoing' "; 

$result=mysqli_query($con,$query); 
?>

<div class="table-responsive container-fluid">
<h2 class="text-center">Project Status</h2>
<h2 class="text-center">ONGOING</h2>

	<table class="table mt-5 text-dark table-bordered bg-white" align="center" > 
	<thead>
	<tr class="bg-white"> 
            <!-- <th class=" bg-white">S.No</th> -->
              <th class=" bg-white">PROJECT NAME</th>
              <th class="">QUARDINATOR</th>
              <th class="">ALLOATED DATE</th>
              <th class="">STATIC WORK</th>
              <th class="">DYNAMIC WORK</th>
              <th class="">CURRENT PROCESS</th> 
              <th class="">STATUS</th>
             

		</tr>
	</thead>
        <tr class="bg-white">
		<?php while($rows=mysqli_fetch_assoc($result))  
		{
		?>
        <td class=" bg-white"><?php echo $rows['project_name'];?></td>
        <td class=" bg-white"><?php echo $rows['quardinator'];?></td>
        <td class=" bg-white"><?php echo $rows['dates'];?></td>
        <td class=" bg-white"><?php echo $rows['static'];?></td>
        <td class=" bg-white"><?php echo $rows['dynamic'];?></td>
        <td class=" bg-white"><?php echo $rows['process'];?></td>
        <td class=" bg-white"><?php echo $rows['status'];?></td>
       
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>

        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

        
  <div class="container">


<?php
 $query1="select * from project where status='completed' "; 

$result1=mysqli_query($con,$query1); 
?>

<div class="table-responsive container-fluid">
<h2 class="text-center">COMPLETED</h2>

	<table class="table mt-5 text-dark table-bordered bg-white" align="center"> 
	<thead>
	<tr class="bg-white"> 
            <!-- <th class=" bg-white">S.No</th> -->
              <th class=" bg-white">PROJECT NAME</th>
			  <th class="">QUARDINATOR</th>
			  <th class="">ALLOATED DATE</th>
			  <th class="">STATIC WORK</th>
              <th class="">DYNAMIC WORK</th>
              <th class="">PROCESS</th> 
              <th class="">STATUS</th>
             

		</tr>
	</thead>
        <tr class="bg-white">
		<?php while($rows=mysqli_fetch_assoc($result1))  
		{
		?>
        <td class=" bg-white"><?php echo $rows['project_name'];?></td>
        <td class=" bg-white"><?php echo $rows['quardinator'];?></td>
        <td class=" bg-white"><?php echo $rows['dates'];?></td>
        <td class=" bg-white"><?php echo $rows['static'];?></td>
        <td class=" bg-white"><?php echo $rows['dynamic'];?></td>
        <td class=" bg-white"><?php echo $rows['process'];?></td>
        <td class=" bg-white"><?php echo $rows['status'];?></td>
       
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

