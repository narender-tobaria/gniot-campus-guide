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
<body>
    <?php include 'header.php' ?>
        <!-- <div class="search-section">
            <div class="search-box-area">
                <h2>Let's Explore Now</h2>
                <div class="search-box-with-icon">
                    <i class="bi bi-search search-icon"></i>
                    <input class="search-box-input" placeholder="Campus or College Name" type="text">
                </div>
                <div class="popular-location">
                    <span>Popular: </span> <span>GNIOT,GIMS,GIPS</span>
                </div>
            </div>
            <div class="right-side-image">
                <img src="../assets/couples.png" alt="">
            </div>
        </div> -->

        <!-- colleges carausel -->

    <div id="carouselExampleIndicators" class="carousel slide college-carausel"  data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/carausel-images/1672428980200.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/1672429792431.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG_20220521_104844.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG_20221210_135746.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG-20220219-WA0022.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG-20220219-WA0027.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG-20220219-WA0028.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG-20220303-WA0014.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG-20220304-WA0027.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG-20220418-WA0016.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
            <div class="carousel-item active">
                <img src="../assets/carausel-images/IMG-20220723-WA0030.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <a type="button" href="campus-map.php" class="btn btn-primary">Get Information</a>
                </div>
            </div> 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>