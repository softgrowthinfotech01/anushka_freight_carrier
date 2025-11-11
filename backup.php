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
          </div><br>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title text-center">BILL</div>
                </div>
                <div class="card-header">
                  <div class="card-title">CONSIGNOR INFORMATION</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">CONSIGNOR NAME</label>
                          <select class="form-select p-2" id="consignorDropdown">
                            <option value="">-- Select Consignor --</option>
                            <option value="1">Arjun Sharma Transport</option>
                            <option value="2">Patel Logistics Pvt Ltd</option>
                            <option value="3">Singh Freight Services</option>
                            <option value="4">Kumar Cargo Solutions</option>
                            <option value="5">Desai Movers</option>
                          </select>
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
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DATE</label>
                          <input
                            type="date"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Date">
                        </div>
                      </div>
                      <div class="col-md-6 ">

                      </div>
                  </form>
                </div>

                <!-- Consignee -->
                <div class="card-header">
                  <div class="card-title">CONSIGNEE INFORMATION</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row ">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">CONSIGNEE NAME</label>
                          <select class="form-select p-2" id="consignorDropdown">
                            <option value="">-- Select Consignee --</option>
                            <option value="1">Arjun Sharma Transport</option>
                            <option value="2">Patel Logistics Pvt Ltd</option>
                            <option value="3">Singh Freight Services</option>
                            <option value="4">Kumar Cargo Solutions</option>
                            <option value="5">Desai Movers</option>
                          </select>
                        </div>
                      </div>
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="vehicle">CONSIGNEE PHONE</label>
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
                            <label for="vehicle">CONSIGNEE ADDRESS</label>
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
                            <label for="vehicle">PURCHASE ORDER NUMBER</label>
                            <input
                              type="text"
                              class="form-control"
                              id="vehicle"
                              placeholder="Enter Purchase Order number">
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
                      <div class="row mb-2">
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="vehicle">DATE</label>
                            <input
                              type="date"
                              class="form-control"
                              id="vehicle"
                              placeholder="Enter Date">
                          </div>
                        </div>
                        <div class="col-md-6 ">

                        </div>
                      </div>
                  </form>
                </div>

                <!-- Delivery Date -->
                <div class="card-header">
                  <div class="card-title">DELIVERY DETAILS</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">FROM: CODE & NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Code and Name">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">TO: CODE & NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Code and Name">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DELIVERY TYPE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Delivery Type">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DISTANCE(in Kms)</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Distancce">
                        </div>
                      </div>
                  </form>
                </div>

                <!-- Insurance Date -->
                <div class="card-header">
                  <div class="card-title">INSURANCE DETAILS</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">COMPANY</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Company Name">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">POLICY NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Policy Number">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">AMOUNT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Amount">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">RISK</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter risk">
                        </div>
                      </div>
                  </form>
                </div>

                <!-- Goods Details -->
                <div class="card-header">
                  <div class="card-title">GOODS/PACKAGE DETAILS</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">NUMBER OF PACKAGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Number of Packages">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">METHOD OF PACKING</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter method of packing">
                        </div>
                      </div>
                  </form>
                </div>

                <div class="row mb-2">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label for="vehicle">HSN CODE</label>
                      <input
                        type="text"
                        class="form-control"
                        id="vehicle"
                        placeholder="Enter HSN Code">
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label for="vehicle">ACTUAL WEIGHT(In Kgs)</label>
                      <input
                        type="text"
                        class="form-control"
                        id="vehicleowner"
                        placeholder="Enter Actual Weight">
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label for="vehicle">CHARGED WEIGHT</label>
                      <input
                        type="text"
                        class="form-control"
                        id="vehicle"
                        placeholder="Enter Charged Weight">
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label for="vehicle">LOAD TYPE</label>
                      <input
                        type="text"
                        class="form-control"
                        id="vehicleowner"
                        placeholder="Enter Load Type">
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label for="vehicle">DESCRIPTION</label>
                      <input
                        type="textarea"
                        class="form-control"
                        id="vehicle"
                        placeholder="Enter Description">
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label for="vehicle">IDENTIFICATION/MARKS</label>
                      <input
                        type="text"
                        class="form-control"
                        id="vehicleowner"
                        placeholder="Enter Identification/Marks">
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label for="vehicle">BUSINESS TYPE</label>
                      <input
                        type="text"
                        class="form-control"
                        id="vehicle"
                        placeholder="Enter Business Type">
                    </div>
                  </div>
                  <div class="col-md-6 ">

                  </div>
                  </form>
                </div>

                <!-- Dimnesion Detail -->
                <div class="card-header">
                  <div class="card-title">DIMENSIONS DETAILS</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">LENGHT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Length">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">WIDTH</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Width">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">HEIGHT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Height">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">NUMBER OF PACKAGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Number of packages">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">TOTAL CFT/CMT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Total CFT/CMT">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">SINGLE PIECE WEIGHT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Single Piece Weight">
                        </div>
                      </div>
                  </form>
                </div>

                <!-- Payment Detail -->
                <div class="card-header">
                  <div class="card-title">PAYMENT DETAILS</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">FOR PAID CONSIGNMENTS/ ADVANCE PAYMENTS</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Paid / Advance Payment">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">M.R. NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter M.R. Number">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DATE</label>
                          <input
                            type="date"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Date">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">AMOUNT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Amount">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DECLARED VALUE OF GOODS</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Declared value of goods">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">BASIS OF BOOKING</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Basis of booking">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DECLARED VALUE OF GOODS</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Declared values of goods">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">BASIS OF BOOKING</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Basis of booking">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">BILLED WITH M/S</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Billed with M/s">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">BRANCH CODE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Branch Code">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">PARTY CODE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Party Code">
                        </div>
                      </div>
                      <div class="col-md-6 ">

                      </div>
                  </form>
                </div>

                <!-- Charges Detail -->
                <div class="card-header">
                  <div class="card-title">CHARGES DETAILS</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">RATE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Rate">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">FREIGHT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Freight Type">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">MTRL HANDLING CHARGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter MTRL charges">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DOOR COLLECTION CHARGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter door collection charges">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">DOOR DELIVERY CHARGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter door delivery charges">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">MISC. CHARGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Misc. charges">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">TOLL CHARGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Toll Charges">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">OTHER CHARGES</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter other charges">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">SUBTOTAL</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter Subtotal">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">ADVANCE AMOUNT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Enter Advance amount">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">GRAND TOTAL</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter grand total">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">TO PAY/ PAID/ TBB AMOUNT</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter to pay/ paid/ tbb amount">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <!-- Permit Detail -->
                <div class="card-header">
                  <div class="card-title">PERMIT DETAILS</div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">PERMIT NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicle"
                            placeholder="Enter permit number">
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="vehicle">RECIEVED BY</label>
                          <input
                            type="text"
                            class="form-control"
                            id="vehicleowner"
                            placeholder="Recieved By">
                        </div>
                      </div>
                    </div>
                </div>
                </form>
              </div>
              <div class="row">
                <div class="col-12 d-flex justify-content-center ">
                  <button type="submit" class=" button2">SUBMIT</button>
                </div>
                </form>
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
  </div><?php include "footer.php" ?>



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