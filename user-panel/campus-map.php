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
    <title>GNIOT Campus Guide</title>
</head>
<body class="d-flex flex-column">

    <?php include 'header.php' ?>
    
    <div class="d-flex flex-grow-1 flex-column justify-content-center">
        <div class="position-relative">
            <div class="d-flex justify-content-center flex-nowrap position-relative">
                <img src="../assets/college/home_page_map.png" class="img-fluid w-100 ms-4 z-n1" alt="...">
            </div>
    
            <a data-bs-toggle="modal" href="#gips-directions-popup" role="button">
                <i class="bi bi-geo-alt-fill position-absolute z-1 location-icon loc-icon-gips"></i>
            </a>
            <a data-bs-toggle="modal" href="#gims-directions-popup" role="button">
                <i class="bi bi-geo-alt-fill position-absolute z-1 location-icon loc-icon-gims"></i>
            </a>
            <a data-bs-toggle="modal" href="#gniot-directions-popup" role="button">
                <i class="bi bi-geo-alt-fill position-absolute z-1 location-icon loc-icon-gniot"></i>
            </a>
            <a data-bs-toggle="modal" href="#canteen-directions-popup" role="button">
                <i class="bi bi-geo-alt-fill position-absolute z-1 location-icon loc-icon-canteen"></i>
            </a>
            <a data-bs-toggle="modal" href="#boys-hostel-directions-popup" role="button">
                <i class="bi bi-geo-alt-fill position-absolute z-1 location-icon loc-icon-boys-hostel"></i>
            </a>
            <a data-bs-toggle="modal" href="#library-directions-popup" role="button">
                <i class="bi bi-geo-alt-fill position-absolute z-1 location-icon loc-icon-library"></i>
            </a>
        </div>
    
    
    
        <!-- GIPS Directions Popup -->
        <div class="modal fade" id="gips-directions-popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Way to GIPS :-</h1>
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
                                <span class="ms-3">Move straight from Gate No. 2.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">On the way, you will see GIMS building.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">After continuing few steps, move ahead and turn right near Ground area.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">Move ahead, on the left side, there's GIPS building (front of GNIOT gate no 5).</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">Take entry in GIPS building, you will see reception.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a class="btn btn-primary" href="gips-map.php" role="button">GIPS Map</a>
                    </div>
                </div>
            </div>
        </div> 
    
    
        <!-- GIMS Directions Popup -->
        <div class="modal fade" id="gims-directions-popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Way to GIMS :-</h1>
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
                                <span class="ms-3">Move straight from Gate No. 2.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">On the way, you will see Boy's Hostel.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">After continuing your steps, you will see GIMS on your left side.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3"> Enter from the gate and you will see the reception area. </span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a class="btn btn-primary" href="gims-map.php" role="button">GIMS Map</a>
                    </div>
                </div>
            </div>
        </div> 
    
    
    
        <!-- GNIOT Directions Popup -->
        <div class="modal fade" id="gniot-directions-popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Way to GNIOT :-</h1>
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
                                <span class="ms-3">After taking 2 or 3 steps, take a right turn.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">Move ahead, there is a reception gate on your left side in front of park. </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">Take entry from the gate.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a class="btn btn-primary" href="gniot-map.php" role="button">GNIOT Map</a>
                    </div>
                </div>
            </div>
        </div> 
    
    
        <!-- Canteen Directions Popup -->
        <div class="modal fade" id="canteen-directions-popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Way to Canteen :-</h1>
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
                                <span class="ms-3">Move straight from Gate No. 2.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3"> On the way, you will see Boy's Hostel.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">After continuing your steps, you will see GIMS.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">At the end of GIMS, there is a left turn, take the turn, move ahead and you will see the canteen.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    
    
    
        <!-- boys hostel Directions Popup -->
        <div class="modal fade" id="boys-hostel-directions-popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Way to Boy's Hostel :-</h1>
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
                                <span class="ms-3">Move straight from Gate No. 2.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">After few steps, you will be able to see Boy's Hostel on your left side</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    
    
    
        <!-- Library Directions Popup -->
        <div class="modal fade" id="library-directions-popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Way to Library :-</h1>
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
                                <span class="ms-3">Move straight from Gate No. 2.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">On the way, you will see Boy's Hostel.</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">In front of Boy's Hostel (Your right side), there is entry gate (gate no 6).</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                                <span class="ms-3">Take entry from that gate, move ahead, after few steps, there is library.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <?php include 'footer.php' ?>
</body>