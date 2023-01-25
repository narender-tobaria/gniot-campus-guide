<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: ../");
    exit();
}
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
    <script src="../js-control/user-panel/index.js" async defer></script>
    <title>GNIOT Campus Guide</title>
</head>
<body class="d-flex flex-column"> 

        <?php include 'header.php' ?>

        <div class="d-flex flex-grow-1 flex-column justify-content-center">
            <div class="position-relative">
                <div class="d-flex justify-content-center">
                    <img src="../assets/college/gips/gips_map.png" class="img-fluid ms-4 z-n1" alt="...">
                </div>
                <a data-bs-toggle="modal" href="#bca-directions-popup" role="button">
                    <i class="bi bi-geo-alt-fill position-absolute z-1 location-icon loc-icon-gips-bca"></i>
                </a>
            </div> 

            <!-- MCA Directions Popup -->
            <div class="modal fade" id="bca-directions-popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Way to BCA Department :-</h1>
                            <a data-bs-dismiss="modal" class="material-symbols-outlined popup-close-icon text-dark">close</a>
                        </div>
                        <div class="modal-body d-flex justify-content-center">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                    <span class="ms-3">Enter from Gate No. 2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                    <span class="ms-3">Move straight from Gate No. 2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                    <span class="ms-3">Turn right near Ground area (in front of canteen).</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                    <span class="ms-3">Move ahead, on the left side, there's GIPS building (front of GNIOT gate no 5).</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                    <span class="ms-3">Take entry in GIPS building, you will see reception.</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                    <span class="ms-3">Reach to the 1st floor through stairs, you will see the BCA Department.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <?php include 'footer.php' ?>
</body>