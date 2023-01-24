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
<body>
    <?php include 'header.php' ?>

    <div>
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

        <div id="carouselExampleIndicators" class="carousel slide college-carausel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/college/gniot/gniot.jpeg" style="height: 70vh" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <button type="button" onclick="showHideCollgeCourses('gniot')" class="btn btn-primary">Get Information</button>
                    </div>
                </div> 
                <div class="carousel-item">
                    <img src="../assets/college/gips/gips.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <button type="button" onclick="showHideCollgeCourses('gips')" class="btn btn-primary">Get Information</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/college/gims/gims.jpg" style="height: 70vh" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <button type="button" onclick="showHideCollgeCourses('gims')" class="btn btn-primary">Get Information</button>
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
    </div>

    <div class="clg-courses">
         <!-- GNIOT Courses -->

         <div class="d-block" id="gniot-courses">
            <div class="d-flex justify-content-center m-5">
                <h2>GNIOT Courses</h2>
            </div>
            <div class="d-flex justify-content-evenly flex-wrap">
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">B.Tech CSE</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">B.Tech CICI</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">MBA</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- GIMS Courses -->

        <div class="d-block" id="gims-courses">
            <div class="d-flex justify-content-center m-5">
                <h2>GIMS Courses</h2>
            </div>
            <div class="d-flex justify-content-evenly flex-wrap">
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- GIPS Courses -->

        <div class="d-block" id="gips-courses">
            <div class="d-flex justify-content-center m-5">
                <h2>GIPS Courses</h2>
            </div>
            <div class="d-flex justify-content-evenly flex-wrap">
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include 'footer.php' ?>
</body>
</html>