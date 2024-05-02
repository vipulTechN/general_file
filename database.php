<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>database</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/css/bootstrap5.3.2.css"/>
  <link rel="stylesheet" href="../assets/css/style.css"/>
  <style>
    .table-container,.table-wrap{position:relative}tbody tr td,tfoot tr td,thead tr th{text-align:center!important;white-space:nowrap}#scroll-left,#scroll-left i,#scroll-right,#scroll-right i{top:50%;transform:translate(-50%,-50%)}html::-webkit-scrollbar{behavior:smooth}.table-container{overflow-y:auto;max-height:80vh;height:100%;width:100%}table{border-collapse:collapse}.table-container::-webkit-scrollbar{width:5px;height:5px}.table-container::-webkit-scrollbar-track{background:#e3e3e3;border-radius:10px}.table-container::-webkit-scrollbar-thumb{background-color:#1b6c9f;border-radius:20px}.table-container thead{position:sticky;top:-1px;background:#fff}.table-container tfoot td,.table-container thead th{padding:10px 12px}.table-container tfoot{position:sticky;bottom:-1px;background:#fff}tbody tr td{font-weight:500;font-size:15px;border:1px solid rgba(0,0,0,.1);border-bottom:1px solid rgba(0,0,0,.599);padding:12px 20px}tfoot tr td,thead tr th{border:1px solid rgba(0,0,0,.529);color:#1b6c9f;font-weight:700}#scroll-left,#scroll-right{position:absolute;border-radius:50%;border:1px solid #000;width:35px;height:35px;background-color:#fff}#scroll-left i,#scroll-right i{font-size:23px;color:#1b6c9f;position:absolute;left:50%}#scroll-left{left:0;z-index:999}#scroll-right{right:0;z-index:999}@media only screen and (max-width:768px){#scroll-right{right:-20px}#scroll-left{left:20px}}
  </style>
<?php include('header.php'); ?>
<!-- Main Content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="table-wrap">
          <div class="table-container">
            <table id="example" class="stripe row-border order-column display" cellspacing="0" style="width: 100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Booking Date</th>
                  <th>Month</th>
                  <th>Builder</th>
                  <th>Project</th>
                  <th>Customer Name.</th>
                  <th>Contact No.</th>
                  <th>Email Id</th>
                  <th>Type</th>
                  <th>Unit No.</th>
                  <th>Size</th>
                  <th>Agreement Value</th>
                  <th>Commission %</th>
                  <th>Total Revenue</th>
                  <th>CashBack %</th>
                  <th>Actual Revenue</th>
                  <th>Status</th>
                  <th>Received Amt.</th>
                  <th>Sales Person</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="pagedataaas">
                <tr>
                  <td>4</td>
                  <td>2023-04-22</td>
                  <td>Apr</td>
                  <td>PQR Builders</td>
                  <td>Project M</td>
                  <td>Amy Johnson</td>
                  <td>5556667777</td>
                  <td>amyjohnson@example.com</td>
                  <td>Commercial</td>
                  <td>D404</td>
                  <td>1800 sqft</td>
                  <td>$420,000</td>
                  <td>2.8%</td>
                  <td>$11,760</td>
                  <td>2%</td>
                  <td>$11,524</td>
                  <td>Approved</td>
                  <td>$150,000</td>
                  <td>David Wilson</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>2023-05-18</td>
                  <td>May</td>
                  <td>UVW Developers</td>
                  <td>Project N</td>
                  <td>Chris Brown</td>
                  <td>9998887777</td>
                  <td>chrisbrown@example.com</td>
                  <td>Residential</td>
                  <td>E505</td>
                  <td>1300 sqft</td>
                  <td>$320,000</td>
                  <td>3.2%</td>
                  <td>$10,240</td>
                  <td>2.5%</td>
                  <td>$10,003</td>
                  <td>Pending</td>
                  <td>$80,000</td>
                  <td>Samantha Taylor</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>2023-06-30</td>
                  <td>Jun</td>
                  <td>STU Constructions</td>
                  <td>Project O</td>
                  <td>Michael Davis</td>
                  <td>3332221111</td>
                  <td>michaeldavis@example.com</td>
                  <td>Commercial</td>
                  <td>F606</td>
                  <td>2000 sqft</td>
                  <td>$500,000</td>
                  <td>2.5%</td>
                  <td>$12,500</td>
                  <td>1.8%</td>
                  <td>$12,275</td>
                  <td>Approved</td>
                  <td>$200,000</td>
                  <td>Linda Martinez</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>2023-07-14</td>
                  <td>Jul</td>
                  <td>XYZ Ltd</td>
                  <td>Project P</td>
                  <td>Alexander Lee</td>
                  <td>7779991111</td>
                  <td>alexanderlee@example.com</td>
                  <td>Residential</td>
                  <td>G707</td>
                  <td>1500 sqft</td>
                  <td>$380,000</td>
                  <td>3%</td>
                  <td>$11,400</td>
                  <td>2.2%</td>
                  <td>$11,172</td>
                  <td>Pending</td>
                  <td>$90,000</td>
                  <td>Olivia Johnson</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>2023-08-19</td>
                  <td>Aug</td>
                  <td>PQR Builders</td>
                  <td>Project Q</td>
                  <td>Emma Wilson</td>
                  <td>8887776666</td>
                  <td>emmawilson@example.com</td>
                  <td>Commercial</td>
                  <td>H808</td>
                  <td>2200 sqft</td>
                  <td>$600,000</td>
                  <td>2.7%</td>
                  <td>$16,200</td>
                  <td>2.3%</td>
                  <td>$15,834</td>
                  <td>Approved</td>
                  <td>$250,000</td>
                  <td>William Brown</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>2023-09-25</td>
                  <td>Sep</td>
                  <td>LMN Corp</td>
                  <td>Project R</td>
                  <td>Sophia Martinez</td>
                  <td>6665554444</td>
                  <td>sophiamartinez@example.com</td>
                  <td>Residential</td>
                  <td>I909</td>
                  <td>1700 sqft</td>
                  <td>$450,000</td>
                  <td>2.5%</td>
                  <td>$11,250</td>
                  <td>2%</td>
                  <td>$11,025</td>
                  <td>Pending</td>
                  <td>$120,000</td>
                  <td>Ethan Anderson</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>2023-10-10</td>
                  <td>Oct</td>
                  <td>ABC Inc</td>
                  <td>Project S</td>
                  <td>Ava Garcia</td>
                  <td>9991113333</td>
                  <td>avagarcia@example.com</td>
                  <td>Commercial</td>
                  <td>J1010</td>
                  <td>1900 sqft</td>
                  <td>$550,000</td>
                  <td>3%</td>
                  <td>$16,500</td>
                  <td>2.5%</td>
                  <td>$16,095</td>
                  <td>Approved</td>
                  <td>$300,000</td>
                  <td>Nathan Clark</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>2023-11-28</td>
                  <td>Nov</td>
                  <td>XYZ Ltd</td>
                  <td>Project T</td>
                  <td>Isabella Hall</td>
                  <td>4447778888</td>
                  <td>isabellahall@example.com</td>
                  <td>Residential</td>
                  <td>K1111</td>
                  <td>1600 sqft</td>
                  <td>$480,000</td>
                  <td>2.8%</td>
                  <td>$13,440</td>
                  <td>2.2%</td>
                  <td>$13,129</td>
                  <td>Pending</td>
                  <td>$150,000</td>
                  <td>Grace Baker</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>2023-12-05</td>
                  <td>Dec</td>
                  <td>LMN Corp</td>
                  <td>Project U</td>
                  <td>Andrew Scott</td>
                  <td>2225558888</td>
                  <td>andrewscott@example.com</td>
                  <td>Commercial</td>
                  <td>L1212</td>
                  <td>2000 sqft</td>
                  <td>$700,000</td>
                  <td>2.5%</td>
                  <td>$17,500</td>
                  <td>2%</td>
                  <td>$17,150</td>
                  <td>Approved</td>
                  <td>$400,000</td>
                  <td>Chloe White</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>2024-01-20</td>
                  <td>Jan</td>
                  <td>ABC Inc</td>
                  <td>Project V</td>
                  <td>William Turner</td>
                  <td>3339996666</td>
                  <td>williamturner@example.com</td>
                  <td>Residential</td>
                  <td>M1313</td>
                  <td>1800 sqft</td>
                  <td>$600,000</td>
                  <td>3%</td>
                  <td>$18,000</td>
                  <td>2.5%</td>
                  <td>$17,550</td>
                  <td>Pending</td>
                  <td>$200,000</td>
                  <td>Sophia King</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>2024-02-14</td>
                  <td>Feb</td>
                  <td>XYZ Ltd</td>
                  <td>Project W</td>
                  <td>Nicholas Harris</td>
                  <td>7778889999</td>
                  <td>nicholasharris@example.com</td>
                  <td>Commercial</td>
                  <td>N1414</td>
                  <td>2200 sqft</td>
                  <td>$750,000</td>
                  <td>3.2%</td>
                  <td>$24,000</td>
                  <td>2.8%</td>
                  <td>$23,280</td>
                  <td>Approved</td>
                  <td>$500,000</td>
                  <td>Madison Wright</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>2024-03-30</td>
                  <td>Mar</td>
                  <td>LMN Corp</td>
                  <td>Project X</td>
                  <td>Oliver Reed</td>
                  <td>4446668888</td>
                  <td>oliverreed@example.com</td>
                  <td>Residential</td>
                  <td>O1515</td>
                  <td>1900 sqft</td>
                  <td>$680,000</td>
                  <td>3.5%</td>
                  <td>$23,800</td>
                  <td>3%</td>
                  <td>$23,146</td>
                  <td>Pending</td>
                  <td>$300,000</td>
                  <td>Emma Foster</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>2023-04-22</td>
                  <td>Apr</td>
                  <td>PQR Builders</td>
                  <td>Project M</td>
                  <td>Amy Johnson</td>
                  <td>5556667777</td>
                  <td>amyjohnson@example.com</td>
                  <td>Commercial</td>
                  <td>D404</td>
                  <td>1800 sqft</td>
                  <td>$420,000</td>
                  <td>2.8%</td>
                  <td>$11,760</td>
                  <td>2%</td>
                  <td>$11,524</td>
                  <td>Approved</td>
                  <td>$150,000</td>
                  <td>David Wilson</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>2023-05-18</td>
                  <td>May</td>
                  <td>UVW Developers</td>
                  <td>Project N</td>
                  <td>Chris Brown</td>
                  <td>9998887777</td>
                  <td>chrisbrown@example.com</td>
                  <td>Residential</td>
                  <td>E505</td>
                  <td>1300 sqft</td>
                  <td>$320,000</td>
                  <td>3.2%</td>
                  <td>$10,240</td>
                  <td>2.5%</td>
                  <td>$10,003</td>
                  <td>Pending</td>
                  <td>$80,000</td>
                  <td>Samantha Taylor</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>2023-06-30</td>
                  <td>Jun</td>
                  <td>STU Constructions</td>
                  <td>Project O</td>
                  <td>Michael Davis</td>
                  <td>3332221111</td>
                  <td>michaeldavis@example.com</td>
                  <td>Commercial</td>
                  <td>F606</td>
                  <td>2000 sqft</td>
                  <td>$500,000</td>
                  <td>2.5%</td>
                  <td>$12,500</td>
                  <td>1.8%</td>
                  <td>$12,275</td>
                  <td>Approved</td>
                  <td>$200,000</td>
                  <td>Linda Martinez</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>2023-07-14</td>
                  <td>Jul</td>
                  <td>XYZ Ltd</td>
                  <td>Project P</td>
                  <td>Alexander Lee</td>
                  <td>7779991111</td>
                  <td>alexanderlee@example.com</td>
                  <td>Residential</td>
                  <td>G707</td>
                  <td>1500 sqft</td>
                  <td>$380,000</td>
                  <td>3%</td>
                  <td>$11,400</td>
                  <td>2.2%</td>
                  <td>$11,172</td>
                  <td>Pending</td>
                  <td>$90,000</td>
                  <td>Olivia Johnson</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>2023-08-19</td>
                  <td>Aug</td>
                  <td>PQR Builders</td>
                  <td>Project Q</td>
                  <td>Emma Wilson</td>
                  <td>8887776666</td>
                  <td>emmawilson@example.com</td>
                  <td>Commercial</td>
                  <td>H808</td>
                  <td>2200 sqft</td>
                  <td>$600,000</td>
                  <td>2.7%</td>
                  <td>$16,200</td>
                  <td>2.3%</td>
                  <td>$15,834</td>
                  <td>Approved</td>
                  <td>$250,000</td>
                  <td>William Brown</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>2023-09-25</td>
                  <td>Sep</td>
                  <td>LMN Corp</td>
                  <td>Project R</td>
                  <td>Sophia Martinez</td>
                  <td>6665554444</td>
                  <td>sophiamartinez@example.com</td>
                  <td>Residential</td>
                  <td>I909</td>
                  <td>1700 sqft</td>
                  <td>$450,000</td>
                  <td>2.5%</td>
                  <td>$11,250</td>
                  <td>2%</td>
                  <td>$11,025</td>
                  <td>Pending</td>
                  <td>$120,000</td>
                  <td>Ethan Anderson</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>2023-10-10</td>
                  <td>Oct</td>
                  <td>ABC Inc</td>
                  <td>Project S</td>
                  <td>Ava Garcia</td>
                  <td>9991113333</td>
                  <td>avagarcia@example.com</td>
                  <td>Commercial</td>
                  <td>J1010</td>
                  <td>1900 sqft</td>
                  <td>$550,000</td>
                  <td>3%</td>
                  <td>$16,500</td>
                  <td>2.5%</td>
                  <td>$16,095</td>
                  <td>Approved</td>
                  <td>$300,000</td>
                  <td>Nathan Clark</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>2023-11-28</td>
                  <td>Nov</td>
                  <td>XYZ Ltd</td>
                  <td>Project T</td>
                  <td>Isabella Hall</td>
                  <td>4447778888</td>
                  <td>isabellahall@example.com</td>
                  <td>Residential</td>
                  <td>K1111</td>
                  <td>1600 sqft</td>
                  <td>$480,000</td>
                  <td>2.8%</td>
                  <td>$13,440</td>
                  <td>2.2%</td>
                  <td>$13,129</td>
                  <td>Pending</td>
                  <td>$150,000</td>
                  <td>Grace Baker</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>2023-12-05</td>
                  <td>Dec</td>
                  <td>LMN Corp</td>
                  <td>Project U</td>
                  <td>Andrew Scott</td>
                  <td>2225558888</td>
                  <td>andrewscott@example.com</td>
                  <td>Commercial</td>
                  <td>L1212</td>
                  <td>2000 sqft</td>
                  <td>$700,000</td>
                  <td>2.5%</td>
                  <td>$17,500</td>
                  <td>2%</td>
                  <td>$17,150</td>
                  <td>Approved</td>
                  <td>$400,000</td>
                  <td>Chloe White</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>2024-01-20</td>
                  <td>Jan</td>
                  <td>ABC Inc</td>
                  <td>Project V</td>
                  <td>William Turner</td>
                  <td>3339996666</td>
                  <td>williamturner@example.com</td>
                  <td>Residential</td>
                  <td>M1313</td>
                  <td>1800 sqft</td>
                  <td>$600,000</td>
                  <td>3%</td>
                  <td>$18,000</td>
                  <td>2.5%</td>
                  <td>$17,550</td>
                  <td>Pending</td>
                  <td>$200,000</td>
                  <td>Sophia King</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>2024-02-14</td>
                  <td>Feb</td>
                  <td>XYZ Ltd</td>
                  <td>Project W</td>
                  <td>Nicholas Harris</td>
                  <td>7778889999</td>
                  <td>nicholasharris@example.com</td>
                  <td>Commercial</td>
                  <td>N1414</td>
                  <td>2200 sqft</td>
                  <td>$750,000</td>
                  <td>3.2%</td>
                  <td>$24,000</td>
                  <td>2.8%</td>
                  <td>$23,280</td>
                  <td>Approved</td>
                  <td>$500,000</td>
                  <td>Madison Wright</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>2024-03-30</td>
                  <td>Mar</td>
                  <td>LMN Corp</td>
                  <td>Project X</td>
                  <td>Oliver Reed</td>
                  <td>4446668888</td>
                  <td>oliverreed@example.com</td>
                  <td>Residential</td>
                  <td>O1515</td>
                  <td>1900 sqft</td>
                  <td>$680,000</td>
                  <td>3.5%</td>
                  <td>$23,800</td>
                  <td>3%</td>
                  <td>$23,146</td>
                  <td>Pending</td>
                  <td>$300,000</td>
                  <td>Emma Foster</td>
                  <td>
                  <ul class="tableul">
                    <li class="tableli">
                      <i class="bi bi-cloud-arrow-down-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-trash-fill"></i>
                    </li>
                    <li class="tableli">
                      <i class="bi bi-clipboard-check-fill"></i>
                    </li>
                  </ul>
                </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td>ID</td>
                  <td>Booking Date</td>
                  <td>Month</td>
                  <td>Builder</td>
                  <td>Project</td>
                  <td>Customer Name.</td>
                  <td>Contact No.</td>
                  <td>Email Id</td>
                  <td>Type</td>
                  <td>Unit no.</td>
                  <td>Size</td>
                  <td>Agreement Value</td>
                  <td>Commission %</td>
                  <td>Total Revenue</td>
                  <td>CashBack %</td>
                  <td>Actual Revenue</td>
                  <td>Status</td>
                  <td>Received Amt.</td>
                  <td>Sales Person</td>
                  <td>Action</td>
                </tr>
              </tfoot>
            </table>
          </div>
          <button id="scroll-left">
            <i class="bx bx-left-arrow-alt"></i>
          </button>
          <button id="scroll-right">
            <i class="bx bx-right-arrow-alt"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Main Content -->
  <script type="text/javascript" src="../assets/js/bootstrap_alpha2.js"></script>
  <script type="text/javascript" src="../assets/js/jquery3.7.1.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap5.3.2.js"></script>
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <script>
    // Function to apply the filters
    function applyFilters() {
      var filterInputs = [
        { id: "filterID", columnIndex: 0 },
        { id: "filterBookingDate", columnIndex: 1 },
        { id: "filterMonth", columnIndex: 2 },
        { id: "filterBuilder", columnIndex: 3 },
        { id: "filterProject", columnIndex: 4 },
        { id: "filterCustumername", columnIndex: 5 },
        { id: "filterContactnumber", columnIndex: 6 },
        { id: "filterEmail", columnIndex: 7 },
        { id: "filterType", columnIndex: 8 },
        { id: "filterUnit", columnIndex: 9 },
        { id: "filterSize", columnIndex: 10 },
        { id: "filterAgreement", columnIndex: 11 },
        { id: "filterCommission", columnIndex: 12 },
        { id: "filterTrevenue", columnIndex: 13 },
        { id: "filterCashBack", columnIndex: 14 },
        { id: "filterActualRevenue", columnIndex: 15 },
        { id: "filterStatus", columnIndex: 16 },
        { id: "filterReceived", columnIndex: 17 },
        { id: "filterSales", columnIndex: 18 },
      ];

      activeFilters = []; // Reset active filters

      $("#pagedataaas tr").each(function () {
        var row = $(this);
        var showRow = true;

        filterInputs.forEach(function (inputInfo) {
          var input = $("#" + inputInfo.id);
          var filterValue = input.val().toLowerCase();
          var cellValue = row.find("td:eq(" + inputInfo.columnIndex + ")").text().toLowerCase();

          if (cellValue.indexOf(filterValue) === -1) {
            showRow = false;
            return false; // Break out of forEach loop
          }

          if (filterValue.trim() !== "") {
            activeFilters.push(filterValue); // Add non-empty filters to activeFilters
          }
        });

        if (showRow) {
          row.addClass("custom-filtered-row"); // Add a custom class to the filtered rows
        } else {
          row.removeClass("custom-filtered-row"); // Remove the custom class from unfiltered rows
        }
      });

      var totalTotalRevenue = 0;
      var totalActualRevenue = 0;
      var counterRow = 0;

      // Loop through visible rows and calculate totals
      $(".custom-filtered-row").each(function () {
        var totalRevenue = parseFloat($(this).find("td:eq(13)").text());
        var actualRevenue = parseFloat($(this).find("td:eq(15)").text());

        if (!isNaN(totalRevenue)) {
          totalTotalRevenue += totalRevenue;
          counterRow += 1;
        }

        if (!isNaN(actualRevenue)) {
          totalActualRevenue += actualRevenue;
        }

      });

      // Update the totals in your UI (adjust the IDs accordingly)
      $("#counter").text(counterRow);
      $("#totalTotalRevenue").text(totalTotalRevenue.toLocaleString());
      $("#totalActualRevenue").text(totalActualRevenue.toLocaleString());
      $("#pagedataaas tr").hide();
      applyCustomFilter();
    }
    applyCustomFilter();
    // Function to apply custom filter based on active filters
    function applyCustomFilter() {
      $(".custom-filtered-row").show(); // Show only the rows with the custom class
      // Mark filter as applied
    }

    // Show filter modal when button is clicked
    $(".filterable .btn-filter1").click(function () {
      $("#filterModal").modal("show");
    });

    // Apply filters and update the table
    $("#applyFiltersBtn").click(function () {
      $("#filterModal").modal("hide");
      applyFilters();
    });

    // Clear filters and update the table when modal is closed
    $("#filterModal").on("hidden.bs.modal", function () {
      $(".filterable .filters input").val("");

      applyFilters(); // Reapply filters if they were applied
    });

    // Close filters and update the table
    $("#closeFilter").click(function () {
      applyFilters();
      $("#filterModal").modal("hide");
    });

    // Cancle filters and update the table
    $("#cancleFilter").click(function () {
      applyFilters();
      $("#filterModal").modal("hide");
    });
    // this script is for clear the filter which is applied
    $(document).ready(function () {
      // Clear Filters button click event
      $("#clearFiltersBtn").click(function () {
        // Clear all filter inputs
        $("#filterID, #filterBookingDate, #filterMonth, #filterBuilder, #filterProject, #filterContactnumber, #filterCustumername, #filterEmail, #filterType, #filterUnit, #filterSize, #filterAgreement, #filterCommission, #filterTrevenue, #filterCashBack, #filterActualRevenue, #filterStatus, #filterReceived, #filterSales").val("");
      });
    });
    $("#clearFiltersBtn").click(function () {
      applyFilters();
      $("#filterModal").modal("hide");
    });

  </script>
  <script>
    $(document).ready(function () {
      $('#scroll-left').on('click', function () {
        $('.table-container').animate({
          scrollLeft: '-=300'
        }, 'ease-in-out');
      });

      $('#scroll-right').on('click', function () {
        $('.table-container').animate({
          scrollLeft: '+=300'
        }, 'ease-in-out');
      });
    });
  </script>
  </body>
  </html>