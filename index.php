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
    <link rel="stylesheet" href="style-control/style.css">
    <script src="js-control/index.js" async defer></script>
    <script src="js-control/login.js" async defer></script>
    <script src="js-control/sign-up.js" async defer></script>
    <script src="js-control/reset-password.js" async defer></script>
    <title>GNIOT Campus Guide</title>
</head>
<body>
    <?php include 'header.php' ?>

    <div class="central-content">
        <div class="search-section">
            <div class="search-box-area">
                <h2>Let's Explore GNIOT</h2>
                <div class="search-box-with-icon">
                    <i class="bi bi-search search-icon"></i>
                    <input class="search-box-input" placeholder="Campus or College Name" type="text">
                </div>
                <div class="popular-location">
                    <span>Popular: </span> <span>GNIOT,GIMS,GIPS</span>
                </div>
            </div>
            <div class="right-side-image">
                <img src="assets/couples.png" alt="">
            </div>
        </div>
    </div>

    <?php include 'popups.php' ?>

    <?php include 'footer.php' ?>
</body>
</html>