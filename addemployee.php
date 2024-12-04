<?php include 'header.php'?>

<?php 
error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
if(isset($_POST['save_data'])){

    $empid =$_POST['emp_id'];
    $fname =$_POST['fname'];
    $lname=$_POST['lname'];
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

    $query = "insert into register (emp_id,fname,lname,gender,email,designation,dob,mobile,salary,image) values
    ('$empid','$fname','$lname','$gen','$email','$designation','$dob',$number,$salary,'$filename')";

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
         header('location:index.php');
     }
}
}
?>

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">Employee Details</h4>
                        <form  action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="emp_id" placeholder="Employee ID">
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
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="fname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="lname"  placeholder="Last Name">
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select" name="gen">
                                            <option>Gender</option>
                                            <option name="gen">Male </option>
                                            <option name="gen">Female </option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email_id"  placeholder="Email ID">
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
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item">
                                        <select class="" name="desig">
                                            <option >Designation</option>
                                            <option name="desig">Web Developer </option>
                                            <option name="desig">Web Designer </option>
                                            <option name="desig">Graphic Designer </option>
                                            <option name="desig">Digital Marketing </option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="date" name="dob" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="number"  name="number" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="number"  name="salary" placeholder="Enter the Salary">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ">
                                        <input type="file" name="uploadfile" placeholder="image">
                                    </div>
                                </div>
                            </div>
                           
                            
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase mt-5"  name="save_data" type="submit">
                                    Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->



<?php include 'footer.php'?>