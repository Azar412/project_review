<?php include 'header.php';?>
<div class="container mt-5">

<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');
$id=$_GET['dob'];

   $query = "select * from mom where dob='$id' ";
   $result = mysqli_query($con, $query);

if ($rows = mysqli_fetch_assoc($result)) {
    ?>
    <a href="view-mom-pdf.php?dob=<?php echo $rows['dob']; ?>" class="btn btn-primary">View Pdf
    </a>
    <a href="edit-mom.php?dob=<?php echo $rows['dob']; ?>" class="btn btn-primary">Edit
    </a>
    <a href="edit-attendence.php?dob=<?php echo $rows['dob']; ?>" class="btn btn-primary">Edit Attendence
    </a>
    <?php
}
?>
</div>
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');
$id=$_GET['dob'];?>


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

<style>
  th,td{
        border:2px solid black;
        background-color: #fff;
    }
    .border1{
      font-weight: bold;
    }
    li{
        list-style-type: number;
    }
</style>

<body>

<?php 

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');
$query1="select * from status where dob='$id' "; 
$result=mysqli_query($con,$query1); 

?>
<div class="container mt-5">  
<h2 class="text-center text-primary">WEB DESIGN AND DEVELOPMENT TEAM</h2>
<div class="row d-flex justify-content-center">
<div class="col-lg-12 ">
<table class="table ">
    <tr>
        <th>Name</th>
        <th>status</th>
    </tr>
<?php while($rows=mysqli_fetch_assoc($result))  
		{
		?>
<tr

<?php
if ($rows['attendance_status'] == 'absent')
{
    ?>

style="background-color: red !important;color:white;"
<?php
}
?>>
 <td ><?php echo $rows['name'];?></td>
 <td><?php echo $rows['attendance_status'];?></td>

        </tr>


        <?php }
        
        ?>
        </div>
</table>
</div>
</div>


<?php
 $query="select * from mom where dob='$id' "; 

$result=mysqli_query($con,$query); 
?>
   
<?php while($rows1=mysqli_fetch_assoc($result))  
		{
		?>
<div class="container">
    <div class="row border1 mt-5">   
<ul>
    <li> <?php echo $rows1['point1'];?></li>
    <li> <?php echo $rows1['point2'];?></li>
    <li> <?php echo $rows1['point3'];?></li>
    <li> <?php echo $rows1['point4'];?></li>
    <li> <?php echo $rows1['point5'];?></li>


    </ul>
<?php 
}
?>
</div>

        </div>
      <script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>

