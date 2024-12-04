<?php include 'header.php';?>
<?php 
// error_reporting(0);



$con =mysqli_connect("localhost","root","","project");
if(isset($_POST['save_data'])){

    $id=$_POST['emp_id'];
    $pname=$_POST['project_name']; 
    $plink=$_POST['project_link'];
    $quar=$_POST['quar'];
    $stname=$_POST['stname']; 
    $dob=date('Y-m-d', strtotime($_POST['dates'])); 
    $dynamic=$_POST['dy_name'];                                                                                                                                                                                                                                                                                                                                                                                                                                 
    $status=$_POST['status'];

        $query = "insert into add_project (emp_id,project_name,project_link,date_started,
        project_q,static_work,dynamic_work,status) values
        ($id,'$pname','$plink','$dob','$quar','$stname','$dynamic','$status')";
    
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
    <?php
if(!$result){
    echo $error;
}
else{
    $message="Registered Successfully";
    header('location:adminhome.php');
}

?>


<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Add Project</h1>
        </div>
    </div>

    


<div class="form-design">
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<?php 

$id=$_GET['id'];
$query="select * from register where id=$id"; 
$result=mysqli_query($con,$query);
?>
<div class="col-lg-6" hidden>
<label>id</label>
<?php  if($rows = mysqli_fetch_assoc($result)):;?>

<input type="text" name="emp_id" class="form-control" value="<?php echo $rows['emp_id'];?>" placeholder="Enter the Emp id" >
<?php endif;?>

</div>



<div class="col-lg-6 mt-2">

<label>Project Name</label>
<input type="text" name="project_name" >
        </div>


        <div class="col-lg-6 mt-2">

<label>Project Link</label>
<input type="text" name="project_link" >
        </div>

<div class="col-lg-6">
<label>Date Started</label>
<input type="date" name="dates" class="form-control " placeholder="Enter the First name">
</div>

<?php 
$query="select * from register where designation='Project Quardinator' "; 
$result=mysqli_query($con,$query);
?>

<div class="col-lg-6 mt-2">

<label>Project Quardinator</label>
<select class="form-select" name="quar" aria-label="Default select example"  >
<option name="qname">--</option>

<?php  while($rows = mysqli_fetch_assoc($result)):;?>
  <option  values="<?php echo $rows['fname'];?>"><?php echo $rows['fname'];?></option>
  <?php endwhile;?>

</select>
        </div>



<?php 
$query="select * from register where designation='Web Desiginer' "; 
$result=mysqli_query($con,$query);
?>

<div class="col-lg-6 mt-2">

<label>Static Work</label>
<select class="form-select" name="stname" aria-label="Default select example"  >
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
<label>Status</label>

<select class="form-select" name="status" aria-label="Default select example">
  <option name="status" selected> Completed</option>
  <option  name="status">Ongoing</option>
  
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