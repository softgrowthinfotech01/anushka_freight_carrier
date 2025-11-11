<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title> Lorry</title>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">VEHICLE INFORMATION</div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-2">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="vehiclenum">VEHICLE NUMBER</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="vehiclenum"
                                                        placeholder="Enter Number" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="vehiclename">VEHICLE NAME</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="vehiclename"
                                                        placeholder="Enter Name" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-2 rc">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="rcnum">RC NUMBER</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="rcnum"
                                                        placeholder="Enter RC Number" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">

                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            
                                                <div class="card-header">
                                                    <div class="card-title">OWNER INFORMATION</div>
                                                </div>
                                            
                                        </div>

                                        <div class="row mb-2 owner">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="ownername">OWNER NAME</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="ownername"
                                                        placeholder="Enter Name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="ownerphone">OWNER PHONE</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="ownerphone"
                                                        placeholder="Enter Phone Number" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-2 owner1">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="owneradd">OWNER ADDRESS</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="owneradd"
                                                        placeholder="Enter Address" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">

                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            
                                                <div class="card-header">
                                                    <div class="card-title">DRIVER INFORMATION</div>
                                                </div>
                                            
                                        </div>

                                        <div class="row mb-2 driver">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="drivername">DRIVER NAME</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="drivername"
                                                        placeholder="Enter Name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="driverphone">DRIVER PHONE</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="driverphone"
                                                        placeholder="Enter Phone Number" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-2 driver1">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="driveradd">DRIVER ADDRESS</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="driveradd"
                                                        placeholder="Enter Address" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="idproof">ID PROOF</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="idproof"
                                                        placeholder="Enter ID Proof" />
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            
                                                <div class="card-header">
                                                    <div class="card-title">REMARK</div>
                                                </div>
                                            
                                        </div>


                                        <div class="row mb-2 remark">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="remark">REMARK</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="remark"
                                                        placeholder="Enter Remark" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
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
            </div>

      <?php include "footer.php" ?>
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









