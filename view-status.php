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
       td,th{
        border:3px solid black !important;
        background-color: #fff !important;
       }
    </style>
</head>
<body>

    <div class="container-fluid">
<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');
?>

<h2 class="text-center mb-5">Project Status</h2>

<?php
 $query1="select * from project where static='Gowtham'"; 

$result1=mysqli_query($con,$query1); 
?>




<div class="table-responsive container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-9">
	<table class="table mt-2 text-dark table-bordered " align="center" > 
	<thead>
    <h2 class="text-center text-white text-uppercase  bg-primary"> Gowtham</h2>

	<tr class="bg-white"> 
              <th class="text-center bg-white">Project Name</th>
			  <th class="text-center">Quardinator</th>
			  <th class="text-center">Alloted Date</th>
              <th class="text-center"> Current Process</th> 
              <th class="text-center">Status</th>

		</tr>
	</thead>
        <tr>
		<?php while($rows1=mysqli_fetch_assoc($result1))  
		{
		?>
        <td class="text-center "><?php echo $rows1['project_name'];?></td>
        <td class="text-center "><?php echo $rows1['quardinator'];?></td>
        <td class="text-center"><?php echo $rows1['dates'];?></td>
        <td class="text-center"><?php echo $rows1['process'];?></td>
        <td class="text-center"><?php echo $rows1['status'];?></td>
       
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>
    </div>

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

    
<?php
 $query2="select * from project where static='Mohammed Azarudeen'"; 

$result2=mysqli_query($con,$query2); 

?>


<div class="table-responsive container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-9 ">
	<table class="table mt-2 text-dark table-bordered " align="center" > 
	<thead>
    <h2 class="text-center text-white text-uppercase  bg-primary">Mohammed Azarudeen</h2>

	<tr class="bg-white"> 
              <th class="text-center bg-white">Project Name</th>
			  <th class="text-center">Quardinator</th>
			  <th class="text-center">Alloted Date</th>
              <th class="text-center"> Current Process</th> 
              <th class="text-center">Status</th>

		</tr>
	</thead>
        <tr>
		<?php while($rows2=mysqli_fetch_assoc($result2))  
		{
		?>
        <td class="text-center "><?php echo $rows2['project_name'];?></td>
        <td class="text-center "><?php echo $rows2['quardinator'];?></td>
        <td class="text-center"><?php echo $rows2['dates'];?></td>
        <td class="text-center"><?php echo $rows2['process'];?></td>
        <td class="text-center"><?php echo $rows2['status'];?></td>
       
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>
    </div>


    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->


    <?php
 $query3="select * from project where static='Sharath kannan'"; 

$result3=mysqli_query($con,$query3); 
?>


<div class="table-responsive container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-9 ">
	<table class="table mt-2 text-dark table-bordered " align="center" > 
	<thead>
    <h2 class="text-center text-white text-uppercase  bg-primary">Sharth Kannan</h2>

	<tr class="bg-white"> 
              <th class="text-center bg-white">Project Name</th>
			  <th class="text-center">Quardinator</th>
			  <th class="text-center">Alloted Date</th>
              <th class="text-center"> Current Process</th> 
              <th class="text-center">Status</th>

		</tr>
	</thead>
        <tr>
		<?php while($rows3=mysqli_fetch_assoc($result3))  
		{
		?>
        <td class="text-center "><?php echo $rows3['project_name'];?></td>
        <td class="text-center "><?php echo $rows3['quardinator'];?></td>
        <td class="text-center"><?php echo $rows3['dates'];?></td>
        <td class="text-center"><?php echo $rows3['process'];?></td>
        <td class="text-center"><?php echo $rows3['status'];?></td>
       
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>
    </div>

     <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <?php
 $query4="select * from project where dynamic='Racky'"; 

$result4=mysqli_query($con,$query4); 
?>


<div class="table-responsive container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-9 ">
	<table class="table mt-2 text-dark table-bordered " align="center" > 
	<thead>
    <h2 class="text-center text-white text-uppercase  bg-primary"> Racky</h2>

	<tr class="bg-white"> 
              <th class="text-center bg-white">Project Name</th>
			  <th class="text-center">Quardinator</th>
			  <th class="text-center">Alloted Date</th>
              <th class="text-center"> Current Process</th> 
              <th class="text-center">Status</th>

		</tr>
	</thead>
        <tr>
		<?php while($rows4=mysqli_fetch_assoc($result4))  
		{
		?>
        <td class="text-center "><?php echo $rows4['project_name'];?></td>
        <td class="text-center "><?php echo $rows4['quardinator'];?></td>
        <td class="text-center"><?php echo $rows4['dates'];?></td>
        <td class="text-center"><?php echo $rows4['process'];?></td>
        <td class="text-center"><?php echo $rows4['status'];?></td>
       
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>
    </div>

     <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
     <?php
 $query5="select * from project where dynamic='Siva Kumar S'"; 

$result5=mysqli_query($con,$query5); 
?>


<div class="table-responsive container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-9 ">
	<table class="table mt-2 text-dark table-bordered " align="center" > 
	<thead>
    <h2 class="text-center text-white text-uppercase  bg-primary"> Siva Kumar S</h2>

	<tr class="bg-white"> 
              <th class="text-center bg-white">Project Name</th>
			  <th class="text-center">Quardinator</th>
			  <th class="text-center">Alloted Date</th>
              <th class="text-center"> Current Process</th> 
              <th class="text-center">Status</th>

		</tr>
	</thead>
        <tr>
		<?php while($rows5=mysqli_fetch_assoc($result5))  
		{
		?>
        <td class="text-center "><?php echo $rows5['project_name'];?></td>
        <td class="text-center "><?php echo $rows5['quardinator'];?></td>
        <td class="text-center"><?php echo $rows5['dates'];?></td>
        <td class="text-center"><?php echo $rows5['process'];?></td>
        <td class="text-center"><?php echo $rows5['status'];?></td>
       
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

    <?php
 $query6="select * from project where dynamic='Naveen Vimal' "; 

$result6=mysqli_query($con,$query6); 
?>


<div class="table-responsive container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-9 ">
	<table class="table mt-2 text-dark table-bordered " align="center" > 
	<thead>
    <h2 class="text-center text-white text-uppercase bg-primary"> Naveen Vimal </h2>

	<tr class="bg-white"> 
              <th class="text-center bg-white">Project Name</th>
			  <th class="text-center">Quardinator</th>
			  <th class="text-center">Alloted Date</th>
              <th class="text-center"> Current Process</th> 
              <th class="text-center">Status</th>

		</tr>
	</thead>
        <tr>
		<?php while($rows6=mysqli_fetch_assoc($result6))  
		{
		?>
        <td class="text-center "><?php echo $rows6['project_name'];?></td>
        <td class="text-center "><?php echo $rows6['quardinator'];?></td>
        <td class="text-center"><?php echo $rows6['dates'];?></td>
        <td class="text-center"><?php echo $rows6['process'];?></td>
        <td class="text-center"><?php echo $rows6['status'];?></td>
       
	    </tr>
	    <?php
        }
        ?>
        </table>
        </div>
        </div>
    </div>
    </div>
    <div class="container mt-5">
                            <div class="row d-flex justify-content-center mb-5">
                                
                                <div class="col-lg-4">
                                <a href="view-status-pdf.php" target="_blank" class="theme-btn-1 btn btn-effect-1" tabindex="0">View Pdf</a>
                                </div>
                            </div>
                        </div>
     <script src="./assets/js/jquery.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>

