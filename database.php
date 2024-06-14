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
           <!-- Operation Alert -->
            <div class="col-lg-12">
                <div id="showAlert"></div>
            </div>
          <!-- Operation Alert End-->
          <div class="col-lg-12">
            <div class="maintablewrap">
              <table class="fold-table" cellspacing="0">
                <thead>
                  <tr>
                    <th>Month/Bookings</th>
                    <?php if ($Project_type === 'mandate'): ?>
                      <!-- <th>Revenue</th> -->
                    <?php else: ?>
                      <th>Revenue</th>
                    <?php endif; ?>
                      <th>Remaining Amount</th>
                    <?php if ($Project_type === 'mandate'): ?>
                      <!-- <th>Recent Build</th> -->
                    <?php else: ?>
                      <th>Recent Build</th>
                    <?php endif; ?>
                    <th>Build Incentive</th>
                  </tr>
                </thead>
                <tbody id="pagedataaas">

                </tbody>
                <tfoot>
                  <tr>
                    <th>Month/Bookings</th>
                    <?php if ($Project_type === 'mandate'): ?>
                      <!-- <th>Revenue</th> -->
                    <?php else: ?>
                      <th>Revenue</th>
                    <?php endif; ?>
                      <th>Remaining Amount</th>
                    <?php if ($Project_type === 'mandate'): ?>
                      <!-- <th>Recent Build</th> -->
                    <?php else: ?>
                      <th>Recent Build</th>
                    <?php endif; ?>
                    <th>Build Incentive</th>
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