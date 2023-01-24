<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="#">
        <img class="nav-logo" src="../assets/logo-gniot.jpg" alt="">
    </a>
    <h4> Hi! <?php echo $_SESSION['user_name']; ?></h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="bi bi-person-circle"></i>
    </button>
    <div class="collapse navbar-collapse flex-grow-0 menu-nav-items" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu-items-ul">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">College</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" onclick="showHideCollgeCourses('gniot')" role="button">GNIOT</a></li>
            <li><a class="dropdown-item" onclick="showHideCollgeCourses('gims')" role="button">GIMS</a></li>
            <li><a class="dropdown-item" onclick="showHideCollgeCourses('gips')" role="button">GIPS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link special-nav-item" href="../data-control/users/user-logout.php" role="button">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>