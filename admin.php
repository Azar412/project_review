<?php include 'header.php'?>
    <!-- LOGIN AREA START -->

    <?php
error_reporting(0);
$con =mysqli_connect('localhost','root','','project');

if(isset($_POST['save_data'])){
$username = $_POST['username'];
$pass = $_POST['pass'];

$query = "select * from admin where username='$username' && password='$pass'";

$result =mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num){
    header('location:adminhome.php');
    $message="Successfully";
} else{
    $error ="Please Enter valid username and password";
}
}
?>




    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Sign In <br>To  Your Account</h1>
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
                            <input type="text" name="username" placeholder="Email*">
                            <input type="password" name="pass" placeholder="Password*">
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