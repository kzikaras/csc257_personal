<?php
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Admin Section | <?= $currentPage ?></a>
  <button
    class="navbar-toggler"
    type="button"
    data-mdb-toggle="collapse"
    data-mdb-target="#navbarText"
    aria-controls="navbarText"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_entries.php">List Entries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_destinations.php">List Destinations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_cruiselines.php">List Cruiselines</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logged in as <?=$adminUser->get_fullName()?></a>
      </li>
    </ul>
    <span class="navbar-text">
      <a href="admin_logout.php">Logout</a>
    </span>
  </div>
</div>
</nav>