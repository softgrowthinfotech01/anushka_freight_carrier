<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freight Bill</title>

    <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .sheet {
            background: #fffafc;
            width: 1100px;
            margin: 0 auto;
            padding: 15px 20px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .watermark {
            position: absolute;
            top: 40%;
            left: 40%;
            transform: translate(-50%, -50%);
            font-size: 200px;
            font-weight: 700;
            color: rgba(189, 142, 142, 0.05);
            user-select: none;
            pointer-events: none;
        }

        header {
            text-align: center;
            border-bottom: 3px solid #a44;
            padding-bottom: 5px;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
            color: #a22;
            font-weight: 800;
        }

        header p {
            margin: 2px 0;
            font-size: 12px;
            color: #555;
        }

        .main-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 10px;
        }

        .field-box {
            border: 1px solid #bbb;
            padding: 8px;
            font-size: 13px;
            background: #fff;
            min-height: 32px;
        }

        .label {
            font-size: 11px;
            color: #666;
            margin-bottom: 3px;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 5px;
            font-size: 7px;
        }

        .table th,
        .table td {
            border: 1px solid #aaa;
            padding: 2px;
            text-align: center;
        }

        .table th {
            background: #f9f3f3;
            color: #a22;
            font-weight: bold;
        }

        .footer-row {
            border-top: 2px solid #a44;
            font-weight: bold;
            text-align: right;
            padding: 6px 10px;
        }

        .rupees {
            border-top: 1px solid #bbb;
            padding: 6px;
            font-size: 13px;
        }

        .terms {
            font-size: 11px;
            margin-top: 8px;
            border-top: 1px solid #aaa;
            padding-top: 6px;
        }

        .sign-section {
            display: grid;
            grid-template-columns: 1fr 150px;
            margin-top: 10px;
            border-top: 1px solid #aaa;
            padding-top: 6px;
            font-size: 12px;
        }

        .sign-left {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .tiny-note {
            font-size: 11px;
            margin-top: 6px;
            color: #555;
            text-align: left;
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
.table-wrapper {
    width: 117.5%;
    transform: scale(0.85);   /* 85% size, change as you like */
    transform-origin: top left;
}

    </style>
</head>

<body>
    <div class="sheet">
        <div class="watermark">AFC</div>

        <header class="d-flex justify-content-center">
            <div class="logo" aria-hidden="true">
          <!-- simple emblem placeholder -->
          <img src="logo-AC.png" alt="logo" class="img-fluid" width="110px">
        </div>
        <div>
            <h1>ANUSHKA FREIGHT CARRIERS</h1>
            <p>Regd. Office: MAHAVEER POTTERIES COMPOUND, NAGPUR ROAD, PO. PADOLI, CHANDRAPUR</p>
            </div>

        </header>

        <div class="main-grid">
            <div>
                <div class="label">Party Name & Address:</div>
                <div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder=""></div>

                <div class="label" style="margin-top:6px;">GSTIN:</div>
                <div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder=""></div>

                <div class="label" style="margin-top:6px;">NOTE:</div>
                <div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder=""></div>
            </div>

            <div>
                <div class="label">Billing Name & Address:</div>
                <div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder=""></div>

                <div class="label" style="margin-top:6px;">Bill No.</div>
                <div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder=""></div>

                <div class="label" style="margin-top:6px;">Bill Date / Payment Due Date:</div>
                <div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder=""></div>

                
            </div>
        </div>

        <div class="table-wrapper">

        <table class="table">
  <tr>
    <th rowspan="2">No.</th>
    <th rowspan="2">Booking / Old Bilty No.</th>
    <th colspan="2">Consignment / Old Bill No.</th>
    <th rowspan="2">Dest. Code</th>
    <th rowspan="2">PARTICULARS</th>
    <th rowspan="2">Charged Weight (kgs)</th>
    <th rowspan="2">Rate</th>
    <th rowspan="2">Amount</th>
  </tr>
  <tr>
    <th>Name</th>
    <th>Date</th>
  </tr>

  <!-- Sample Row -->
  <tr>
    <td>1</td>
    <td><input type="text" style="border: none;" ></td>
          <td style="border-right:1px solid #aaa;">
            <input type="text" style="width: 50px; border:none">
        </td>
          <td><input type="text" style="width: 50px; border:none"></td>
    <td><input type="text" style="width: 50px; border:none"></td>
    <td><input type="text" style="width: 90px; border:none"></td>
    <td><input type="text" style="width: 90px; border:none"></td>
    <td><input type="text" style="width: 50px; border:none"></td>
    <td><input type="text" style="width: 90px; border:none"></td>
  </tr>

  <!-- Empty Space Row -->
  <tr>
    <td colspan="9" style="height:120px;">&nbsp;</td>
  </tr>

  <!-- Grand Total Row -->
  <tr>
    <td colspan="8" class="footer-row">GRAND TOTAL</td>
    <td><div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder="Rs."></div></td>
  </tr>
</table>

</div>

        <div class="rupees">
            <b>Rupees in words:</b> <div class="field-box"><input type="text" class="border-0" style="width: 100%;"
                                            placeholder="Rs."></div>
        </div>

        <div class="terms">
            <b>TERMS & CONDITIONS:</b><br>
            1) The payment of bill should be made only by Account Payee Cheque/DD drawn in favour of <b>ANUSHKA FREIGHT
                CARRIERS</b> only against official Money Receipt.<br>
            2) In case of claims, a Money Receipt from our Branch is to be produced along with this bill.<br>
            3) Interest @18% per annum to be charged, if bill not paid on due date as per contract within 7 days from
            the date of delivery of the goods.<br>
            4) Bills raised without Money Receipt shall not be valid payment.<br>
            5) All subject to Kolkata jurisdiction only.
        </div>

        <div class="sign-section">
            <div class="sign-left">
                <div>PAN NO.: ALGPV0809D</div><br>
                <div>Prepared by: _____________________</div><br>
                <div>Checked by: ______________________</div><br>
                <div>Enclosures: ______________________</div>
            </div>

            <div style="text-align:center;">
                <b>for ANUSHKA FREIGHT CARRIERS</b><br><br>
                Signature<br><br><br><br>
                EMP Code
                <div style="margin-top:30px;">E.&O.E</div>
            </div>
        </div>

        <div class="tiny-note">
            *This is a system generated bill which does not require signature*
        </div><br>

        <div style="display:flex; justify-content:center; align-items:center">
    <button class="button" value="">Print</button>
    </div>

    </div>
</body>

</html>