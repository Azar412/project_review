<?php include 'header.php';?>
<?php 
// error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
if(isset($_POST['save_data'])){
    $id =$_POST['id'];
    $empid =$_POST['emp_id'];
    $fname =$_POST['fname']; 
    $gen=$_POST['gen'];
    $email=$_POST['email_id'];
    $designation=$_POST['desig'];
    $dob=date('Y-m-d', strtotime($_POST['dob']));
    $number=$_POST['number'];
    $salary=$_POST['salary'];
    
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/" . $filename;

 

  
    $query = "update register set emp_id='$empid',fname='$fname',gender='$gen',email='$email',
    designation='$designation',dob='$dob',mobile=$number,salary=$salary,image='$filename' where id='$id' ";

    if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}

     $result =mysqli_query($con,$query);

     if(!$result){
         $error ="Not Registered";
     }
     else{
      header('location:view-profile.php');        
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

$query="select * from register where id= $id"; 
$result=mysqli_query($con,$query);

while($rows=mysqli_fetch_assoc($result)) 
        {
        ?>


<div class="form-design">
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-lg-6">
    <input type="hidden" name="id" class="form-control" value=<?php echo $rows['id'];?> placeholder="Enter the Emp id">

    <label>Employee Id</label>
<input type="text" name="emp_id" class="form-control" value=<?php echo $rows['emp_id'];?> placeholder="Enter the Emp id">

    </div>

<div class="col-lg-6">
<label>First Name</label>
<input type="text" name="fname" class="form-control " value="<?php echo $rows['fname'];?>" placeholder="Enter the First name">
</div>



<div class="col-lg-6 mt-2">
<label>Gender</label>
<select class="form-select" name="gen" aria-label="Default select example">
  <option  name="gen" value='Male'<?php if($rows['gender'] == 'Male'){echo "selected";}?> >Male</option>
  <option  name="gen" value='Female'<?php if($rows['gender'] == 'Female'){echo "selected";}?>>Female</option>
</select>
</div>

<div class="col-lg-6 mt-2">
<label>Email Id</label>
<input type="email" name="email_id" class="form-control" value=<?php echo $rows['email'];?> placeholder="Enter the Email">

</div>

<div class="col-lg-6 mt-2">
<label>Designation</label>


<select class="form-select" name="desig" aria-label="Default select example">
  <option name="desig" value='Web Developer'<?php if($rows['designation'] == 'Web Developer'){echo "selected";}?> >Web Developer
</option>
  <option  name="desig" value='Web Desiginer'<?php if($rows['designation'] == 'Web Desiginer'){echo "selected";}?> >Web Desiginer
</option>
  <option name="desig" value='Graphic Designer'<?php if($rows['designation'] == 'Graphic Designer'){echo "selected";}?> >Graphic Desiginer</option>
  <option name="desig" value='Digital Marketing'<?php if($rows['designation'] == 'Digital Marketing'){echo "selected";}?> >Digital Marketing</option>
</select>


</div>

<div class="col-lg-6 mt-2">
<label>Date of Birth</label>
<input type="date" name="dob" class="form-control" value=<?php echo $rows['dob'];?> placeholder="">
</div>

<div class="col-lg-6 mt-2">
<label>Mobile Number</label>
<input type="number" name="number" class="form-control" value=<?php echo $rows['mobile'];?> placeholder="+91">
</div>

<div class="col-lg-6 mt-2">
<label>Salary</label>
<input type="number" name="salary" class="form-control" value=<?php echo $rows['salary'];?> placeholder="Enter the salary">
</div>

<div class="col-lg-6 mt-2">
<label>Image</label>
<input class="form-control" type="file" name="uploadfile" value=<?php echo $rows['image'];?>  />
</div>

<div class="col-lg-12 mt-5 text-center">
<input class="btn btn-primary"  name="save_data" type="submit">
</div>
<?php 
        }
        ?>
</div>
</form>
</div>
</div>
</body>
</html>