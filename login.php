<?php include 'header.php'?>



<?php
session_start();

error_reporting(0);
$con =mysqli_connect('localhost','root','','project');

if(isset($_POST['save_data'])){
$emp_id = $_POST['emp_id'];
$dob =date('Y-m-d', strtotime($_POST['dob']));

$query = "select * from register where emp_id='$emp_id' && emp_id='$emp_id'";

$result =mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num){
    // $_SESSION['user_id'] = $username;
    header("location:employeepage.php?emp_id= $emp_id");
    $message="Successfully";
} else{
    $error ="Please Enter valid username and password";
}
}
?>


    <!-- LOGIN AREA START -->
    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Employee Login </h1>
                    </div>
                </div>
            </div>
            <?php
       if(!$num){
        ?>
       
            <?php echo $error;?>
       
        <?php 
        }else
        {
            ?>
                <?php echo $message;?>
            <?php
        } 
        ?>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="account-login-inner">
                        <form action="#" method="post" class="ltn__form-box contact-form-box">
                            <input type="text" name="emp_id" placeholder="Employee Id*">
                            <input type="password" name="dob" placeholder="Password*">
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" name="save_data" type="submit">SIGN IN</button>
                            </div>
                            <!-- <div class="go-to-btn mt-20">
                                <a  href="#" title="Forgot Password?" data-bs-toggle="modal" data-bs-target="#ltn_forget_password_modal"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

    <?php include 'footer.php';?>