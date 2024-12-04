<?php include 'header.php';?>

<?php 
error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
if(isset($_POST['save_data'])){

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

    $query1=mysqli_query($con,"select * from register where email='$email' ");
    $query2=mysqli_query($con,"select * from register where  emp_id='$empid' ");

    if(mysqli_num_rows($query1)>0){
     $mail_message= "Gmail  already exists";
         
    }else if(mysqli_num_rows($query2)>0){

      $mail_message1= "Emp id already exists";

    }else{

    $query = "insert into register (emp_id,fname,gender,email,designation,dob,mobile,salary,image) values
    ('$empid','$fname','$gen','$email','$designation','$dob',$number,$salary,'$filename')";

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
         $message="Registered Successfully";
        
     }
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
    <div class="col-lg-6">
    <label>Employee Id</label>
<input type="text" name="emp_id" class="form-control " placeholder="Enter the Emp id">
<?php 
            if(mysqli_num_rows($query2)>0){
                ?>
                 <div style="color:red;">
                <?php echo $mail_message1;
                ?>
                </div>

                <?php
            }
            ?>
    </div>

<div class="col-lg-6">
<label>First Name</label>
<input type="text" name="fname" class="form-control " placeholder="Enter the First name">
</div>



<div class="col-lg-6 mt-2">
<label>Gender</label>
<select class="form-select" name="gen" aria-label="Default select example">
  <option  name="gen" >Male</option>
  <option  name="gen">Female</option>
</select>
</div>

<div class="col-lg-6 mt-2">
<label>Email Id</label>
<input type="email" name="email_id" class="form-control" placeholder="Enter the Email">
<?php 
            if(mysqli_num_rows($query1)>0){
                ?>
                 <div style="color:red;">
                <?php echo $mail_message;
                ?>
                </div>

                <?php
            }
            ?>
</div>

<div class="col-lg-6 mt-2">
<label>Designation</label>

<select class="form-select" name="desig" aria-label="Default select example">
  <option name="desig" selected>Web Developer</option>
  <option  name="desig">Web Desiginer</option>
  <option name="desig">Graphic Desiginer</option>
  <option name="desig">Digital Marketing</option>
  <option name="desig">Project Quardinator</option>

</select>
</div>

<div class="col-lg-6 mt-2">
<label>Date of Birth</label>
<input type="date" name="dob" class="form-control" placeholder="">
</div>

<div class="col-lg-6 mt-2">
<label>Mobile Number</label>
<input type="number" name="number" class="form-control" placeholder="+91">
</div>

<div class="col-lg-6 mt-2">
<label>Salary</label>
<input type="number" name="salary" class="form-control" placeholder="Enter the salary">
</div>

<div class="col-lg-6 mt-2">
<label>Image</label>
<input class="form-control" type="file" name="uploadfile" value="" />
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