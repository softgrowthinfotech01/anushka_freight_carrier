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
      margin-left: 650px;
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

      <div class="container">
        <div class="page-inner">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">BOOKING INFORMATION</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">BILL T</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Bill T number">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">VEHICLE OWNER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Owner Name">
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2 rc">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">VEHICLE NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Vehicle Name" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="time">DATE & TIME</label>
                          <input
                            type="datetime-local"
                            class="form-control"
                            id="datetime"
                            placeholder="Enter Time" />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2 rc">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">VEHICLE NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Vehicle Number" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">AGENT INFORMATION</div>
                          </div>
                          <div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="sendervendor">AGENT NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="sendervendor"
                            placeholder="Enter Name" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="sendervendorphone">AGENT PHONE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="sendervendorphone"
                            placeholder="Enter Phone Number" />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">SENDER INFORMATION</div>
                          </div>
                          <div>
                          </div>
                        </div>
                      </div>
                    </div>                
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="sendervendor">VENDOR NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="sendervendor"
                            placeholder="Enter Name" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="sendervendorphone">VENDOR PHONE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="sendervendorphone"
                            placeholder="Enter Phone Number" />
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="location">VENDOR LOCATION</label>
                          <input
                            type="text"
                            class="form-control"
                            id="location"
                            placeholder="Enter location" />
                        </div>
                      </div>
                      <div class="col-md-6 "></div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">BUYER INFORMATION</div>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-2 rc">
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="recievervendorname">BUYER NAME</label>
                            <input
                              type="text"
                              class="form-control"
                              id="recievervendorname"
                              placeholder="Enter Name" />
                          </div>
                        </div>
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="recievervendorphone">BUYER NUMBER</label>
                            <input
                              type="text"
                              class="form-control"
                              id="recievervendorphone"
                              placeholder="Enter Phone Number" />
                          </div>
                        </div>
                      </div>

                      <div class="row mb-2">
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="location">BUYER LOCATION</label>
                            <input
                              type="text"
                              class="form-control"
                              id="location"
                              placeholder="Enter location" />
                          </div>
                        </div>
                        <div class="col-md-6 ">

                        </div>

                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <div class="card-title">DRIVER INFORMATION</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-2 rc">
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


                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <div class="card-title">TYPE OF MATERIAL</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-2 rc">
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="material">MATERIAL</label>
                            <input
                              type="text"
                              class="form-control"
                              id="material"
                              placeholder="Enter Material Type" />
                          </div>
                        </div>
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="material">MATERIAL WEIGHT</label>
                            <input
                              type="text"
                              class="form-control"
                              id="materialweight"
                              placeholder="Enter Material weight" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">PRICE INFORMATION</div>
                          </div>
                          <div>
                          </div>
                        </div>
                      </div>
                    </div>                
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="sendervendor">PRICE BY TON</label>
                          <input
                            type="text"
                            class="form-control"
                            id="pricebyton"
                            placeholder="Enter Price by Ton" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="sendervendorphone">TOTAL PRICE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="totalprice"
                            placeholder="Enter Total Price" />
                        </div>
                      </div>
                    </div>
                    <button class="button button2">SUBMIT</button>
                </div>
                
                </form>
              </div>
            </div>
          </div>
        </div>


      
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

</body>

</html>