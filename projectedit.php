<?php include 'header.php';?>
<?php 
error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
if(isset($_POST['save_data'])){
    $id=$_POST['id'];
    $pname =$_POST['pname']; 
    $quar=$_POST['quar'];
    $name=$_POST['name']; 
    $dob=date('Y-m-d', strtotime($_POST['dates'])); 
    $dynamic=$_POST['dy_name'];                                                                                                                                                                                                                                                                                                                                                                                                                                 
    $process= $_POST['process'];
    $status=$_POST['status'];
    $payment=$_POST['payment'];

  
    $query = "update project set project_name='$pname',quardinator='$quar',dates='$dob',static='$name',
    dynamic='$dynamic',process='$process',status='$status',payment='$payment' where id='$id' ";


     $result =mysqli_query($con,$query);

     if(!$result){
         $error ="Not Registered";
     }
     else{
      header('location:project-status.php');        
     }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Task</title>
    <link href="css/custom.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Update Here</h1>
        </div>
    </div>
    <?php 
$id = $_GET['id'];

$query="select * from project where id= $id"; 
$result=mysqli_query($con,$query);

while($rows=mysqli_fetch_assoc($result)) 
        {
        ?>


<div class="form-design">
<form action="" method="post" >
<div class="row">
    <div class="col-lg-6">
    <input type="hidden" name="id" class="form-control" value=<?php echo $rows['id'];?> placeholder="Enter the Emp id">

    <label>Project Name</label>
<input type="text" name="pname" class="form-control" value="<?php echo $rows['project_name'];?>" placeholder="Enter the Emp id">

    </div>

    <div class="col-lg-6">
<label>Date Started</label>
<input type="date" name="dates" class="form-control" value="<?php echo $rows['dates'];?>" placeholder="Enter the First name">
</div>

<div class="col-lg-6 mt-2">
<label>Project Quardinator</label>
<select class="form-select" name="quar" aria-label="Default select example">
<option name="quar" value='--'<?php if($rows['quardinator'] == '--'){echo "selected";}?>>--</option>
  <option  name="quar" value='Vignesh'<?php if($rows['quardinator'] == 'Vignesh'){echo "selected";}?>> Vignesh </option>
  <option  name="quar" value='Naveen GS'<?php if($rows['quardinator'] == 'Naveen GS'){echo "selected";}?> >Naveen GS</option>
  <option  name="quar" value='Priya'<?php if($rows['quardinator'] == 'Priya'){echo "selected";}?>>Priya</option>
</select>
</div>

<div class="col-lg-6 mt-2">

<label>Static Work</label>
<select class="form-select" name="name" aria-label="Default select example"  >
<option value='--'<?php if($rows['static'] == '--'){echo "selected";}?>>--</option>
<option  value='Mohammed Azarudeen'<?php if($rows['static'] == 'Mohammed Azarudeen'){echo "selected";}?>> Mohammed Azarudeen</option>
<option  value='Gowtham'<?php if($rows['static'] == 'Gowtham'){echo "selected";}?>>Gowtham</option>
<option  value='Sharath kannan'<?php if($rows['static'] == 'Sharath kannan'){echo "selected";}?>> Sharath kannan</option>


</select>
        </div>




<div class="col-lg-6 mt-2">
<label>Dynamic</label>


<select class="form-select" name="dy_name" aria-label="Default select example">
  <option  value='--'<?php if($rows['dynamic'] == '--'){echo "selected";}?> >--
</option>
  <option   value='Siva Kumar S'<?php if($rows['dynamic'] == 'Siva Kumar S'){echo "selected";}?> >Siva Kumar S
</option>
  <option  value='Naveen Vimal'<?php if($rows['dynamic'] == 'Naveen Vimal'){echo "selected";}?> >Naveen Vimal</option>
  <option  value='Racky'<?php if($rows['dynamic'] == 'Racky'){echo "selected";}?> >Racky</option>
  <option  value='Prakash'<?php if($rows['dynamic'] == 'Prakash'){echo "selected";}?> >Prakash</option>

</select>


</div>

<div class="col-lg-6 mt-2">
<label>Process</label>

<select class="form-select" name="process" aria-label="Default select example" >
  <option value='Static Work'<?php if($rows['process'] == 'Static Work'){echo "selected";}?>>Static Work</option>
  <option  value='Dynamic Work'<?php if($rows['process'] == 'Dynamic Work'){echo "selected";}?>>Dynamic Work</option>
  
</select>
</div>

<div class="col-lg-6 mt-2">
<label>Status</label>

<select class="form-select" name="status" aria-label="Default select example">
  <option value='completed'<?php if($rows['status'] == 'completed'){echo "selected";}?>> Completed</option>
  <option  value=' Ongoing'<?php if($rows['status'] == 'Ongoing'){echo "selected";}?>>Ongoing</option>
  
</select>
</div>

<div class="col-lg-6 mt-2">
<label>Payment Status</label>

<select class="form-select" name="payment" aria-label="Default select example">
  <option value='Pending'<?php if($rows['payment'] == 'Pending'){echo "selected";}?>>Pending</option>
  <option value='Received'<?php if($rows['payment'] == 'Received'){echo "selected";}?>>Received</option>
  
</select>
</div>


<?php 
        }
        ?>
        <div class="col-lg-12 mt-5 text-center">
<input class="btn btn-primary"  name="save_data" type="submit">
</div>
</div>
</form>
</div>
</div>
</body>
</html>