<?php include 'header.php';
// error_reporting(0);
$con =mysqli_connect("localhost","root","","project");

?>


<?php 
if(isset($_POST['submit']))
{
    
    $emp_id=$_POST['id'];
    $name=$_POST['name'];
    $atten=$_POST['atten'];
    $dob=date('Y-m-d', strtotime($_POST['dob']));
    $query1=mysqli_query($con,"select * from status where date='$dob'");

    if(mysqli_num_rows($query1)>0){

            echo "<h3>Date already Exsist</h3>";
    }else{

    foreach($emp_id as $index => $ids)
    {
        $s_emp= $ids;
        $s_name= $name[$index];
        $s_atten= $atten[$index];

        $query= "insert into status(emp_id,name,attendance_status,dob) values ('$s_emp', '$s_name','$s_atten','$dob')";
        $result =mysqli_query($con,$query);
    }
}
if(!$result){
    $error ="Not Registered";
}
else{
   header('location:attendence-status.php');
   
}
}

?>
<div class="container">
<div class="row">
<div class="col-lg-6 mt-2">
<form action="" method="post">

<label>Date</label>
<input type="date" name="dob" class="form-control" placeholder="">
</div>

<?php 
$con =mysqli_connect("localhost","root","","project");
?>

<?php
$query="select * from status"; 
$result=mysqli_query($con,$query);
?>



<table class="table  table-bordered mt-5">
    <tr>
        <th>Name</th>
   <!-- <th>Designation</th> -->
        <th>Present</th>
        <th>Absent</th>
    </tr>
<?php while($rows=mysqli_fetch_assoc($result)) 
{
?>
     <tr>

        <td><?php echo $rows['fname'];?></td>

    <input type="hidden" name="id[]" class="form-control" value=<?php echo $rows['emp_id'];?> placeholder="Enter the Emp id">

         <input type="hidden" name="name[]" class="form-control" value="<?php echo $rows['fname'];?>" placeholder="Enter the Emp id">
        <td> <input class="form-check-input" type="checkbox" name="atten[]"  value="present"></td>
        <td><input class="form-check-input" type="checkbox" name="atten[]"  value="absent"  ></td>
        </tr>


    <?php
   
}
    ?>
     <table>
     <input type="submit" name="submit" class="btn btn-primary " value="submit" >

</form>
</div>
</div>

<?php include 'footer.php';?>