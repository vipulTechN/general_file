<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <style>
    @import url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');

    .fold-content:first-child,
    .newsec {
      text-align: left
    }

    #emptotaldata,
    .newsec {
      width: 100%;
      padding: 5px 20px;
      background-color: #eaf6fd;
      box-shadow: 0 4px 6px rgba(0, 0, 0, .1)
    }

    table.fold-table {
      background: #fff;
      color: #555
    }

    .table-wrap {
      position: relative
    }

    tbody tr td,
    tfoot tr td,
    thead tr th {
      text-align: center !important;
      white-space: nowrap
    }

    .scroll-left,
    .scroll-left i,
    .scroll-right,
    .scroll-right i {
      top: 50%;
      transform: translate(-50%, -50%)
    }

    .table-container {
      overflow-y: auto;
      max-height: 55vh;
      height: 100%;
      width: 100%;
      max-width: 76vw;
      margin: 0 auto
    }

    .newsec {
      border: 1px solid #e0e0e0;
      border-radius: 10px;
    }

    .newsec h3{
     font-size: 18px;
    }

    .maintablewrap {
      overflow-y: scroll;
      width: 100%;
      max-height: 85vh;
      height: 100%;
      border-radius: 15px;
    }

    .maintablewrap table {
      width: 100%;
    }

    table {
      border-collapse: collapse
    }

    .maintablewrap::-webkit-scrollbar,
    .table-container::-webkit-scrollbar {
      width: 5px;
      height: 5px
    }

    .maintablewrap::-webkit-scrollbar-track,
    .table-container::-webkit-scrollbar-track {
      background: #e3e3e3;
      border-radius: 10px
    }

    .maintablewrap::-webkit-scrollbar-thumb,
    .table-container::-webkit-scrollbar-thumb {
      background-color: #1b6c9f;
      border-radius: 20px
    }

    .table-container table tfoot tr td,
    .table-container table thead th {
      padding: 5px 12px !important;
      border: 1px solid rgba(0, 0, 0, .529);
      font-weight: 500 !important;
      color: #1b6c9f !important
    }

    .maintablewrap table tfoot tr td,
    .maintablewrap table thead th {
      padding: 6px 0;
      border: 1px solid rgba(0, 0, 0, .529);
      font-weight: 600 !important;
      color: #f6f5f3 !important
    }

    .maintablewrap table tfoot,
    .maintablewrap table thead {
      position: sticky;
      background: #1b6c9f;
      z-index: 99
    }

    .table-container table tfoot,
    .table-container table thead {
      position: sticky;
      background: #000;
      z-index: 99
    }

    .maintablewrap table thead,
    .table-container thead {
      top: -2px
    }

    .maintablewrap table tfoot,
    .table-container tfoot {
      bottom: -2px
    }

    .fold-table tbody tr td {
      font-weight: 500;
      font-size: 15px !important;
      border: 1px solid rgba(0, 0, 0, .1);
      border-bottom: 1px solid rgba(0, 0, 0, .599);
      padding: 12px 20px !important;
      color: #000;
      transform: scale(1)
    }

    .small-friendly tbody tr td {
      padding: 7px 12px !important
    }

    .fold-table tbody tr:hover {
      transform: scale(1.001);
      transition: .3s ease-in-out
    }

    .scroll-left,
    .scroll-right {
      position: absolute;
      border-radius: 50%;
      border: 1px solid #000;
      width: 35px;
      height: 35px;
      z-index: 99;
      background-color: #fff
    }

    .scroll-left i,
    .scroll-right i {
      font-size: 23px;
      color: #1b6c9f;
      position: absolute;
      left: 50%
    }

    .scroll-left {
      left: 20px
    }

    .scroll-right {
      right: -10px
    }

    table.fold-table>tbody>tr.view {
      transition: .3s
    }

    .fold-content>table>tbody>tr,
    table.fold-table>tbody>tr.view td,
    table.fold-table>tbody>tr.view th {
      cursor: pointer
    }

    table.fold-table>tbody>tr.view td:first-child,
    table.fold-table>tbody>tr.view th:first-child {
      position: relative;
      padding-left: 20px
    }

    table.fold-table>tbody>tr.view td:first-child:before,
    table.fold-table>tbody>tr.view th:first-child:before {
      position: absolute;
      top: 50%;
      left: 5px;
      width: 50px;
      height: 16px;
      margin-top: -8px;
      font: 20px fontawesome;
      content: "\f0d7";
      transition: .3s;
      color: red
    }

    table.fold-table>tbody>tr.view:nth-child(4n-1) {
      background: #f4f4f4
    }

    .fold-content>table>tbody>tr:hover,
    table.fold-table>tbody>tr.view:hover {
      background: #ddd
    }

    table.fold-table>tbody>tr.view.open {
      background: #e5e5e6;
      color: #000
    }

    table.fold-table>tbody>tr.view.open td:first-child:before,
    table.fold-table>tbody>tr.view.open th:first-child:before {
      transform: rotate(-180deg);
      color: #000
    }

    .visible-small,
    table.fold-table>tbody>tr.fold {
      display: none
    }

    table.fold-table>tbody>tr.fold.open {
      display: table-row
    }

    .fold-content h3 {
      margin-top: 0;
      font-size: 16px
    }

    .fold-content>table {
      box-shadow: 0 2px 8px 0 rgba(0, 0, 0, .2)
    }

    .fold-content>table>tbody>tr:nth-child(2n) {
      background: #eee
    }

    .visible-big {
      display: block
    }

    .totalbook {
      display: flex;
      align-items: center;
      margin: 3px 0
    }

    .totalbook .totalbookchild {
      margin-left: 10px
    }

    .totalbook .totalbookchild h6 {
      font-size: 14px
    }

    .divide {
      margin: -9px 0 0 10px;
      font-weight: 400;
      font-size: 18px;
      opacity: .6
    }

    .monthexp {
      color: red
    }

    .totalbook .totalbookchild:first-child {
      margin-left: 0
    }

    .side-menu li.sideactive2 {
      background: var(--shicol);
      position: relative
    }

    .side-menu li.sideactive2 a {
      color: var(--shicol)
    }

    .financialtrsticky {
      position: sticky;
      top: 0;
      z-index: 99
    }

    #emptotaldata {
      text-align: center;
      margin: 0 auto;
      border: 1px solid #e0e0e0;
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
      display: none
    }

    #emptotaldata .totalbook {
      justify-content: center
    }

    @media only screen and (max-width:1170px) {

      .newsec,
      .table-container {
        width: 100%;
        max-width: 100%
      }
    }

    @media only screen and (max-width:768px) {
      #emptotaldata .totalbookhead {
        font-size: 13px
      }

      .scroll-right {
        right: -12px
      }

      .scroll-left {
        left: 20px
      }

      .maintablewrap table tfoot tr td,
      .maintablewrap table thead th {
        padding: 8px 12px;
        font-size: 13px
      }

      .fold-table tbody tr td {
        padding: 6px 12px !important
      }

      table.fold-table>tbody>tr.view td:first-child:before,
      table.fold-table>tbody>tr.view th:first-child:before {
        position: absolute;
        top: 50%;
        left: 0;
        width: 20px;
        height: 16px;
        margin-top: -8px;
        font: 18px fontawesome;
        content: "\f0d7";
        transition: .3s;
        color: red
      }
    }

    @media only screen and (min-width:1600px) {

      .newsec,
      .table-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto
      }
    }
  </style>
  <?php include('header.php'); ?>
  <!-- Main Content -->
  <div class="content">
    <div class="contentinside">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="maintablewrap">
              <table class="fold-table" cellspacing="0">
                <thead>
                  <tr>
                    <th>Month</th>
                    <th>Revenue</th>
                    <th>Remaining Amount</th>
                    <th>Recent Build</th>
                    <th>Build Incentive</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td colspan="5">
                      <div class="newsec">
                        <h3>Financial year - 2023-2024</h3>
                        <div class="totalbook">
                          <div class="totalbookchild">
                            <h6>Overall Bookings :- <span class="monthexp">400</span></h6>
                          </div>
                          <div class="divide">|</div>
                          <div class="totalbookchild">
                            <h6>Overall Earn :- <span class="monthexp">400</span></h6>
                          </div>
                          <div class="divide">|</div>
                          <div class="totalbookchild">
                            <h6>Overall Build :- <span class="monthexp">400</span></h6>
                          </div>
                          <div class="divide">|</div>
                          <div class="totalbookchild">
                            <h6>Advance Paid :- <span class="monthexp">400</span></h6>
                          </div>
                          <div class="divide">|</div>
                          <div class="totalbookchild">
                            <h6> Final Remaning :- <span class="monthexp">400</span></h6>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                  <tr class="group-header view">
                    <td class="financialyear">2024-03-01</td>
                    <td>16000</td>
                    <td>300000</td>
                    <td>800088</td>
                    <td>2020</td>
                  </tr>

                  <tr class="fold">
                    <td colspan="20">
                      <div class="fold-content">
                        <div class="table-wrap">
                          <div class="table-container">
                            <table class="small-friendly" cellspacing="0" style="width: 100%">
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
                                  <th>Status</th>
                                  <th>Amount Received</th>
                                </tr>
                              </thead>
                              <tbody id="expenses">
                                <tr>
                                  <td>1</td>
                                  <td>2024-05-01</td>
                                  <td>May</td>
                                  <td>ABC Builders</td>
                                  <td>Project X</td>
                                  <td>John Doe</td>
                                  <td>1234567890</td>
                                  <td>johndoe@example.com</td>
                                  <td>Residential</td>
                                  <td>101</td>
                                  <td>1000 sq ft</td>
                                  <td>$100,000</td>
                                  <td>5%</td>
                                  <td>$5,000</td>
                                  <td>2%</td>
                                  <td>Confirmed</td>
                                  <td>$50,000</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>2024-05-15</td>
                                  <td>May</td>
                                  <td>XYZ Developers</td>
                                  <td>Project Y</td>
                                  <td>Jane Smith</td>
                                  <td>9876543210</td>
                                  <td>janesmith@example.com</td>
                                  <td>Commercial</td>
                                  <td>202</td>
                                  <td>1500 sq ft</td>
                                  <td>$200,000</td>
                                  <td>7%</td>
                                  <td>$14,000</td>
                                  <td>3%</td>
                                  <td>Pending</td>
                                  <td>$0</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>2024-05-20</td>
                                  <td>May</td>
                                  <td>DEF Builders</td>
                                  <td>Project Z</td>
                                  <td>Michael Johnson</td>
                                  <td>5555555555</td>
                                  <td>michaeljohnson@example.com</td>
                                  <td>Residential</td>
                                  <td>303</td>
                                  <td>1200 sq ft</td>
                                  <td>$150,000</td>
                                  <td>6%</td>
                                  <td>$9,000</td>
                                  <td>2.5%</td>
                                  <td>Confirmed</td>
                                  <td>$75,000</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>2024-05-25</td>
                                  <td>May</td>
                                  <td>GHI Constructions</td>
                                  <td>Project A</td>
                                  <td>Sarah Johnson</td>
                                  <td>4444444444</td>
                                  <td>sarahjohnson@example.com</td>
                                  <td>Residential</td>
                                  <td>404</td>
                                  <td>1100 sq ft</td>
                                  <td>$120,000</td>
                                  <td>5.5%</td>
                                  <td>$6,600</td>
                                  <td>2.5%</td>
                                  <td>Pending</td>
                                  <td>$0</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>2024-05-10</td>
                                  <td>May</td>
                                  <td>JKL Developers</td>
                                  <td>Project B</td>
                                  <td>Emily Davis</td>
                                  <td>3333333333</td>
                                  <td>emilydavis@example.com</td>
                                  <td>Commercial</td>
                                  <td>505</td>
                                  <td>1800 sq ft</td>
                                  <td>$250,000</td>
                                  <td>8%</td>
                                  <td>$20,000</td>
                                  <td>3%</td>
                                  <td>Confirmed</td>
                                  <td>$100,000</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>2024-05-05</td>
                                  <td>May</td>
                                  <td>MNO Builders</td>
                                  <td>Project C</td>
                                  <td>James Wilson</td>
                                  <td>2222222222</td>
                                  <td>jameswilson@example.com</td>
                                  <td>Residential</td>
                                  <td>606</td>
                                  <td>1300 sq ft</td>
                                  <td>$180,000</td>
                                  <td>6.5%</td>
                                  <td>$11,700</td>
                                  <td>2%</td>
                                  <td>Pending</td>
                                  <td>$0</td>
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td>2024-05-18</td>
                                  <td>May</td>
                                  <td>PQR Constructions</td>
                                  <td>Project D</td>
                                  <td>Olivia Brown</td>
                                  <td>9999999999</td>
                                  <td>oliviabrown@example.com</td>
                                  <td>Residential</td>
                                  <td>707</td>
                                  <td>1400 sq ft</td>
                                  <td>$190,000</td>
                                  <td>7%</td>
                                  <td>$13,300</td>
                                  <td>2.5%</td>
                                  <td>Confirmed</td>
                                  <td>$70,000</td>
                                </tr>
                                <tr>
                                  <td>8</td>
                                  <td>2024-05-08</td>
                                  <td>May</td>
                                  <td>STU Builders</td>
                                  <td>Project E</td>
                                  <td>William Taylor</td>
                                  <td>7777777777</td>
                                  <td>williamtaylor@example.com</td>
                                  <td>Commercial</td>
                                  <td>808</td>
                                  <td>1600 sq ft</td>
                                  <td>$220,000</td>
                                  <td>7.5%</td>
                                  <td>$16,500</td>
                                  <td>3%</td>
                                  <td>Pending</td>
                                  <td>$20000</td>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>

                </tbody>
                <tfoot>
                  <tr>
                    <td>Month</td>
                    <td>Revenue</td>
                    <td>Remaining Amount</td>
                    <td>Recent Build</td>
                    <td>Build Incentive</td>
                  </tr>
                </tfoot>
              </table>
              <button class="scroll-left">
                <i class="bx bx-left-arrow-alt"></i>
              </button>
              <button class="scroll-right">
                <i class="bx bx-right-arrow-alt"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Main Content -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap_alpha2.js"></script>
  <script type="text/javascript" src="../assets/js/script.js"></script>
  
  <script>
    $(document).ready(function() {
      $('.scroll-left').on('click', function() {
        $('.table-container').animate({
          scrollLeft: '-=300'
        }, 'ease-in-out');
        $('.maintablewrap').animate({
          scrollLeft: '-=300'
        }, 'ease-in-out');
      });
      $('.scroll-right').on('click', function() {
        $('.table-container').animate({
          scrollLeft: '+=300'
        }, 'ease-in-out');
        $('.maintablewrap').animate({
          scrollLeft: '+=300'
        }, 'ease-in-out');
      });
    });
  </script>
  <script>
    $(function() {
      $(".fold-table tr.view").on("click", function() {
        if ($(this).hasClass("open")) {
          $(this).removeClass("open").next(".fold").removeClass("open");
          $(this).removeClass("financialtrsticky");
        } else {
          $(".fold-table tr.view").removeClass("open").next(".fold").removeClass("open").removeClass("financialtrsticky");
          $(this).addClass("open").next(".fold").addClass("open");
          $(".fold-table tr.view.open").addClass("financialtrsticky");
        }
      });
    });
  </script>
  </body>

</html>