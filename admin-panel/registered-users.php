<?php
require "../data-control/config.php";
error_reporting(0);
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: ../");
    exit();
}

$sql = "SELECT * from users ORDER BY reg_time ASC";

$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../style-control/style.css">
    <title>GNIOT Campus Guide</title>
</head>
<body class="d-flex flex-column">
    <?php include 'header.php' ?>

    <div class="d-flex flex-grow-1 flex-column justify-content-center overflow-scroll">
        <table  style="min-width: 800px;" class="table container">
            <div class="d-flex justify-content-center mb-3">
                <h3>All Registerd Users</h3>
            </div>
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Reg. Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sr = 1;
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $sr; ?></th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['user_type']; ?></td>
                                <td><?php echo $row['reg_time']; ?></td>
                            </tr>
                            <?php
                            $sr++;
                        }
                    }
                    else{
                        echo "no records found";
                    }
                    $connect->close();
                ?>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php' ?>
</body>