<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Admin Dashboard</title>
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

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <?php require "side-menu.php"; ?>
    <!-- End Sidebar -->

    <div class="main-panel">
      <!-- Header -->
      <?php
      require "header.php";
      ?>

      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">BOOKING RECORDS</h3>
            <ul class="breadcrumbs mb-3">
              <li class="nav-home">
                <a href="#">
                  <i class="icon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
              <li class="nav-item">
                <a href="#">Records</a>
              </li>
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
              <li class="nav-item">
                <a href="#">Booking Records</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Booking Records</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="basic-datatables"
                      class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Bill T</th>
                          <th>Vehicle Owner</th>
                          <th>Vehicle Name</th>
                          <th>Vehicle Number</th>
                          <th>Time</th>
                          <th>Agent Name</th>
                          <th>Agent Phone</th>
                          <th>Vendor Name</th>
                          <th>Vendor Phone</th>
                          <th>Vendor Address</th>
                          <th>Buyer Name</th>
                          <th>Buyer Phone</th>
                          <th>Buyer Address</th>
                          <th>Driver Name</th>
                          <th>Driver Phone Number</th>
                          <th>Type of Material</th>
                          <th>Price per ton</th>
                          <th>Total Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Bill T</th>
                          <th>Vehicle Owner</th>
                          <th>Vehicle Name</th>
                          <th>Vehicle Number</th>
                          <th>Time</th>
                          <th>Agent Name</th>
                          <th>Agent Phone</th>
                          <th>Vendor Name</th>
                          <th>Vendor Phone</th>
                          <th>Vendor Address</th>
                          <th>Buyer Name</th>
                          <th>Buyer Phone</th>
                          <th>Buyer Address</th>
                          <th>Driver Name</th>
                          <th>Driver Phone Number</th>
                          <th>Type of Material</th>
                          <th>Price per ton</th>
                          <th>Total Price</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>159753</td>
                          <td>Aarav Sharma</td>
                          <td>TATA ACE</td>
                          <td>MH34 EA 4477 </td>
                          <td>11:00 A.M.
                          </td>
                          <td>Aditya Reddy</td>
                          <td>5468971230</td>
                          <td>Harpreet Singh</td>
                          <td>9874563210</td>
                          <td>Chandrapur</td>
                          <td>Vivek Joshi</td>
                          <td>999999999</td>
                          <td>Chandrapur</td>
                          <td>Faizan Ali</td>
                          <td>7893214560</td>
                          <td>Cement</td>
                          <td>1000</td>
                          <td>1000</td>
                          <td>
                            <div class="btn-group-vertical d-flex gap-1" role="group" aria-label="Vertical radio toggle button group">
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio11" autocomplete="off">
                              <label class="btn btn-outline-primary" for="vbtn-radio1">Update</label>
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio31" autocomplete="off">
                              <label class="btn btn-outline-danger text-color-light" for="vbtn-radio3">Delete</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>456321</td>
                          <td>Rohan Mehta</td>
                          <td>MAHINDRA BOLERO PICKUP</td>
                          <td>MH34 EA 9874 </td>
                          <td>11:00 A.M.
                          </td>
                          <td>Vikram Patel</td>
                          <td>4567891230</td>
                          <td>Nikhil Das</td>
                          <td>9874563210</td>
                          <td>Chandrapur</td>
                          <td>Aarav Sharma</td>
                          <td>999999999</td>
                          <td>Chandrapur</td>
                          <td>Karthik Iyer</td>
                          <td>7893214560</td>
                          <td>Plywood</td>
                          <td>1000</td>
                          <td>2000</td>
                          <td>
                            <div class="btn-group-vertical d-flex gap-1" role="group" aria-label="Vertical radio toggle button group">
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio12" autocomplete="off">
                              <label class="btn btn-outline-primary" for="vbtn-radio1">Update</label>
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio32" autocomplete="off">
                              <label class="btn btn-outline-danger text-color-light" for="vbtn-radio3">Delete</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>789321</td>
                          <td>Siddharth Nair</td>
                          <td>TATA INTRA</td>
                          <td>MH34 EA 4123 </td>
                          <td>11:00 A.M.
                          </td>
                          <td>Rahul Verma</td>
                          <td>7893214560</td>
                          <td>Rohan Patil</td>
                          <td>9874563210</td>
                          <td>Chandrapur</td>
                          <td>Imran Khan</td>
                          <td>999999999</td>
                          <td>Chandrapur</td>
                          <td>Siddharth Verma</td>
                          <td>7893214560</td>
                          <td>Bricks</td>
                          <td>1000</td>
                          <td>1500</td>
                          <td>
                            <div class="btn-group-vertical d-flex gap-1" role="group" aria-label="Vertical radio toggle button group">
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio13" autocomplete="off">
                              <label class="btn btn-outline-primary" for="vbtn-radio1">Update</label>
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio33" autocomplete="off">
                              <label class="btn btn-outline-danger text-color-light" for="vbtn-radio3">Delete</label>
                            </div>
                          </td>
                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include "footer.php"; ?>
    </div>

  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>


  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#basic-datatables").DataTable({});

      $("#multi-filter-select").DataTable({
        pageLength: 5,
        initComplete: function() {
          this.api()
            .columns()
            .every(function() {
              var column = this;
              var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                .appendTo($(column.footer()).empty())
                .on("change", function() {
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());

                  column
                    .search(val ? "^" + val + "$" : "", true, false)
                    .draw();
                });

              column
                .data()
                .unique()
                .sort()
                .each(function(d, j) {
                  select.append(
                    '<option value="' + d + '">' + d + "</option>"
                  );
                });
            });
        },
      });

      // Add Row
      $("#add-row").DataTable({
        pageLength: 5,
      });

      var action =
        '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $("#addRowButton").click(function() {
        $("#add-row")
          .dataTable()
          .fnAddData([
            $("#addName").val(),
            $("#addPosition").val(),
            $("#addOffice").val(),
            action,
          ]);
        $("#addRowModal").modal("hide");
      });
    });
  </script>
</body>

</html>