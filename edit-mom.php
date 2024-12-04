<?php include 'header.php';?>
<?php 
// error_reporting(0);
$con =mysqli_connect("localhost","root","","project");
$id =$_GET['dob'];
if(isset($_POST['save_data'])){
    
    $id1 =$_POST['id'];
    $title =$_POST['title']; 
    $dob=date('Y-m-d', strtotime($_POST['dob']));
    $point1=$_POST['pointone'];
    $point2=$_POST['pointtwo'];
    $point3=$_POST['pointthree'];
    $point4=$_POST['pointfour'];
    $point5=$_POST['pointfive'];
    
    $query = "update mom set title='$title',dob='$dob',point1='$point1',point2='$point2',point3='$point3',point4='$point4',point5='$point5' where id='$id1' ";

     $result =mysqli_query($con,$query);

     if(!$result){
         $error ="Not Registered";
     }

     else{
        header("location:view-mom.php?dob=$id");
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
  
    <?php
    $query="select * from mom where dob='$id' "; 
$result=mysqli_query($con,$query);

while($rows=mysqli_fetch_assoc($result)) 
        {
        ?>



<div class="form-design">
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-12">
<input type="hidden" name="id" class="form-control " value="<?php echo $rows['id'];?>" placeholder="Enter the Title">

    </div>
    <div class="col-lg-12">
    <label>Title</label>
<input type="text" name="title" class="form-control " value="<?php echo $rows['title'];?>" placeholder="Enter the Title">

    </div>
    <div class="col-lg-6 mt-2">
<label>Date</label>
<input type="date" name="dob" class="form-control" value=<?php echo $rows['dob'];?> placeholder="">
</div>

<!-- <div class="col-lg-12 mt-2">
<label>No of Present</label>

<table>
<tr>
    <th>Name</th>
    <th>Present</th>
    <th>absent</th>
</tr>

<tr>
<td class="text-center"></td>
<td><input class="form-check-input" type="checkbox" value="" ></td>
<td><input class="form-check-input" type="checkbox" value="" ></td>

        </tr>
        

    
</table>
</div> -->

<div class="col-lg-12 mt-5">
<label>Enter the First Point</label>
<input type="text" name="pointone" class="form-control " value="<?php echo $rows['point1'];?>">  
        </div>
        <div class="col-lg-12 mt-2">
<label>Enter the Second Point</label>
<input type="text" name="pointtwo" class="form-control " value="<?php echo $rows['point2'];?>">
        </div>
        <div class="col-lg-12 mt-2">
<label>Enter the Third Point</label>
<input type="text" name="pointthree" class="form-control " value="<?php echo $rows['point3'];?>" >
        </div>
        <div class="col-lg-12 mt-2">
<label>Enter the Fourth Point</label>
<input type="text" name="pointfour" class="form-control " value="<?php echo $rows['point4'];?> ">
        </div>
        <div class="col-lg-12 mt-2">
<label>Enter the Fifth Point</label>
<input type="text" name="pointfive" class="form-control " value="<?php echo $rows['point5'];?> ">
        </div>

<div class="col-lg-6 mt-5 text-center">
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