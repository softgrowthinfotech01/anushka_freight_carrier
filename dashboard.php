<!DOCTYPE html>
<html lang="en">

<head>



  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title> Admin Dashboard</title>

  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />


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

  <!-- dashboard form css -->
  <link rel="stylesheet" href="assets/css/dashboard_form.css" />

  <style>
    fieldset {
      border: 1px solid #ccc !important;
      padding: 20px !important;
      margin-bottom: 20px;
      border-radius: 6px;
    }

    legend {
      padding: 0 10px;
      font-size: 20px;
      font-weight: bold;
    }

    legend+* {
      margin-top: 10px;
      /* spacing below legend */
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title text-center">CN Entry</div>
                </div>
                <div class="card-body">
                  <form class="sheet" role="document" id="orderForm" aria-label="Consignment note">
                    <div class="watermark">AFC</div>
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
                        <div class="table-like d-flex flex-column gap-1">
                          <fieldset class="d-flex flex-column gap-1">
                            <legend class="w-auto float-none section-title">General Information:</legend>

                            <div class="row m-0">
                              <div class="col">
                                <label>Booking Branch</label>
                              </div>
                              <div class="col-3">
                                <select class="form-select field-dropdown" id="consignorDropdown">
                                  <option value="">-- Select --</option>
                                  <option value="chandrapur">Chandrapur</option>

                                </select> <!-- dropdown -->
                              </div>
                              <div class="col-3">
                                <label>Loading Location</label>
                              </div>
                              <div class="col-3">
                                <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                    placeholder="Location"></div>
                                <!-- Autofill pincode and city -->
                              </div>
                            </div>

                            <div class="row m-0">
                              <div class="col">
                                <label>CN No. & Date</label>
                              </div>
                              <div class="col d-flex gap-2">

                                <div class=" w-25">
                                  <select class="form-select field-dropdown" id="consignorDropdown">
                                    <option value="">-- Select --</option> <!-- Alphabet Letter -->
                                    <option value="">A</option> <!-- Alphabet Letter -->
                                  </select> <!-- dropdown -->
                                </div>
                                <div class=" w-75">
                                  <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                      placeholder="numbers"></div>
                                  <!-- Numbers -->
                                </div>
                              </div>
                              <div class="col">
                                <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder="">
                                </div>
                              </div>
                              <div class="col">
                                <select class="form-select field-dropdown" id="consignorDropdown">
                                  <option value="">-- Select Delivery Type --</option>
                                  <option value="">Godown Delivery</option>
                                  <option value="">Door Delivery</option>
                                </select> <!-- dropdown -->
                              </div>
                            </div>
                            <div class="row m-0">
                              <div class="col">
                                <label>Destination Branch</label>
                              </div>
                              <div class="col">
                                <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                    placeholder="destination branch"></div>
                                <!-- Autofill dest. drop location and pincode -->
                              </div>
                              <div class="col">
                                <label style="margin-top: 5px;">Drop Location</label>
                              </div>
                              <div class="col">
                                <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                    placeholder="delivery drop location"></div>
                                <!-- Autofill dest. drop location and pincode -->
                              </div>
                            </div>

                          </fieldset>
                        </div>
                        <!-- consignor / consignee -->

                        <div class="row justify-content-around table-like">
                          <div class="col-6 p-3">
                            <fieldset>
                              <legend class="w-auto float-none section-title">Consignor Details:</legend>

                              <div class="row">
                                <div class="col-md-5">
                                  <div class="d-flex flex-column row-gap-2">
                                    <label>Select Consignor</label>
                                    <label>Consignor's Name</label>
                                    <label>Consignor's Address</label>
                                    <label>Consignor's Phone</label>
                                    <label>Consignor's Email</label>
                                    <label>Legal Name</label>
                                    <label>Trade Name</label>
                                    <label>GSTIN</label>
                                  </div>
                                </div>
                                <div class="col-md-7 d-flex flex-column row-gap-1">
                                  <div class="col">
                                    <select class="form-select field-dropdown" id="consignorDropdown">
                                      <option value="">-- Select Consignor --</option>
                                      <option value="1">Arjun Sharma Transport</option>
                                      <option value="2">Patel Logistics Pvt Ltd</option>
                                      <option value="3">Singh Freight Services</option>
                                      <option value="4">Kumar Cargo Solutions</option>
                                      <option value="5">Desai Movers</option>
                                    </select>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Name" id="consignorName"></div>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Address" id="consignorAddress"></div>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Phone" id="consignorPhone"></div>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Email" id="consignorEmail"></div>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Legal" id="consignorLegal"></div>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Trade" id="consignorTrade"></div>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="GSTIN" id="consignorGstin"></div>
                                  </div>
                                </div>


                              </div>
                            </fieldset>
                          </div>

                          <div class="col-6 p-3 ">
                            <fieldset>
                              <legend class="w-auto float-none section-title">Consignee Details:</legend>

                              <div class="row">
                                <div class="col-md-5">
                                  <div class="d-flex flex-column row-gap-2">
                                    <label>Select Consignee</label>
                                    <label>Consignee's Name</label>
                                    <label>Consignee's Address</label>
                                    <label>Consignee's Phone</label>
                                    <label>Consignee's Email</label>
                                    <label>Legal Name</label>
                                    <label>Trade Name</label>
                                    <label>GSTIN</label>
                                  </div>
                                </div>
                                <div class="col-md-7 d-flex flex-column row-gap-1">
                                  <div class="col">
                                    <select class="form-select field-dropdown" id="consigneeDropdown">
                                      <option value="">-- Select Consignee --</option>
                                      <option value="1">Arjun Sharma Transport</option>
                                      <option value="2">Patel Logistics Pvt Ltd</option>
                                      <option value="3">Singh Freight Services</option>
                                      <option value="4">Kumar Cargo Solutions</option>
                                      <option value="5">Desai Movers</option>
                                    </select>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Name" id="consigneeName"></div>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Address" id="consigneeAddress"></div>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Phone" id="consigneePhone"></div>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Email" id="consigneeEmail"></div>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Legal" id="consigneeLegal"></div>
                                  </div>
                                  <div class="col">
                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="Trade" id="consigneeTrade"></div>
                                  </div>
                                  <div class="col">

                                    <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                        placeholder="GSTIN" id="consigneeGstin"></div>
                                  </div>
                                </div>
                              </div>

                            </fieldset>
                          </div>
                        </div>



                        <!-- Billing Details -->
                        <div class="table-like">
                          <div class="row p-2">

                            <fieldset>
                              <legend class="w-auto float-none section-title">Billing Details</legend>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="col-md-4 d-flex flex-column row-gap-2">
                                      <label>Booking Basis</label>
                                      <label>Billing Party</label>
                                      <label>Billing Party GST</label>
                                      <label>Trade Name</label>
                                    </div>
                                    <div class="col-md-8 d-flex flex-column row-gap-1">
                                      <div class="col">
                                        <select class="form-select field-dropdown" id="billingPartySelector">
    <option value="">-- Select --</option>
    <option value="TBB">TBB</option>
    <option value="PAID">PAID</option>
    <option value="TO_PAY">To PAY</option>
</select>
 <!-- Dropdown -->
                                      </div>

                                      


                                      <div class="col">
                                        <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder="" id="billingParty"></div>
                                      </div>

                                      <div class="col">
                                        <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder="" id="partyGst"></div>
                                      </div>
                                      <div class="col">
                                        <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder="" id="tradeName"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="col-md-4 d-flex flex-column row-gap-2">
                                      <label>Bill for & station</label>
                                      <label>Party Code and Unit</label>
                                      <label>Legal Name</label>

                                    </div>
                                    <div class="col-md-8 d-flex flex-column row-gap-1">
                                      <div class="col d-flex gap-2">
                                        <div class="col">
                                          <select class="form-select field-dropdown" id="consignorDropdown">
                                            <option value="">-- Select --</option>
                                          </select> <!-- Dropdown -->
                                        </div>
                                        <div class="col">
                                          <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                              placeholder="" id="billingStation"></div>
                                        </div>
                                      </div>
                                      <div class="col d-flex gap-2">
                                        <div class="col">
                                          <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                              placeholder="" id="partyCode"></div>
                                        </div>
                                        <div class="col">
                                          <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                              placeholder="" id="partyUnit"></div>
                                        </div>

                                      </div>
                                      <div class="col">
                                        <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder="" id="legalName"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div id="billingInfoBox" style="
    display:none;
    border:1px solid #ccc;
    padding:10px;
    margin-top:10px;
    background:#f9f9f9;
    border-radius:6px;
">
</div>
                          </fieldset>
                        </div> <!-- end table-like -->

                        <!-- Package Details -->
                        <div class="table-like">

                          <fieldset>
                            <legend class="w-auto float-none section-title">Package Details</legend>
                            <!-- Row 1: Checkbox + Package Input -->
                            <div class="row mb-2" style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px;">
                              <div class="col-md-6" style="flex: 1 1 48%;">
                                <div class="row">
                                  <div class="col-md-6 d-flex flex-column row-gap-2">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                      <input type="checkbox" id="loosePackage">
                                      <label for="loosePackage" class="fs-6 m-0">LOOSE (Zero Package)</label>
                                    </div>
                                    <label>Package Method</label>

                                  </div>
                                  <div class="col-md-6 d-flex flex-column row-gap-2">
                                    <div>
                                      &nbsp;
                                    </div>
                                    <select id="method" class="form-select field-dropdown">
                                      <option value="">-- Select Method --</option>
                                      <option value="Cartoon">CR(Cartoon)</option>
                                      <option value="Wooden Box">WC(Wooden Box)</option>
                                      <option value="Bags">BG(Bags)</option>
                                      <option value="Loose">Loose</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 d-flex" style="flex: 1 1 48%;">
                                <div class="row">
                                  <div class="col-md-6 d-flex flex-column row-gap-2">
                                    <label>Package : </label>
                                    <label>Qty. :</label>
                                    <label>Actual Weigt :</label>
                                    <label>Charged Weight :</label>
                                  </div>
                                  <div class="col-md-6 d-flex flex-column row-gap-1">
                                    <div class="field">
                                      <input type="text" id="package" class="border-0 w-100" placeholder="">
                                    </div>
                                    <div class="field">
                                      <input type="text" id="quality" class="border-0 w-100" placeholder="">
                                    </div>
                                    <div class="field">
                                      <input type="text" id="package" class="border-0 w-100" placeholder="">
                                    </div>
                                    <div class="field">
                                      <input type="text" id="package" class="border-0 w-100" placeholder="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Row 2: Package Method + Qty + Add -->
                            <div class="row mb-2" style="display: flex; flex-wrap: wrap; align-items: flex-end; gap: 10px;">

                              <div>
                                <button type="button" class="button1" id="addMoreBtn">Add More</button>
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
                                  <tbody id="packageTableBody">
                                    <!-- dynamic rows appear here -->
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                        </fieldset>
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
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Derived Freight</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Basic Freight</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>A.O.C Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>FOV Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Cover Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>MMC Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Door collection charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Door Delivery Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Pass charges </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Enroute Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Statistical charges </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Misc. Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>COD charges </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Toll Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Green Tax </div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>E-way Bill Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                            <div class="charge-row">
                              <div>Other Charges</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                            </div>
                          </div>

                        </div>

                        <div>
                          <div class="big-total">
                            <div>ADV AMOUNT</div>
                            <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="">
                            </div>
                          </div>
                          <div class="big-total" style="margin-top:8px;">
                            <div>GRAND TOTAL</div>
                            <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="">
                            </div>
                          </div>

                          <div style="margin-top:10px;font-size:12px;">

                            <div class="charge-row">
                              <div>Received by :</div>
                              <div class="field"><input type="text" class="border-0" style="width: 100%;"
                                  placeholder=""></div>
                              <br>
                              <br>
                            </div>
                          </div>
                        </div>

                      </aside>
                    </div>
                    <!-- end content for side by side entries -->

                    <!-- Invoice Details

                    <div class="table-like">
                      <div class="row p-2">
                        <div class="col section-title">
                          Invoice Details
                        </div>
                      </div>
                      <div class="row" style="margin-bottom:6px;">
                        <div class="col">
                          <label>Invoice No.</label>  
                          <div class="field"><input type="text" class="border-0" style="width: 100%;"
                              placeholder="auto generated"></div>
                        </div>
                        <div class="col">
                          <label>Invoice Date</label>
                          <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder="">
                          </div>
                        </div>
                        <div class="col">
                          <label>Invoice Amount</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="">
                          </div>
                        </div>
                        
                      </div>

                      <div class="row" style="margin-bottom:6px;">
                        <div class="col">
                          <label>E-Way Bill</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="">
                          </div>
                        </div>
                        <div class="col">
                          <label>E-Way From Date</label>
                          <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder="">
                          </div>
                        </div>
                        <div class="col">
                          <label>E-Way To Date</label>
                          <div class="field"><input type="date" class="border-0" style="width: 100%;" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class=" d-flex justify-content-center align-items-center">
                        <button class="button1" value="submit">Add More Invoice</button>
                      </div>

                    </div><br>-->

                    
                    <!-- Invoice Details -->
<div class="table-like" id="invoice-container">

  <div class="invoice-row">

    <div class="row p-2">
      <div class="col section-title">Invoice Details</div>
    </div>

    <div class="row" style="margin-bottom:6px;">
      <div class="col">
        <label>Invoice No.</label>
        <div class="field">
          <input type="text" class="border-0 invoice-no" style="width: 100%;" placeholder="auto generated" readonly>
        </div>
      </div>

      <div class="col">
        <label>Invoice Date</label>
        <div class="field">
          <input type="date" class="border-0 invoice-date" style="width: 100%;">
        </div>
      </div>

      <div class="col">
        <label>Invoice Amount</label>
        <div class="field">
          <input type="text" class="border-0 invoice-amount" style="width: 100%;">
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom:6px;">
      <div class="col">
        <label>E-Way Bill</label>
        <div class="field">
          <input type="text" class="border-0 eway-bill" style="width: 100%;">
        </div>
      </div>

      <div class="col">
        <label>E-Way From Date</label>
        <div class="field">
          <input type="date" class="border-0 eway-from" style="width: 100%;">
        </div>
      </div>

      <div class="col">
        <label>E-Way To Date</label>
        <div class="field">
          <input type="date" class="border-0 eway-to" style="width: 100%;">
        </div>
      </div>
      
    </div>
    <div class="d-flex justify-content-center align-items-center addInvoiceTableRowBtn">
    <button id="addInvoiceBtn" class="button1">Add More Invoice</button>
  </div>
    

    <!-- TABLE FOR INVOICE FIELDS -->
    <div class="row mt-3">
      <div class="col-12">
        <table class="table" style="width: 100%; table-layout: fixed; border:1px solid #eee;">
          <thead style="background:#fbf3f3; color:#9d3630; font-weight:600;">
            <tr>
              <th>SR NO.</th>
              <th>Invoice No.</th>
              <th>Invoice Date</th>
              <th>Invoice Amount</th>
              <th>E-Way Bill</th>
              <th>E-Way From Date</th>
              <th>E-Way To Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="invoiceTableBody">
            <!-- Dynamic Rows -->
          </tbody>
        </table>
        

      </div>
    </div>

    <hr>
  </div>
  

  

</div>


                    <br>

                    <div class="table-like">
                      <div class="row p-2">
                        <div class="col section-title">
                          Other Details
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label>Private Marks</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="">
                          </div>
                        </div>

                        <div class="col">
                          <label>Remarks</label>
                          <div class="field"><input type="text" class="border-0" style="width: 100%;" placeholder="">
                          </div>
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
<script>
  let sr = 1;

  // Load saved data on page load
  window.onload = function() {
  let savedData = JSON.parse(localStorage.getItem("tableData")) || [];
  let table = document.getElementById("packageTableBody");

  savedData.forEach((row, index) => {
  table.insertAdjacentHTML("beforeend", `
  <tr>
    <td>${index + 1}</td>
    <td>${row.method} (${row.pack})</td>
    <td>${row.qty}</td>
    <td><button type="button" onclick="removeRow(this)">Delete</button></td>
  </tr>
  `);
  });

  sr = savedData.length + 1;
  };

  document.getElementById("addMoreBtn").addEventListener("click", function(e) {
  e.preventDefault(); // stop refresh

  let method = document.getElementById("method").value;
  let pack = document.getElementById("package").value;
  let qty = document.getElementById("quality").value;

  if (method === "" || qty === "") {
  alert("Please fill all fields!");
  return;
  }

  // Add row to table
  let table = document.getElementById("packageTableBody");
  table.insertAdjacentHTML("beforeend", `
  <tr>
    <td>${sr}</td>
    <td>${method} (${pack})</td>
    <td>${qty}</td>
    <td><button class="btn btn-outline-danger" type="button" onclick="removeRow(this)">Delete</button></td>
  </tr>
  `);

  // Save to localStorage
  saveToLocalStorage();

  sr++;

  // Clear inputs
  document.getElementById("method").value = "";
  document.getElementById("package").value = "";
  document.getElementById("quality").value = "";
  });

  // Delete row
  function removeRow(btn) {
  btn.parentNode.parentNode.remove();
  saveToLocalStorage();
  }

  // Save current table to localStorage
  function saveToLocalStorage() {
  let rows = document.querySelectorAll("#packageTableBody tr");
  let data = [];

  rows.forEach(row => {
  let cols = row.querySelectorAll("td");
  data.push({
  method: cols[1].innerText.split(" (")[0],
  pack: cols[1].innerText.split(" (")[1].replace(")", ""),
  qty: cols[2].innerText
  });
  });

  localStorage.setItem("tableData", JSON.stringify(data));
  }

  document.getElementById("orderForm").addEventListener("submit", function() {
  localStorage.removeItem("tableData");
  });
  </script>

  <!-- Code for Invoice details table -->
<script>
// Add More Invoice Section
document.getElementById("addInvoiceBtn").addEventListener("click", function (e) {
    e.preventDefault();

    let container = document.getElementById("invoice-container");
    let firstRow = container.querySelector(".invoice-row");
    let clone = firstRow.cloneNode(true);

    // Clear invoice inputs
    clone.querySelectorAll("input").forEach(inp => {
        if (inp.classList.contains("invoice-no")) {
            inp.value = "auto generated"; // always fixed
        } else {
            inp.value = "";
        }
    });

    // Clear table rows
    clone.querySelector(".invoiceTableBody").innerHTML = "";

    container.insertBefore(clone, this.parentElement);

    // Attach table events to this new row
    attachAddTableRowEvent(clone);
});


// Attach add-row functionality for each invoice block
function attachAddTableRowEvent(invoiceBlock) {

    let btn   = invoiceBlock.querySelector(".addInvoiceTableRowBtn");
    let tbody = invoiceBlock.querySelector(".invoiceTableBody");

    let sr = 1;

    btn.onclick = function () {

        // ALWAYS FIXED
        let invNo = "auto generated";

        // GET VALUES
        let invDate = invoiceBlock.querySelector(".invoice-date").value.trim();
        let invAmt  = invoiceBlock.querySelector(".invoice-amount").value.trim();
        let bill    = invoiceBlock.querySelector(".eway-bill").value.trim();
        let from    = invoiceBlock.querySelector(".eway-from").value.trim();
        let to      = invoiceBlock.querySelector(".eway-to").value.trim();

        // VALIDATION
        if (invDate === "" || invAmt === "" || bill === "" || from === "" || to === "") {
            alert("Please fill all invoice fields before adding to table!");
            return;
        }

        // ADD ROW TO TABLE
        let row = document.createElement("tr");
        row.innerHTML = `
          <td>${sr}</td>
          <td>${invNo}</td>
          <td>${invDate}</td>
          <td>${invAmt}</td>
          <td>${bill}</td>
          <td>${from}</td>
          <td>${to}</td>
          <td><button type="button "class="delete-btn btn btn-danger btn-sm">Delete</button></td>
        `;

        tbody.appendChild(row);
        sr++;

        // DELETE EVENT
        row.querySelector(".delete-btn").onclick = function () {
            row.remove();
            updateSrNo(tbody);
            sr = tbody.querySelectorAll("tr").length + 1;
        };

        // ✔ CLEAR INPUT FIELDS AFTER ADDING
        invoiceBlock.querySelector(".invoice-date").value = "";
        invoiceBlock.querySelector(".invoice-amount").value = "";
        invoiceBlock.querySelector(".eway-bill").value = "";
        invoiceBlock.querySelector(".eway-from").value = "";
        invoiceBlock.querySelector(".eway-to").value = "";
    };
}


// Update SR NO after delete
function updateSrNo(tbody) {
    let rows = tbody.querySelectorAll("tr");
    rows.forEach((r, i) => {
        r.children[0].textContent = i + 1;
    });
}


// Attach first invoice block
attachAddTableRowEvent(document.querySelector(".invoice-row"));
</script>

<!-- Billing JS -->
<script>
document.getElementById("billingPartySelector").addEventListener("change", function() {

    let box = document.getElementById("billingInfoBox");
    let value = this.value;

    // Hide for TBB
    if (value === "TBB" || value === "") {
        box.style.display = "none";
        box.innerHTML = "";
        return;
    }

    let html = "";

    if (value === "PAID") {
    html = `
        <div style="display:flex; flex-wrap:wrap; gap:10px;">

            <div style="flex:1; min-width:45%;">
                <b>Name:</b> ${document.getElementById("consignorName").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Phone:</b> ${document.getElementById("consignorPhone").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Address:</b> ${document.getElementById("consignorAddress").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Email:</b> ${document.getElementById("consignorEmail").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Legal Name:</b> ${document.getElementById("consignorLegal").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Trade Name:</b> ${document.getElementById("consignorTrade").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>GSTIN:</b> ${document.getElementById("consignorGstin").value}
            </div>

        </div>
    `;
}


    if (value === "TO_PAY") {
    html = `
        <div style="display:flex; flex-wrap:wrap; gap:10px;">

            <div style="flex:1; min-width:45%;">
                <b>Name:</b> ${document.getElementById("consigneeName").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Phone:</b> ${document.getElementById("consigneePhone").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Address:</b> ${document.getElementById("consigneeAddress").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Email:</b> ${document.getElementById("consigneeEmail").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Legal Name:</b> ${document.getElementById("consigneeLegal").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>Trade Name:</b> ${document.getElementById("consigneeTrade").value}
            </div>

            <div style="flex:1; min-width:45%;">
                <b>GSTIN:</b> ${document.getElementById("consigneeGstin").value}
            </div>

        </div>
    `;
}


    box.innerHTML = html;
    box.style.display = "block";
});
</script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>