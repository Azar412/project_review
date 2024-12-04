<?php include 'header.php'; ?>

<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'project');

$selectedDate = '';
$results = [];
$missingNames = []; // To store names not in daily_task for the selected date

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDate = $_POST['date'];

    // Fetch data for the selected date from daily_task
    $stmt = $con->prepare("SELECT * FROM daily_task WHERE date = ?");
    $stmt->bind_param("s", $selectedDate);
    $stmt->execute();
    $result = $stmt->get_result();
    $results = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    // Fetch names from register where there is no entry in daily_task for the selected date
    $stmt = $con->prepare("
        SELECT register.fname 
        FROM register 
        LEFT JOIN daily_task 
        ON register.emp_id = daily_task.emp_id AND daily_task.date = ? 
        WHERE daily_task.emp_id IS NULL
    ");
    $stmt->bind_param("s", $selectedDate);
    $stmt->execute();
    $result = $stmt->get_result();
    $missingNames = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webdesign Team Task</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./css/style.css" rel="stylesheet">
    <style>
        th, td {
            border: 2px solid black !important;
            text-align: center;
        }
    </style>
</head>
<body class="">
<div class="container">
    <h2 class="text-center">Webdesign Team Task</h2>

    <form action="" method="POST">
        <label for="date">Select a Date:</label>
        <input type="date" id="date" name="date" class="form-control" value="<?php echo htmlspecialchars($selectedDate); ?>">
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>

    <?php if (!empty($results)) : ?>
        <h2>Data for <?php echo htmlspecialchars($selectedDate); ?></h2>

        <div class="table-responsive container-fluid">
            <table class="table mt-5 text-dark table-bordered bg-white" align="center">
                <thead>
                    <tr class="bg-white">
                    <th class="bg-white">S.No</th>

                        <th class="bg-white">Name</th>
                        <th class="bg-white">Project</th>
                        <th class="bg-white">Project Description</th>
                    </tr>
                </thead>
                <?php 
                $serialNumber = 1;  
                foreach ($results as $row) : ?>
                    <tr class="bg-white">
                    <td class="bg-white"><?php echo $serialNumber++; ?></td> <!-- Serial Number Column -->

                        <td class="bg-white"><?php echo htmlspecialchars($row['name']); ?></td>
                        <td class="bg-white"><?php echo htmlspecialchars($row['project']); ?></td>
                        <td class="bg-white"><?php echo htmlspecialchars($row['description']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>No data found for <?php echo htmlspecialchars($selectedDate); ?></p>
    <?php endif; ?>

    <!-- Display names from register not in daily_task for the selected date -->
    <?php if (!empty($missingNames)) : ?>
        <h2>Employees Not Updated task on<?php echo htmlspecialchars($selectedDate); ?></h2>
        <ul class="list-group list-group-horizontal ">
            <?php foreach ($missingNames as $row) : ?>
                <li class="list-group-item bg-warning"><?php echo htmlspecialchars($row['fname']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>
