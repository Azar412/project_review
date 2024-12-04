<?php include 'header.php';?>
<?php 
// error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
if(isset($_POST['save_data'])){

    $pname =$_POST['pname']; 
    $quar=$_POST['quar'];
    $name=$_POST['name']; 
    // $name1=implode(",",$name);
    $dob=date('Y-m-d', strtotime($_POST['dates'])); 
    $dynamic=$_POST['dy_name'];                                                                                                                                                                                                                                                                                                                                                                                                                                 
    $process= $_POST['process'];
    $status=$_POST['status'];
    $payment=$_POST['payment'];

        $query = "insert into project (project_name,quardinator,dates,static,dynamic,process,status,payment) values
        ('$pname','$quar','$dob','$name','$dynamic','$process','$status','$payment')";
    
     $result =mysqli_query($con,$query);

     if(!$result){
         $error ="Not Registered";
     }
     else{
         $message="Registered Successfully";
         header('location:adminhome.php');
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
            <h1>Register Here</h1>
        </div>
    </div>

<div class="form-design">
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
  
<?php 
$query0="select * from add_project"; 
$result0=mysqli_query($con,$query0);
?>

<div class="col-lg-6 mt-2">

<label>Project Name</label>
<select class="form-select" name="pname" aria-label="Default select example" >
<?php  while($rows0 = mysqli_fetch_assoc($result0)):;?>
  <option  values="<?php echo $rows0['project_name'];?>"><?php echo $rows0['project_name'];?></option>
  <?php endwhile;?>

</select>
        </div>

<div class="col-lg-6">
<label>Date Started</label>
<input type="date" name="dates" class="form-control " placeholder="Enter the First name">
</div>

<div class="col-lg-6 mt-2">
<label>Project Quardinator</label>
<select class="form-select" name="quar" aria-label="Default select example">
<option name="pname">--</option>
  <option  name="quar"> Vignesh </option>
  <option  name="quar">Naveen GS</option>
  <option  name="quar">Priya</option>
</select>
</div>

<?php 
$query="select * from register where designation='Web Desiginer' "; 
$result=mysqli_query($con,$query);
?>

<div class="col-lg-6 mt-2">

<label>Static Work</label>
<select class="form-select" name="name" aria-label="Default select example"  >
<option name="pname">--</option>

<?php  while($rows = mysqli_fetch_assoc($result)):;?>
  <option  values="<?php echo $rows['fname'];?>"><?php echo $rows['fname'];?></option>
  <?php endwhile;?>

</select>
        </div>

        <div class="col-lg-6 mt-2">

        <?php 
$query1="select * from register where designation='Web Developer' "; 
$result1=mysqli_query($con,$query1);
?>


<label>Dynamic Work</label>
<select class="form-select" name="dy_name" aria-label="Default select example" >
<option name="pname">--</option>

<?php  while($rows1 = mysqli_fetch_assoc($result1)):;?>
  <option  values="<?php echo $rows1['fname'];?>"><?php echo $rows1['fname'];?></option>
  <?php endwhile;?>

</select>
        </div>


<div class="col-lg-6 mt-2">
<label>Process</label>

<select class="form-select" name="process" aria-label="Default select example" >
  <option value="Static Work" selected>Static Work</option>
  <option  value="Dynamic Work">Dynamic Work</option>
  
</select>
</div>

<div class="col-lg-6 mt-2">
<label>Status</label>

<select class="form-select" name="status" aria-label="Default select example">
  <option name="status" selected> Completed</option>
  <option  name="status">Ongoing</option>
  
</select>
</div>

<div class="col-lg-6 mt-2">
<label>Payment Status</label>

<select class="form-select" name="payment" aria-label="Default select example">
  <option name="payment" selected>Pending</option>
  <option name="Payment">Received</option>
  
</select>
</div>

<div class="col-lg-12 mt-5 text-center">
<input class="btn btn-primary"  name="save_data" type="submit">
</div>

</div>
</form>
</div>
</div>
</body>
</html>