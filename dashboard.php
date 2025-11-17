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

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />

  <style>
    /* Force compact height for card-stats */
    .card.card-stats {
      margin-bottom: 0.5rem !important;
      min-height: auto !important;
    }

    /* Reduce vertical padding inside the card */
    .card.card-stats .card-body {
      padding: 0.5rem 0.75rem !important;
    }

    /* Reduce internal row spacing */
    .card.card-stats .row.align-items-center {
      margin: 0 !important;
    }

    /* Reduce icon section width slightly */
    .card.card-stats .col-icon {
      width: 55px !important;
    }

    /* Keep icon same size but tighter spacing */
    .card.card-stats .icon-big {
      font-size: 1.8rem !important;
      line-height: 1 !important;
      padding: 0.25rem !important;
    }

    /* Text/button section more compact */
    .card.card-stats .col-stats {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }

    /* Reduce button size slightly */
    .card.card-stats .btn {
      padding: 0.25rem 0.5rem !important;
      font-size: 0.9rem !important;
      line-height: 1.1 !important;
    }

    /* Optional: slightly smaller numbers block */
    .card.card-stats .numbers {
      margin: 0 !important;
      padding: 0 !important;
    }

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

    /* form code */

    :root {
      --paper: #fff7f8;
      --line: #c99;
      --deep: #8b3a3a;
      --muted: #8a6f6f;
      --border: #bda3a3;
    }

    html,
    body {
      height: 100%;
      margin: 0;
      background: #f0ecec;
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
    }

    .sheet {
      width: 100%;
      /* change to fit screen / print */
      margin: 22px auto;
      background: linear-gradient(180deg, var(--paper), #fff 50%);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
      border-radius: 8px;
      padding: 18px;
      border: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
      color: #333;
    }

    /* faint vertical crease and fold */
    .sheet:before {
      content: "";
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 3px;
      background: linear-gradient(180deg, rgba(0, 0, 0, 0.02), rgba(0, 0, 0, 0.00));
      transform: translateX(-50%);
      pointer-events: none;
    }

    header {
      display: flex;
      gap: 18px;
      align-items: flex-start;
      border-bottom: 3px solid var(--line);
      padding-bottom: 10px;
      margin-bottom: 12px;
    }

    .logo {
      width: 150px;
      height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: var(--deep);
      letter-spacing: 1px;
      font-size: 14px;
    }

    .head-text {
      flex: 1;
    }

    .company {
      font-size: 28px;
      color: var(--deep);
      font-weight: 800;
      margin: 0 0 4px 0;
      letter-spacing: 1px;
    }

    .sub {
      color: var(--muted);
      font-size: 12px;
      margin: 0;
    }

    .right-head {
      width: 320px;
      text-align: right;
      font-size: 12px;
    }

    .non-neg {
      font-weight: 700;
      color: var(--deep);
      margin-bottom: 4px;
    }

    .cons-no {
      display: inline-block;
      margin-top: 8px;
      padding: 8px 10px;
      border: 2px dashed var(--border);
      color: #a12b2b;
      font-weight: 800;
      letter-spacing: 1px;
      background: #fff0f1;
    }

    /* watermark */
    .watermark {
      position: absolute;
      left: 40%;
      top: 36%;
      transform: translate(-40%, -36%);
      font-size: 180px;
      color: rgba(189, 142, 142, 0.05);
      font-weight: 800;
      pointer-events: none;
      user-select: none;
    }

    .content {
      display: grid;
      grid-template-columns: 1fr 340px;
      gap: 18px;
      align-items: start;
    }

    /* left form */
    .form-left {
      border: 1px solid rgba(0, 0, 0, 0.03);
      padding: 10px;
      background: transparent;
    }

    .row {
      display: flex;
      gap: 12px;
      align-items: stretch;
      margin-bottom: 8px;
    }

    .col {
      flex: 1;
      min-width: 0;
    }

    label {
      display: block;
      font-size: 11px;
      color: var(--muted);
      margin-bottom: 6px;
    }

    .field {
      border: 1px solid var(--border);
      height: 30px;
      padding: 6px;
      background: linear-gradient(180deg, #fff, #fffafc);
      border-radius: 3px;
      font-size: 10px;
    }

    .field-dropdown {
      border: 1px solid var(--border);
      height: 30px;
      padding: 6px;
      background: linear-gradient(180deg, #fff, #fffafc);
      border-radius: 3px;
      font-size: 10px;
      /* Hide default arrow */
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;

      /* Custom arrow */
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24'%3E%3Cpath fill='gray' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 12px;

      /* Ensure text doesn’t overlap the arrow */
      padding-right: 30px;
    }

    .field-dropdown1 {
      border: 0;
      height: 20px;
      padding: 2px;
      background: linear-gradient(180deg, #fff, #fffafc);
      border-radius: 3px;
      font-size: 10px;
      /* Hide default arrow */
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;

      /* Custom arrow */
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24'%3E%3Cpath fill='gray' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 12px;

      /* Ensure text doesn’t overlap the arrow */
      padding-right: 30px;
    }

    .field-distance {
      border: 1px solid var(--border);
      padding: 8px;
      background: linear-gradient(180deg, #fff, #fffafc);
      border-radius: 3px;
      font-size: 13px;
    }

    /* a grid of many small fields and boxes */
    .table-like {
      border-top: 2px solid var(--line);
      margin-top: 6px;
      padding-top: 8px;
    }

    .small-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 6px;
      margin-bottom: 8px;
    }

    .small-grid .cell {
      border: 1px solid var(--border);
      min-height: 42px;
      padding: 8px;
      font-size: 12px;
      background: white;
    }

    .section-title {
      font-weight: 700;
      font-size: 13px;
      color: var(--deep);
      margin: 8px 0 6px;
    }

    .dim-table {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 6px;
    }

    .dim-table .box {
      border: 1px solid var(--border);
      min-height: 36px;
      padding: 6px;
      background: white;
      font-size: 12px;
    }

    /* right charges column */
    .charges {
      border: 2px solid var(--line);
      padding: 10px;
      background: linear-gradient(180deg, #fff, #fff8f8);
      min-height: 720px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .charges .top {
      font-size: 12px;
    }

    .charges .bank {
      border: 1px dashed var(--border);
      padding: 8px;
      margin-bottom: 10px;
      background: #fff;
      font-size: 12px;
    }

    .charges .list {
      border-top: 2px solid var(--line);
      margin-top: 8px;
    }

    .charge-row {
      display: flex;
      justify-content: space-between;
      padding: 8px 6px;
      border-bottom: 1px dashed rgba(0, 0, 0, 0.04);
      font-size: 13px;
    }

    .charge-row:last-child {
      border-bottom: none;
    }

    .charges .total {
      margin-top: 8px;
    }

    .big-total {
      display: flex;
      justify-content: space-between;
      padding: 10px;
      font-weight: 800;
      font-size: 16px;
      border-top: 2px solid var(--line);
      background: linear-gradient(180deg, transparent, #fff6f6);
    }

    /* small notes footer */
    .footer1 {
      display: flex;
      gap: 12px;
      margin-top: 12px;
      font-size: 11px;
      color: var(--muted);
    }

    /* Print friendly */
    @media print {
      body {
        background: white
      }

      .sheet {
        box-shadow: none;
        border-radius: 0;
        width: 100%;
        margin: 0;
        padding: 6mm
      }
    }

    /* helpers */
    .muted {
      color: var(--muted);
      font-size: 12px;
    }

    .tiny {
      font-size: 11px;
      color: var(--muted);
    }

    /* highlight/placeholder style for removed scratched area */
    .clean-placeholder {
      background: linear-gradient(90deg, #fff, #fff);
      border: 1px dashed rgba(200, 120, 120, 0.12);
      color: rgba(0, 0, 0, 0.45);
      text-align: center;
      padding: 10px;
      font-size: 12px;
    }

    .button {
      background-color: #21a6e4;
      border: none;
      border-radius: 5px;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .button1 {
      background-color: #21e499ff;
      border: none;
      border-radius: 5px;
      color: black;
      padding: 13px 13px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 13px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 10px;
      font-size: 13px;
    }

    .table th,
    .table td {
      border: 1px solid #aaa;
      padding: 4px;
      text-align: center;
    }

    .table th {
      background: #f9f3f3;
      color: #a22;
      font-weight: bold;
    }

    /* compressing form css code */
    /* --- Compact layout adjustments --- */

    /* Reduce space between rows */
  </style>
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
                  <div class="card-title text-center">CN Entry</div>
                </div>
                <div class="card-body">
                  <div class="sheet" role="document" aria-label="Consignment note">
                    <div class="watermark">AFC</div>

                    <header>

                    </header>

                    <div class="content">
                      <!-- LEFT -->
                      <div class="form-left" role="form">
                        <!-- row 1: Company / Policy -->
                        <div class="row ">
                          <div class="col d-flex gap-5">
                            <div class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="ownersrisk">
                              <label for="ownersrisk" class="fs-6 m-0">Owner's Risk</label>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="doorcollection">
                              <label for="doorcollection" class="fs-6 m-0">Door Collection</label>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                              <input type="checkbox" id="cancel">
                              <label for="cancel" class="fs-6 m-0">Cancel</label>
                            </div>
                          </div>
                        </div>
                        <div class="row p-2">
                          <div class="col section-title">
                            General Information
                          </div>
                        </div>
                        <div class="row ">
                          <div class="col">
                            <label>Booking Branch</label>
                            <select class="form-select field-dropdown" id="consignorDropdown">
                              <option value="">-- Select --</option>
                            </select> <!-- dropdown -->
                          </div>
                          <div class="col">
                            <label>&nbsp;</label>
                            <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Pincode"></div>
                            <!-- Autofill pincode and city -->
                          </div>
                          <div class="col">
                            <label>&nbsp;</label>
                            <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="City"></div>
                            <!-- Autofill pincode and city -->
                          </div>
                        </div>

                        <div class="row">
                          <div class="col d-flex gap-2">
                            <div class="col">
                              <label>CN No. & Date</label>
                              <select class="form-select field-dropdown" id="consignorDropdown">
                                <option value="">-- Select --</option> <!-- Alphabet Letter -->
                              </select> <!-- dropdown -->
                            </div>
                            <div class="col">
                              <label>&nbsp;</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="numbers"></div>
                              <!-- Numbers -->
                            </div>
                            <div class="col">
                              <label>&nbsp;</label>
                              <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                          </div>
                          <div class="col">
                            <label>Delivery Type</label>
                            <select class="form-select field-dropdown" id="consignorDropdown">
                              <option value="">-- Select --</option>
                            </select> <!-- dropdown -->
                          </div>
                        </div>
                        <div class="row">
                          <div class="col d-flex gap-3">
                            <div class="col">
                              <label>Destination Branch</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="destination branch"></div>
                              <!-- Autofill dest. drop location and pincode -->
                            </div>
                            <div class="col">
                              <label>&nbsp;</label>
                              <select class="form-select field-dropdown" id="consignorDropdown">
                                <option value="">-- Select --</option>
                              </select> <!-- dropdown -->
                            </div>
                            <div class="col">
                              <label>&nbsp;</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="delivery drop location"></div>
                              <!-- Autofill dest. drop location and pincode -->
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <label>Exceptional Booking?</label>
                            <select class="form-select field-dropdown" id="consignorDropdown">
                              <option value="">-- Select --</option>
                            </select> <!-- dropdown -->
                          </div>
                          <div class="col d-flex gap-2">
                            <div class="col">
                              <label>Distance in Kms</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div> <!-- autofill -->
                            </div>
                            <div class="col">
                              <label>&nbsp;</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div> <!-- autofill -->
                            </div>
                            <div class="col">
                              <label>&nbsp;</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div> <!-- autofill -->
                            </div>
                            <div class="col">
                              <label>&nbsp;</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div> <!-- autofill -->
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <label>Dest. loc. Landmark</label>
                            <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                          </div>
                        </div>

                        <!-- consignor / consignee -->
                        <div class="row p-2">
                          <div class="col section-title">
                            Consignor and Consignee Information
                          </div>
                        </div>
                        <div class="con d-flex">
                          <div class="col-6 p-3 border">
                            <div class="col">
                              <div>
                                <label>Select Consignor</label>
                                <select class="form-select field-dropdown" id="consignorDropdown">
                                  <option value="">-- Select Consignor --</option>
                                  <option value="1">Arjun Sharma Transport</option>
                                  <option value="2">Patel Logistics Pvt Ltd</option>
                                  <option value="3">Singh Freight Services</option>
                                  <option value="4">Kumar Cargo Solutions</option>
                                  <option value="5">Desai Movers</option>
                                </select>
                              </div>
                            </div>


                            <div class="col">
                              <label>Consignor's Name</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Name"></div>
                            </div>
                            <div class="col">
                              <label>Consignor's Address</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Address"></div>
                            </div>
                            <div class="col">
                              <label>Consignor's Phone</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Phone"></div>
                            </div>
                            <div class="col">
                              <label>Consignor's Email</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Email"></div>
                            </div>
                            <div class="col">
                              <label>Legal Name</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Legal"></div>
                            </div>
                            <div class="col">
                              <label>Trade Name</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Trade"></div>
                            </div>
                            <div class="col">
                              <label>From CODE &amp; Name</label>
                              <div class="field">[Code / Location]</div>
                            </div>
                          </div>

                          <div class="col-6 p-3 border">
                            <div class="col">
                              <div>
                                <label>Select Consignee</label>
                                <select class="form-select field-dropdown" id="consignorDropdown">
                                  <option value="">-- Select Consignee --</option>
                                  <option value="1">Arjun Sharma Transport</option>
                                  <option value="2">Patel Logistics Pvt Ltd</option>
                                  <option value="3">Singh Freight Services</option>
                                  <option value="4">Kumar Cargo Solutions</option>
                                  <option value="5">Desai Movers</option>
                                </select>
                              </div>
                            </div>


                            <div class="col">
                              <label>Consignee's Name</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Name"></div>
                            </div>
                            <div class="col">
                              <label>Consignee's Address</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Address"></div>
                            </div>
                            <div class="col">
                              <label>Consignee's Phone</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Phone"></div>
                            </div>
                            <div class="col">
                              <label>Consignee's Email</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Email"></div>
                            </div>
                            <div class="col">
                              <label>Legal Name</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Legal"></div>
                            </div>
                            <div class="col">
                              <label>Trade Name</label>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="Trade"></div>
                            </div>
                            <div class="col">
                              <label>TO CODE &amp; Name</label>
                              <div class="field">[Code / Location]</div>
                            </div>
                          </div>
                        </div><br>

                        <!-- Billing Details -->
                        <div class="table-like">
                          <div class="row p-2">
                            <div class="col section-title">
                              Billing Details
                            </div>
                            <div class="row p-0" style="margin-bottom:6px;">
                              <div class="col">
                                <label>Booking Basis</label>
                                <select class="form-select field-dropdown" id="consignorDropdown">
                                  <option value="">-- Select --</option>
                                </select> <!-- Dropdown -->
                              </div>
                              <div class="col d-flex gap-2">
                                <div class="col">
                                  <label>Bill for & station</label>
                                  <select class="form-select field-dropdown" id="consignorDropdown">
                                    <option value="">-- Select --</option>
                                  </select> <!-- Dropdown -->
                                </div>
                                <div class="col">
                                  <label>&nbsp;</label>
                                  <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                                </div>
                              </div>
                            </div>
                            <div class="row p-0" style="margin-bottom:6px;">
                              <div class="col">
                                <label>Billing Party</label>
                                <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                              </div>
                              <div class="col">
                                <label>Party Code and Unit</label>
                                <div class="col d-flex gap-2">
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row p-0" style="margin-bottom:6px;">
                              <div class="col">
                                <label>Billing Party GST</label>
                                <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                              </div>
                              <div class="col">
                                <label>Legal Name</label>
                                <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                              </div>
                            </div>
                            <div class="row p-0" style="margin-bottom:6px;">
                              <div class="col">
                                <label>Address</label>
                                <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                              </div>
                              <div class="col">
                                <label>Trade Name</label>
                                <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                              </div>
                            </div>
                            <div class="row p-0" style="margin-bottom:6px;">
                              <div class="col">
                                <label>Sector & DCC Days</label>
                                <div class="col d-flex gap-2">
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <label>CNCC Type</label>
                                <select class="form-select field-dropdown" id="consignorDropdown">
                                  <option value="">-- Select --</option>
                                </select> <!-- Dropdown -->
                              </div>
                            </div>

                          </div>

                         








                        </div> <!-- end table-like -->
                      </div> <!-- end left -->

                      <!-- RIGHT: Charges -->
                      <aside class="charges" aria-label="Charges and bank details">
                        <div class="top">
                          <div class="row p-2">
                            <div class="col section-title fs-5">
                              Freight Details
                            </div>
                          </div>

                          <div class="d-flex justify-content-center align-items-center gap-3">
                            <input type="checkbox"><label for="" class="m-0 fs-5"> FREIGHT PENDING</label>
                          </div><br>
                          <div class="list" aria-hidden="false" style="margin-top:10px;">
                            <!-- list of charge rows -->
                            <div class="charge-row">
                              <div>Rate</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Derived Freight</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Basic Freight</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>A.O.C Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>FOV Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Cover Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>MMC Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Door collection charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Door Delivery Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Pass charges </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Enroute Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Statistical charges </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Misc. Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>COD charges </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Toll Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Green Tax </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>E-way Bill Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Other Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                            </div>
                          </div>

                        </div>

                        <div>
                          <div class="big-total">
                            <div>ADV AMOUNT</div>
                            <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                          </div>
                          <div class="big-total" style="margin-top:8px;">
                            <div>GRAND TOTAL</div>
                            <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                          </div>

                          <div style="margin-top:10px;font-size:12px;">

                            <div class="charge-row">
                              <div>Received by :</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                              <br>
                              <br>
                            </div>
                          </div>
                        </div>

                      </aside>
                    </div> <!-- end content for side by side entries -->

                     <!-- Package Details -->
                          <div class="table-like">
                            <div class="section-title">Package Details</div>

                            <!-- Row 1: Checkbox + Package Input -->
                            <div class="row mb-2" style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px;">
                              <div class="col-md-6" style="flex: 1 1 48%;">
                                <div style="display: flex; align-items: center; gap: 8px;">
                                  <input type="checkbox" id="loosePackage">
                                  <label for="loosePackage" class="fs-6 m-0">LOOSE (Zero Package)</label>
                                </div>
                              </div>
                              <div class="col-md-6" style="flex: 1 1 48%;">
                                <label>Package</label>
                                <div class="field">
                                  <input type="text" class="border-0 w-100" placeholder="">
                                </div>
                              </div>
                            </div>

                            <!-- Row 2: Package Method + Qty + Add -->
                            <div class="row mb-2" style="display: flex; flex-wrap: wrap; align-items: flex-end; gap: 10px;">
                              <div class="col-md-6" style="flex: 1 1 48%;">
                                <label>Package Method</label>
                                <select class="form-select field-dropdown">
                                  <option value="">-- Select Method --</option>
                                </select>
                              </div>
                              <div class="col-md-6" style="flex: 1 1 48%; display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1;">
                                  <label>Qty.</label>
                                  <div class="field">
                                    <input type="text" class="border-0 w-100" placeholder="">
                                  </div>
                                </div>
                                <div>
                                  <button class="button1">Add More</button>
                                </div>
                              </div>
                            </div>

                            <!-- Table Section -->
                            <div class="row" style="display: block;">
                              <div class="col-12" style="width: 100%;">
                                <table class="table" style="width: 100%; table-layout: fixed;">
                                  <thead>
                                    <tr>
                                      <th>SR No.</th>
                                      <th>Package Method</th>
                                      <th>Quantity</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <!-- dynamic rows appear here -->
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>


                    <!-- Invoice Details -->

                    <div class="table-like">
                      <div class="row p-2">
                        <div class="col section-title">
                          Invoice Details
                        </div>
                      </div>
                      <div class="row" style="margin-bottom:6px;">
                        <div class="col">
                          <label>Invoice No.</label> <!-- Auto Generated -->
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="auto generated"></div>
                        </div>
                        <div class="col">
                          <label>Invoice Date</label>
                          <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                        <div class="col">
                          <label>Invoice Amount</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                        <div class="col">
                          <label>Indent No.</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                      </div>

                      <div class="row" style="margin-bottom:6px;">
                        <div class="col">
                          <label>Indent Date</label>
                          <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                        <div class="col">
                          <label>Way Bill</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                        <div class="col">
                          <label>Way From Date</label>
                          <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                        <div class="col">
                          <label>Way To Date</label>
                          <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                      </div>
                      <div class=" d-flex justify-content-center align-items-center">
                        <button class="button1" value="submit">Add More Invoice</button>
                      </div>

                    </div><br>
                    <div class="table-like">
                      <div class="row p-2">
                        <div class="col section-title">
                          Other Details
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label>Private Marks</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                        </div>
                      
                      <div class="col">
                        <label>Remarks</label>
                        <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder=""></div>
                      </div>
                    </div>
                  
                </div>


                <div class="footer1">

                </div>
                <div class="d-flex justify-content-center align-items-center gap-3">
                  <div>
                    <button class="button" value="submit">Save</button>
                  </div>
                  <div style="display:flex; justify-content:center; align-items:center">
                    <button class="button bg-secondary" value="submit">Reset</button>
                  </div>
                </div>
              </div>
            </div>






          </div>
        </div>
      </div>
    </div>
  </div><?php include "footer.php" ?>
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

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <!-- <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script> -->
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>