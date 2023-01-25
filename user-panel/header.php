<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="#">
      <i class="bi bi-person-circle"></i>
        <span class="ms-2"> Hi! <?php echo $_SESSION['user_name']; ?></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list"></i>
    </button>
    <div class="collapse navbar-collapse flex-grow-0 menu-nav-items" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu-items-ul">
        <li class="nav-item">
          <a class="nav-link"  href="campus-map.php" role="button">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">College</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"  href="gniot-map.php" role="button">GNIOT</a></li>
            <li><a class="dropdown-item" href="gims-map.php" role="button">GIMS</a></li>
            <li><a class="dropdown-item" href="gips-map.php" role="button">GIPS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link special-nav-item" href="../data-control/users/user-logout.php" role="button">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>