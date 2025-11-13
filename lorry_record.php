<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Consignor Records</title>
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

<!-- For Action Button -->
  <style>
    /* Sticky action column */
.table-responsive {
  overflow-x: auto;
  position: relative;
}

.sticky-column {
  position: sticky !important;
  right: 0;
  z-index: 1;
  background-color: #fff;
  box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
}

/* For striped tables */
.table-striped tbody tr:nth-of-type(odd) .sticky-column {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-striped tbody tr:nth-of-type(even) .sticky-column {
  background-color: #fff;
}

/* For dark tables */
.table-dark .sticky-column {
  background-color: #212529;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) .sticky-column {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-striped tbody tr:nth-of-type(even) .sticky-column {
  background-color: #212529;
}

/* Make sure header sticky column is on top */
.table thead .sticky-column {
  z-index: 2;
  background-color: #fff;
}

.table-dark thead .sticky-column {
  background-color: #212529;
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
      <!-- Header -->
      <?php
      require "header.php";
      ?>
      <div class="container">
        <div class="page-inner">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Lorry Records</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="basic-datatables"
                      class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Vehicle Number</th>
                          <th>Vehicle Name</th>
                          <th>RC Number</th>
                          <th>Owner Name</th>
                          <th>Owner Phone</th>
                          <th>Owner Address</th>
                          <th>Driver Name</th>
                          <th>Driver Phone</th>
                          <th>Driver Address</th>
                          <th>Driver ID</th>
                          <th>Remarks</th>
                          <th class="sticky-column">Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Sr. No.</th>
                          <th>Vehicle Number</th>
                          <th>Vehicle Name</th>
                          <th>RC Number</th>
                          <th>Owner Name</th>
                          <th>Owner Phone</th>
                          <th>Owner Address</th>
                          <th>Driver Name</th>
                          <th>Driver Phone</th>
                          <th>Driver Address</th>
                          <th>Driver ID</th>
                          <th>Remarks</th>
                          <th class="sticky-column">Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>MH34EA2222 </td>
                          <td>Tata Ace</td>
                          <td>KA01GK2485</td>
                          <td>Arjun Sharma</td>
                          <td>7896321455</td>
                          <td>Chandrapur</td>
                          <td>Vikram Patel</td>
                          <td>7539514682</td>
                          <td>Chandrapur</td>
                          <td>DL</td>
                          <td>...</td>
                          <td class="sticky-column bg-light">
                            <div class="btn-group-vertical d-flex gap-1" role="group" aria-label="Vertical radio toggle button group">
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio11" autocomplete="off">
                              <label class="btn btn-outline-primary" for="vbtn-radio1">Update</label>
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio31" autocomplete="off">
                              <label class="btn btn-outline-danger text-color-light" for="vbtn-radio3">Delete</label>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>1</td>
                          <td>MH34EA2222 </td>
                          <td>Tata Intra</td>
                          <td>KA01GK4528</td>
                          <td>Viraj Sharma</td>
                          <td>7896321455</td>
                          <td>Chandrapur</td>
                          <td>Sahil Patel</td>
                          <td>7539514682</td>
                          <td>Warora</td>
                          <td>DL</td>
                          <td>...</td>
                          <td class="sticky-column bg-light">
                            <div class="btn-group-vertical d-flex gap-1" role="group" aria-label="Vertical radio toggle button group">
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio11" autocomplete="off">
                              <label class="btn btn-outline-primary" for="vbtn-radio1">Update</label>
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio31" autocomplete="off">
                              <label class="btn btn-outline-danger text-color-light" for="vbtn-radio3">Delete</label>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>1</td>
                          <td>MH34EA2222 </td>
                          <td>Tata Intra</td>
                          <td>KA01GK7412</td>
                          <td>Arjun Patel</td>
                          <td>7896321455</td>
                          <td>Rajura</td>
                          <td>Vikram Sharma</td>
                          <td>7539514682</td>
                          <td>Chandrapur</td>
                          <td>DL</td>
                          <td>...</td>
                          <td class="sticky-column bg-light">
                            <div class="btn-group-vertical d-flex gap-1" role="group" aria-label="Vertical radio toggle button group">
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio11" autocomplete="off">
                              <label class="btn btn-outline-primary" for="vbtn-radio1">Update</label>
                              <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio31" autocomplete="off">
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>