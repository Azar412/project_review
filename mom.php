<?php include 'header.php'; ?>

<?php
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "project");
if (isset($_POST['save_data'])) {

    $title = $_POST['title'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $point1 = $_POST['pointone'];
    $point2 = $_POST['pointtwo'];
    $point3 = $_POST['pointthree'];
    $point4 = $_POST['pointfour'];
    $point5 = $_POST['pointfive'];

    $query = "insert into mom (title,dob,point1,point2,point3,point4,point5) values
    ('$title','$dob','$point1','$point2','$point3','$point4','$point5')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        $error = "Not Registered";
    } else {
        $message = "Registered Successfully";

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

    <div class="container mt-5">

        <?php
        // $query = "select mom.title,mom.dob,mom.point1,mom.point2,mom.point2,mom.point3,mom.point4,mom.point5,status.name,status.attendance_status inner join status where mom.dob=status.dob";
           $query = "select * from mom";

        $result = mysqli_query($con, $query);

        while ($rows = mysqli_fetch_assoc($result)) {
            ?>
            <a href="view-mom.php?dob=<?php echo $rows['dob']; ?>" class="btn btn-primary">
                <?php echo date('d', strtotime($rows['dob'])) . " "
                    . date('M', strtotime($rows['dob'])) . " , " . date('Y', strtotime($rows['dob'])); ?>
            </a>
            <?php
        }
        ?>
    </div>



    <div class="container">
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <h1>Register Here</h1>
            </div>
        </div>



        <div class="form-design">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control " placeholder="Enter the Title">

                    </div>
                    <div class="col-lg-6 mt-2">
                        <label>Date</label>
                        <input type="date" name="dob" class="form-control" placeholder="">
                    </div>

                    <!-- <label>Attendence</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="present" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Present
  </label>
</div> -->

                    <!-- <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="absent" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Absent
  </label>
</div> -->

                    <div class="col-lg-12 mt-5">
                        <label>Enter the First Point</label>
                        <input type="text" name="pointone" class="form-control " placeholder="Enter the First Point">
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label>Enter the Second Point</label>
                        <input type="text" name="pointtwo" class="form-control " placeholder="Enter the Second Point">
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label>Enter the Third Point</label>
                        <input type="text" name="pointthree" class="form-control " placeholder="Enter the Third Point">
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label>Enter the Fourth Point</label>
                        <input type="text" name="pointfour" class="form-control " placeholder="Enter the Fourth Point">
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label>Enter the Fifth Point</label>
                        <input type="text" name="pointfive" class="form-control " placeholder="Enter the Fifth Point">
                    </div>

                    <div class="col-lg-6 mt-5 text-center">
                        <input class="btn btn-primary" name="save_data" type="submit">
                    </div>

                </div>
            </form>
        </div>
    </div>

</body>

</html>