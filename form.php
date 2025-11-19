<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Consignment Note</title>


  <style>
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
      width: 1150px;
      /* change to fit screen / print */
      margin: 22px auto;
      background: linear-gradient(180deg, var(--paper), #fff 50%);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
      border-radius: 8px;
      padding: 10px;
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
      justify-content: center;
      align-items: center;
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
      border-radius: 6px;
      background:
        radial-gradient(circle at 30% 30%, rgba(139, 58, 58, 0.06), transparent 10%),
        linear-gradient(135deg, rgba(139, 58, 58, 0.02), rgba(255, 255, 255, 0.02));
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
      min-height: 16px;
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
  grid-template-columns: repeat(6, 125px); /* Try 110px or 100px if needed */
  gap: 3px;
}


    .box {
      border: 1px solid #bfa5a5;
      /* whatever your border is */
      padding: 4px 8px;
      font-size: 12px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* puts input at the bottom */
      height: 55px;
      /* adjust height as needed */
    }

    .box input {
      border: none;
      outline: none;
      padding: 0;
      margin: 0;
      background: transparent;
      /* invisible */
      font-size: 11px;
      border-bottom: 1px solid #ddd;
      /* optional faint line */
    }


    /* right charges column */
    .charges {
      border: 2px solid var(--line);
      padding: 4px;
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
      padding: 4px 2px;
      border-bottom: 1px dashed rgba(0, 0, 0, 0.04);
      font-size: 10px;
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
    .footer {
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

    input:focus {
      outline: none;
      border: none;
      /* remove border entirely */
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
  </style>

</head>

<body>

  <div class="sheet" role="document" aria-label="Consignment note replica">
    <div class="watermark">AFC</div>

    <header>
      <div style="display: flex; justify-content: center; align-items: center;">
        <div class="logo" aria-hidden="true">
          <!-- simple emblem placeholder -->
          <img src="logo-AC.png" alt="logo" class="img-fluid" width="120px">
        </div>

        <div class="head-text">
          <h1 class="company">ANUSHKA FRIEGHT CARRIERS</h1>
          <p class="sub">Regd Office : Mahaveer Potteries Compound Nagpur Road, PO. Padoli CHANDRAPUR - 442406</p>
          <p class="tiny">INSURANCE: The customer has stated that he has insured / not insured the consignment</p>
        </div>
      </div>
    </header>

    <div class="content">
      <!-- LEFT -->
      <div class="form-left" role="form">
        <!-- row 1: Company / Policy -->
        <div class="row">
          <div class="col">
            <label>Company</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Company Name" id="companyName"></div>
          </div>
          <div class="col" style="max-width:240px;">
            <label>Policy No. / Amount</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Policy Number" id="policyNumber"></div>
          </div>
        </div>

        <!-- consignor / consignee -->
        <div class="row">
          <div class="col">
            <label>Consignor's Name</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Consignor's Name" id="consName">
            </div>
          </div>
          <div class="col">
            <label>Address</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Consignor's Address" id="consadd">
            </div>
          </div>
          <div class="col">
            <label>Phone</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Consignor's Phone" id="consphone">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label>Consignee's Name</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Consignee's Name" id="conename">
            </div>
          </div>
          <div class="col">
            <label>Address</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Consignee's Address" id="coneadd">
            </div>
          </div>
          <div class="col">
            <label>Phone</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Consignee's Phone" id="conephone">
            </div>
          </div>
        </div>

        <div class="table-like">

          <!-- invoice / gst / customer -->
          <div class="row" style="margin-bottom:6px;">
            <div style="flex:1">
              <label>Invoice No.</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Invoice No." id="invoice"></div>
            </div>
            <div style="flex:1">
              <label>GSTIN</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="GSTIN" id="gstin"></div>
            </div>
            <div style="flex:1">
              <label>Customer Code</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Customer Code" id="customeCode">
              </div>
            </div>
          </div>

          <!-- small grid of header boxes -->
          <div class="small-grid" aria-hidden="false" role="group" aria-label="Packing and weight grid">
            <div class="box" style="width: 167px;"><strong>No. Of Packages</strong>
              <div class="tiny"><input type="text" style="width: 100%; border: none;" placeholder="" id="packageNo"></div>
            </div>
            <div class="box" style="width: 167px;"><strong>Method of Packing</strong>
              <div class="tiny"><input type="text" style="width: 100%; border: none;" placeholder="" id="packageMet"></div>
            </div>
            <!-- <div class="box"><strong>HSN Code</strong>
              <div class="tiny"><input type="text" style="width: 100%; border: none;" placeholder=""></div>
            </div>
            <div class="box"><strong>Classification of Goods Code</strong>
              <div class="tiny"><input type="text" style="width: 100%; border: none;" placeholder=""></div>
            </div> -->
            <div class="box" style="width: 167px;"><strong>Actual Wt. in Kgs.</strong>
              <div class="tiny"><input type="text" style="width: 100%; border: none;" placeholder="" id="actWeight"></div>
            </div>
            <div class="box" style="width: 167px;"><strong>Charged wt. in Kgs./category of Load</strong>
              <div class="tiny"><input type="text" style="width: 100%; border: none;" placeholder="" id="chrWeight"></div>
            </div>
          </div>

          <div class="section-title">LOAD TYPE</div>

          <div style="display:flex;gap:12px;margin-bottom:8px;">
            <div style="flex:1;">
              <label>Description (Said to contain)</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Description" id="description">
              </div>
            </div>
            <div style="width:220px">
              <label>Distance / For Paid Consignment</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Distance" id="distance">
              </div>
            </div>
          </div>

          <div style="display:flex;gap:12px;margin-bottom:8px;">
            <div style="flex:1;">
              <label>Private Marks/ Identification</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Private Marks" id="marks">
              </div>
            </div>
            <div style="flex:1;">
              <label>M.R. No</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="M.R. No." id="mr">
              </div>
            </div>
            <div style="flex:1;">
              <label>Date</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Date" id="date">
              </div>
            </div>
            <div style="width:220px">
              <label>Amount</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Amount" id="amount">
              </div>
            </div>
          </div>

          <!-- <div class="section-title">Dimension of Consignment (If Bulky / ODC)</div>
          <div class="dim-table" style="margin-bottom:8px;">
            <div class="box">Length <input type="text"></div>
            <div class="box">Width <input type="text"></div>
            <div class="box">Height <input type="text"></div>
            <div class="box">No. of Pkgs <input type="text"></div>
            <div class="box">Total CFT/CMT <input type="text"></div>
            <div class="box">Single piece weight <input type="text"></div>
          </div>


          <div style="display:flex;gap:12px;margin-bottom:8px;">
            <div style="flex:2;">
              <label>Declared value of goods : Rs</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Rs.">
              </div>
            </div>
            <div style="flex:1;">
              <label>Permit No.</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Permit Number">
              </div>
            </div>
          </div> -->

          <div class="section-title">BOOKING DETAILS</div>

          <div style="display:flex;gap:12px;margin-top:6px;">
            <div style="flex:1;">
              <label>Basis of Booking / Billed with M/s</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Basis of Booking" id="basis">
              </div>
            </div>
            <div style="width:220px;">
              <label>Branch Code / Party Code</label>
              <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Branch Code" id="branchCode">
              </div>
            </div>
          </div>

          <div style="margin-top:10px;">
            <label>Original / Main Consignment No. (with Stn. Code)</label>
            <div class="field"><input type="text" style="width: 100%; border: none;" placeholder="Consignment No." id="consignmentNo"></div>
          </div>

        </div> <!-- end table-like -->
      </div> <!-- end left -->

      <!-- RIGHT: Charges -->
      <aside class="charges" aria-label="Charges and bank details">
        <div class="top">
          <div class="bank">
            <div style="font-weight:700;margin-bottom:6px;">BANK DETAILS :-</div>
            <div class="tiny"><strong>Bank Name:</strong> HDFC BANK</div>
            <div class="tiny"><strong>Branch:</strong> PADOLI</div>
            <div class="tiny"><strong>A/c:</strong> 50200096483019</div>
            <div class="tiny"><strong>IFSC Code:</strong> HDFC0005124</div>
            <div class="tiny" style="margin-top:6px;"><strong>Phone No.:</strong> 7620747297, 8999775637</div>
          </div>

          <div style="display:flex;justify-content:space-between;align-items:center;">
            <div class="muted">Unloading by consignee</div>
            <div class="field"><input type="text" style="border: none; width: 50px;" id="unloading"></div><br>

          </div>
          <div style="display:flex;justify-content:space-between;align-items:center;">
            <div class="muted">Address of Issuing Office</div>
            <div class="tiny" style="margin-top:6px;">MAHAVEER POTTERIES COMPOUND, NAGPUR ROAD, PO. PADOLI</div>
          </div>

          <div class="list" aria-hidden="false" style="margin-top:10px;">
            <!-- list of charge rows -->
            <div class="charge-row">
              <div style="margin-top: 15px;">Freight</div>
              <div class="field" style="margin-left: 110px;"><input type="text" style="border: none; width: 30%;" id="freight"></div><br>
            </div>
            <div class="charge-row">
              <div style="margin-top: 15px;">MTRL HANDLING CHARGES</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="handling"></div>
            </div>
            <div class="charge-row">
              <div style="margin-top: 15px;">DOOR COLLECTION CHARGES</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="doorDel"></div>
            </div>
            <div class="charge-row">
              <div style="margin-top: 15px;">DOOR DELIVERY CHARGES</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="doorCol"></div>
            </div>
            <div class="charge-row">
              <div style="margin-top: 15px;">MISC. CHARGES</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="misc"></div>
            </div>
            <div class="charge-row">
              <div style="margin-top: 15px;">TOLL. CHARGES</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="toll"></div>
            </div>
            <div class="charge-row">
              <div style="margin-top: 15px;">OTHER CHARGES</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="others"></div>
            </div>
            <div class="charge-row">
              <div style="margin-top: 15px;">GST</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="gst"></div>
            </div>
            <div class="charge-row">
              <div>SUB TOTAL</div>
              <div class="field"><input type="text" style="border: none; width: 30%;" id="subTotal"></div>
            </div>
          </div>

        </div>

        <div>
          <div class="big-total">
            <div>ADV AMOUNT</div>
            <div class="field"><input type="text" style="border: none; width: 100%;" placeholder="Rs." id="advAmount"></div>
          </div>
          <div class="big-total" style="margin-top:8px;">
            <div>GRAND TOTAL</div>
            <div class="field"><input type="text" style="border: none; width: 100%;" placeholder="Rs." id="total"></div>
          </div>

          <div style="margin-top:10px;font-size:12px;">
            <div style="font-weight:700;margin-bottom:6px;">Charges (Rs)</div>
            <div class="charge-row">
              <div>Received by</div>
              <div>Signature / Stamp</div>
            </div>
          </div>
        </div>

      </aside>
    </div> <!-- end content -->

    <div class="footer">
      <div style="flex:1;">
        <div style="font-weight:700">Goods received by</div>
        <div class="tiny">Name &amp; Signature</div>
      </div>
      <div style="width:360px;">
        <div style="font-weight:700">Important Notes</div>
        <div class="tiny">All claims subject to terms &amp; conditions. Please check goods and packaging at time of
          receipt.</div>
      </div>
    </div>
    <div style="display: flex; justify-content: center;">
    <button class="button" value="" >Print</button>
    </div>
  </div>

</body>

</html>