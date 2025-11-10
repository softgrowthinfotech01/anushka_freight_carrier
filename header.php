<style>
  /* Fix layout after removing sidebar */
  .main-panel,
  .main-header {
    margin-left: 0 !important;
    width: 100% !important;
  }

  /* Optional: adjust logo header padding */
  .main-header-logo,
  .logo-header {
    width: auto !important;
  }

  /* Ensure navbar fills the full row */
  .navbar-header {
    width: 100% !important;
  }

  /* Allow dropdown to expand outside header */
  .navbar,
  .main-header {
    overflow: visible !important;
  }
</style>

<div class="main-header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <div class="container-fluid gap-5">
      <h2 class="me-5 mb-0 text-white"><a href="dashboard.php">Dashboard</a></h2>

      <!-- Main Menu -->
      <ul class="navbar-nav me-auto ms-5 gap-3">
        <li class="nav-item dropdown gap-3">
          <div class="btn-group">
            <button class="btn btn-dark btn-lg " type="button"  aria-expanded="false">
              <a href="consignor.php" class="text-decoration-none text-white">Consignor Information</a>        
            </button>
          </div>
          <div class="btn-group">
            <button class="btn btn-dark btn-lg " type="button"  aria-expanded="false">
              <a href="consignee.php" class="text-decoration-none text-white">Consignee Information</a>        
            </button>
          </div>
        </li>
        <li class="nav-item dropdown gap-3">
          <div class="btn-group">
            <button class="btn btn-dark btn-lg " type="button"  aria-expanded="false">
              <a href="consignor_record.php" class="text-decoration-none text-white">Consignor Record</a>        
            </button>
          </div>
          <div class="btn-group">
            <button class="btn btn-dark btn-lg " type="button"  aria-expanded="false">
              <a href="consignee_record.php" class="text-decoration-none text-white">Consignee Record</a>        
            </button>
          </div>
        </li>
      </ul>

      <!-- Right side user section -->
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle d-flex align-items-center"
            href="#"
            id="userDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <span class="fw-bold text-white">Hi, ...</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="userDropdown">
            <li><a class="dropdown-item bg-dark text-white" href="#">Account Setting</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item bg-dark text-white" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

