<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <title>CN Entry Records</title>

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

  <!-- DataTables CSS (CDN) -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- DataTables JS (CDN) -->
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    /* plus/minus style for expand control */
    table.dataTable tbody tr.details td.dt-control::before {
      content: '−';
    }

    table.dataTable tbody td.dt-control::before {
      content: '+';
      cursor: pointer;
    }
  </style>
</head>

<body>
  
  <div class="wrapper">
    <!-- Header -->
  <?php
  require "header.php";
  ?>
    <div class="main-panel">

      <div class="container">
        <div class="page-inner">
          <div class="row">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">
                      <h4>CN Entry Records</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Booking Number</th>
                              <th>Consignor</th>
                              <th>Consignee</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th></th>
                              <th>Booking Number</th>
                              <th>Consignor</th>
                              <th>Consignee</th>
                              <th>Action</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- Footer -->
      <?php include "footer.php"; ?>

  <script>
    function format(d) {
      // d is the row data object returned from the server/json
      return (
        'Booking Number: ' + d.bn + '<br>' +
        'Consignor: ' + d.cr + '<br>' +
        'Consignee: ' + d.ce + '<br>'
      );
    }

    $(document).ready(function() {
      // Use DataTable constructor (works with DataTables v2.x)
      const table = $('#example').DataTable({
    ajax: {
        url: 'scripts/ids-objects1.php',
        cache: false
    },

        columns: [
    {
        className: 'dt-control',
        orderable: false,
        data: null,
        defaultContent: ''
    },
    {
        data: 'bn',
        title: 'Booking Number',
        className: 'text-start'
    },
    {
        data: 'cr'
    },
    {
        data: 'ce'
    },
    // NEW BUTTON COLUMN
    {
        data: null,
        orderable: false,
        searchable: false,
        title: "Actions",
        render: function(data, type, row) {
            return `
                <button class="btn btn-sm btn-primary me-1" onclick="editRecord('${row.id}')">
                    Edit
                </button>
                <button class="btn btn-sm btn-danger" onclick="deleteRecord('${row.id}')">
                    Delete
                </button>
            `;
        }
    }
]
      });

      // track open rows
      const detailRows = [];

      $('#example tbody').on('click', 'td.dt-control', function() {
        const tr = $(this).closest('tr');
        const row = table.row(tr);
        const idx = $.inArray(tr.attr('id'), detailRows);

        if (row.child.isShown()) {
          tr.removeClass('details');
          row.child.hide();
          detailRows.splice(idx, 1);
        } else {
          tr.addClass('details');
          row.child(format(row.data())).show();
          if (idx === -1) detailRows.push(tr.attr('id'));
        }
      });

      // on each draw, re-open any rows that were open
      table.on('draw', function() {
        $.each(detailRows, function(i, id) {
          $('#' + id + ' td.dt-control').trigger('click');
        });
      });
    });

     //for buttons in table
    function editRecord(id) {
    alert("Edit pressed for ID: " + id);
}

function deleteRecord(id) {
    if (confirm("Delete row ID " + id + "?")) {
        alert("Deleted!");
    }
}
  </script>

<!-- Commented because of conflict with cdn in header.php -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

  <style>
    /* Dropdown arrow */
    /* 1) Neutralize any existing icon/pseudo-element added by DataTables or the theme */
    table.dataTable tbody td.dt-control::before,
    table.dataTable tbody td.dt-control::after,
    table.dataTable tbody td.dt-control,
    td.dt-control::before,
    td.dt-control::after {
      /* remove text/icon */
      content: '' !important;
      color: transparent !important;
      font-size: 0 !important;
      line-height: 0 !important;

      /* remove background images / icons */
      background: none !important;
      background-image: none !important;
      -webkit-mask-image: none !important;
      mask-image: none !important;
      border: 0 !important;
      text-indent: 0 !important;
      display: inline-block !important;
    }

    /* Make the cell clickable and reserve space for our arrow */
    table.dataTable tbody td.dt-control {
      cursor: pointer;
      width: 28px;
      /* adjust width if needed */
      text-align: center;
      font-size: 14px;
      /* fallback */
    }

    /* 2) Insert our own arrow using ::after (collapsed state) */
    table.dataTable tbody td.dt-control::after {
      content: '▶' !important;
      /* collapsed arrow */
      font-size: 14px !important;
      line-height: 1 !important;
      color: #333 !important;
      /* change color if desired */
      display: inline-block !important;
      width: auto;
      height: auto;
      vertical-align: middle;
    }

    /* 3) When the row is open (you add class "details" on <tr>) change arrow */
    table.dataTable tbody tr.details td.dt-control::after {
      content: '▼' !important;
      /* expanded arrow */
    }

    /* Optional: ensure no other template pseudo-element sneaks in */
    table.dataTable tbody td.dt-control * {
      pointer-events: none;
    }

    /* for misalignment issue */
    body {
  margin: 0 !important;
  padding: 0 !important;
}

  </style>

</body>

</html>