<?php include 'header.php';
// error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
$id=$_GET['dob'];
?>


<?php 
if(isset($_POST['submit']))
{
    $id1 =$_POST['idl'];
    $emp_id=$_POST['id'];
    $atten=$_POST['atten'];

     
    foreach($emp_id as $index => $ids)
    {
        $s_emp= $ids;
        $s_atten= $atten[$index];
        $s_id1 = $id1[$index];

        $query= "update status set emp_id='$s_emp',attendance_status='$s_atten' where id='$s_id1' ";
        $result =mysqli_query($con,$query);
    }

if(!$result){
    $error ="Not Registered";
}
else{
   header("location:view-mom.php?dob=$id");
    }

}

?>
<div class="container">
<div class="row">
<div class="col-lg-6 mt-2">
<form action="" method="post">


<?php 
$con =mysqli_connect("localhost","root","","project");
?>

<?php
$query="select * from status where dob ='$id' "; 
$result=mysqli_query($con,$query);
?>
<?php if($rows1=mysqli_fetch_assoc($result)) 
{
?>
<label>Date</label>
<input type="date" name="dob"  class="form-control" value=<?php echo $rows1['dob'];?>> 

<?php }

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

        <td><?php echo $rows['name'];?></td>
        <input type="hidden" name="idl[]" class="form-control" value=<?php echo $rows['id'];?> placeholder="Enter the Emp id">

    <input type="hidden" name="id[]" class="form-control" value=<?php echo $rows['emp_id'];?> placeholder="Enter the Emp id">

        <td> <input class="form-check-input" type="checkbox" name="atten[]"  value='present'<?php if($rows['attendance_status'] == 'present'){echo "checked";}?>></td>
        <td><input class="form-check-input" type="checkbox" name="atten[]" value='absent'<?php if($rows['attendance_status'] == 'absent'){echo "checked";}?> ></td>
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