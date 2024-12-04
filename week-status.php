<?php include 'header.php';?>
<?php 
error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
if(isset($_POST['save_data'])){

    $id=$_POST['emp_id'];
    $name=$_POST['emp_name']; 
    $pname =$_POST['pname']; 
    $dob=date('Y-m-d', strtotime($_POST['dates'])); 
    $time=$_POST['hours'];                                                                                                                                                                                                                                                                                                                                                                                                                                 
    $process= $_POST['day'];
    $des=$_POST['des'];

        $query = "insert into week (id,name,date,project_name,hours,status,description) values
        ($id,'$name','$dob','$pname','$time','$process','$des')";
    
     $result =mysqli_query($con,$query);

     if(!$result){
         $error ="Not Registered";
     }
     else{
         $message="Registered Successfully";
         header('location:week-status.php?');
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
            <h1>Register Here</h1>
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
<div class="col-lg-6">
<label>id</label>
<?php  if($rows = mysqli_fetch_assoc($result)):;?>

<input type="text" name="emp_id" class="form-control" value="<?php echo $rows['emp_id'];?>" placeholder="Enter the Emp id" >
</div>

<div class="col-lg-6">
<label>Name</label>

<input type="text" name="emp_name" class="form-control" value="<?php echo $rows['fname'];?>" placeholder="Enter the Emp id" >
<?php endif;?>
</div>

<div class="col-lg-6">
<label>Date </label>
<input type="date" name="dates" class="form-control " placeholder="Enter the First name">
</div>

<div class="col-lg-6 mt-2">
<label>Select Day</label>

<select class="form-select" name="day" aria-label="Default select example" >
  <option  value="Monday" >Monday</option>
  <option  value="Tuesday" >Tuesday</option>
  <option   value="Wednesday">Wednesday</option>
  <option   value="Thursday">Thursday</option>
  <option   value="Friday">Friday</option>
  <option   value="Saturday">Saturday</option>

</select>
</div>
<?php 
$query="select * from add_project "; 
$result0=mysqli_query($con,$query);
?>
<div class="col-lg-6 mt-2">

<label>Project Name</label>
<select class="form-select" name="pname" aria-label="Default select example" >
<?php  while($rows0 = mysqli_fetch_assoc($result0)):;?>
  <option  values="<?php echo $rows0['project_name'];?>"><?php echo $rows0['project_name'];?></option>
  <?php endwhile;?>

</select>
        </div>



        <div class="col-lg-6 mt-2">
<label>Hours Worked</label>

<!-- <input type="time" id=appt" min="09:00" max="18:00" required?> -->
<input class="form-control" type="text"  name="hours">

</div>

<!-- <div class="col-lg-6 mt-2">
<label>Status</label>

<select class="form-select" name="process" aria-label="Default select example" >
  <option  value="Ongoing" >Ongoing</option>
  <option  value="completed" >completed</option>
  <option   value="client side content pending">client side content pending</option>
  <option   value="Completed & waiting for client approval">Completed & waiting for client approval</option>

  
</select>
</div> -->

<div class="col-lg-6 mt-2">
    <label>Description</label>
<textarea name="des"></textarea>
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