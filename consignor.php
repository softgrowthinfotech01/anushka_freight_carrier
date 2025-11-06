<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title> Admin Dashboard</title>
  <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>
  <style>
    .button2 {
      background-color: white;
      color: black;
      border: 2px solid #008CBA;
      width: 100px;
      height: 50px;
      border-radius: 5px;
    }

    .button2:hover {
      background-color: #008CBA;
      color: white;
    }
  </style>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">

    <div class="main-panel">
      <?php
      require "header.php";
      ?>

      <div class="container">
        <div class="page-inner">
          <div class="row">

          <div class="col-sm-9 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div
                        class="icon-big text-center icon-info bubble-shadow-small">
                        <i class="fas fa-user-check"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <button class="btn btn-transparent"><a href="consignor.php" class="text-decoration-none text-dark">Consignor Information</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-9 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div
                        class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="fas fa-luggage-cart"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <button class="btn btn-transparent"><a href="consignee.php" class="text-decoration-none text-dark">Consignee Information</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">CONSIGNOR INFORMATION</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">CONSIGNOR NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Name">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">CONSIGNOR PHONE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Phone Number">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">CONSIGNOR ADDRESS</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Address">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">CUSTOMER CODE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Customer Code">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">INVOICE NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Invoice number">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">GSTIN</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter GSTIN">
                        </div>
                      </div>
                    </div>
                    

                    <div class="row">
                      <div class="col-12 d-flex justify-content-center ">
                        <button type="submit" class=" button2">SUBMIT</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div><?php include "footer.php" ?>



      </div>


    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo2.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>