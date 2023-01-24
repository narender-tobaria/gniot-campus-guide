<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/college/gniot/gniot.jpeg" style="height: 70vh" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a type="button" class="btn btn-primary" href="login.php" role="button">Get Information</a>
            </div>
        </div> 
        <div class="carousel-item">
            <img src="assets/college/gips/gips.jpg" style="height: 70vh" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a type="button" class="btn btn-primary" href="login.php" role="button">Get Information</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/college/gims/gims.jpg" style="height: 70vh" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a type="button" class="btn btn-primary" href="login.php" role="button">Get Information</a>
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

<script>
    setInterval(()=>{
        document.querySelector(".carousel-control-next").click();
    },3000);
</script>