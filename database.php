<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Superadmin database</title>
  <script type="text/javascript" src="../assets/js/bootstrap_alpha2.js"></script>
  <script type="text/javascript" src="../assets/js/jquery3.7.1.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/css/bootstrap5.3.2.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <style>
    @import url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');.fold-content>table,table.fold-table{background:#fff;color:#555}.table-wrap{position:relative}tbody tr td,tfoot tr td,thead tr th{text-align:center!important;white-space:nowrap}#scroll-left,#scroll-left i,#scroll-right,#scroll-right i{top:50%;transform:translate(-50%,-50%)}.table-container{overflow-y:auto;max-height:85vh;height:100%;width:100%}table{border-collapse:collapse}.table-container::-webkit-scrollbar{width:5px;height:5px}.table-container::-webkit-scrollbar-track{background:#e3e3e3;border-radius:10px}.table-container::-webkit-scrollbar-thumb{background-color:#1b6c9f;border-radius:20px}.table-container .small-friendly thead{position:sticky!important;top:-1px;background:#fff;z-index:999!important}.table-container tfoot td,.table-container thead th{padding:10px 12px}.table-container tfoot{position:sticky;bottom:-1px;background:#fff;z-index:99}#example tbody tr td{font-weight:500!important;font-size:15px!important;border:1px solid rgba(0,0,0,.1);border-bottom:1px solid rgba(0,0,0,.599);padding:12px 20px!important;color:#000!important;transform:scale(1)}#example tbody tr:hover{transform:scale(1.001);transition:.3s ease-in-out}#example tfoot tr td,#example thead tr th{border:1px solid rgba(0,0,0,.529);color:#1b6c9f!important;font-weight:700!important}#scroll-left,#scroll-right{position:absolute;border-radius:50%;border:1px solid #000;width:35px;height:35px;background-color:#fff}#scroll-left i,#scroll-right i{font-size:23px;color:#1b6c9f;position:absolute;left:50%}#scroll-left{left:0;z-index:999}#scroll-right{left:100%;z-index:999}table.fold-table>tbody>tr.view{transition:.3s}.fold-content>table>tbody>tr,table.fold-table>tbody>tr.view td,table.fold-table>tbody>tr.view th{cursor:pointer}table.fold-table>tbody>tr.view td:first-child,table.fold-table>tbody>tr.view th:first-child{position:relative;padding-left:20px}table.fold-table>tbody>tr.view td:first-child:before,table.fold-table>tbody>tr.view th:first-child:before{position:absolute;top:50%;left:5px;width:50px;height:16px;margin-top:-8px;font:20px fontawesome;content:"\f0d7";transition:.3s}table.fold-table>tbody>tr.view:nth-child(4n-1){background:#f4f4f4}.fold-content>table>tbody>tr:hover,table.fold-table>tbody>tr.view:hover{background:#ddd}table.fold-table>tbody>tr.view.open{background:#e5e5e6;color:#000}table.fold-table>tbody>tr.view.open td:first-child:before,table.fold-table>tbody>tr.view.open th:first-child:before{transform:rotate(-180deg);color:#000}.visible-small,table.fold-table>tbody>tr.fold{display:none}table.fold-table>tbody>tr.fold.open{display:table-row}.fold-content{padding:.5em}.fold-content h3{margin-top:0}.fold-content>table{box-shadow:0 2px 8px 0 rgba(0,0,0,.2)}.fold-content>table>tbody>tr:nth-child(2n){background:#eee}.visible-big{display:block}.fold-content:first-child{text-align:left}.totalbook{display:flex;align-items:center;justify-content:space-between;margin:10px 0}@media only screen and (max-width:768px){#scroll-right{right:-20px}#scroll-left{left:20px}}
</style>
  <?php include('header.php'); ?>
  <!-- Main Content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="table-wrap">
            <div class="table-container">
              <table id="example" class="fold-table" cellspacing="0" style="width: 100%">
                <thead>
                  <tr>
                    <th>Financial Year/Bookings</th>
                    <th>Total Revenue</th>
                    <th>Actual Revenue</th>
                    <th>Remaning Revenue</th>
                    <th>Received Amount</th>
                    <th>Amount To be Pay</th>
                    <th>Total Paid Amt</th>
                  </tr>
                </thead>
                <tbody id="pagedataaas">
                  <tr class="group-header view">
                    <td>2023/2024</td>
                    <td>35000000</td>
                    <td>30000000</td>
                    <td>12000</td>
                    <td>5000000</td>
                    <td>100</td>
                    <td>100000000</td>
                  </tr>
                  <tr class="fold">
                    <td colspan="20">
                      <div class="fold-content" style="width: 30%;">
                        <h3>Financial Year - 2023/2024</h3>
                        <div class="totalbook">
                          <div class="yeartotalpaid">
                            <h6>Total Processed :- 400</h6>
                          </div>
                          <div class="yeartotalcancel">
                            <h6>Total Cancelled :- 37</h6>
                          </div>
                          <div class="yeartotalreceiv">
                            <h6>Total Received :- 230</h6>
                          </div>
                        </div>
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
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td>Financial Year/Bookings</td>
                    <td>Total Revenue</td>
                    <td>Actual Revenue</td>
                    <td>Remaning Revenue</td>
                    <td>Received Amount</td>
                    <td>Amount To be Pay</td>
                    <td>Total Paid Amt</td>
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
      <!-- Filter Rows Modal Start -->
      <div class="modal fade" tabindex="-1" id="filterModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Filter Data</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" id="closeFilter"></button>
            </div>
            <div class="modal-body">
              <div class="container p-0">
                <div class="row">
                  <!-- Filter inputs -->
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterID" placeholder="ID">
                    <input type="text" class="form-control mb-2" id="filterBookingDate" placeholder="Booking Date">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterMonth" placeholder="Month">
                    <input type="text" class="form-control mb-2" id="filterBuilder" placeholder="Builder Name">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterProject" placeholder="Project Name">
                    <input type="text" class="form-control mb-2" id="filterCustumername" placeholder="Customer Name">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterContactnumber" placeholder="Contact No.">
                    <input type="text" class="form-control mb-2" id="filterEmail" placeholder="Email Id">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterType" placeholder="Unit Type">
                    <input type="text" class="form-control mb-2" id="filterUnit" placeholder="Unit No.">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterSize" placeholder="Unit Size">
                    <input type="text" class="form-control mb-2" id="filterAgreement" placeholder="Agreement Value">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterCommission" placeholder="Commission %">
                    <input type="text" class="form-control mb-2" id="filterTrevenue" placeholder="Total Revenue">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterCashBack" placeholder="CashBack %">
                    <input type="text" class="form-control mb-2" id="filterActualRevenue" placeholder="Actual Revenue">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterReceived" placeholder="Received Amt.">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="filterStatus" placeholder="Status">
                  </div>
                  <div class="col-md-12">
                    <input type="text" class="form-control mb-2" id="filterSales" placeholder="Sales person">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <!-- Close Modal button -->
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancleFilter">Close</button>
              <!-- Clear Filters button -->
              <button type="button" class="btn btn-danger" id="clearFiltersBtn">Clear Filters</button>
              <!-- Apply Filters button -->
              <button type="button" class="btn btn-primary" id="applyFiltersBtn">Apply Filters</button>
            </div>
          </div>
        </div>
      </div>
      <!-- filter rows Modal End -->
    </div>
  </div>
  <!--End Main Content -->
  <script type="text/javascript" src="../assets/js/bootstrap5.3.2.js"></script>
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <!-- <script type="text/javascript" src="../assets/js/main.js"></script> -->
  <script>
    function applyFilters() {
      var filterInputs = [{
          id: "filterID",
          columnIndex: 0
        },
        {
          id: "filterBookingDate",
          columnIndex: 1
        },
        {
          id: "filterMonth",
          columnIndex: 2
        },
        {
          id: "filterBuilder",
          columnIndex: 3
        },
        {
          id: "filterProject",
          columnIndex: 4
        },
        {
          id: "filterCustumername",
          columnIndex: 5
        },
        {
          id: "filterContactnumber",
          columnIndex: 6
        },
        {
          id: "filterEmail",
          columnIndex: 7
        },
        {
          id: "filterType",
          columnIndex: 8
        },
        {
          id: "filterUnit",
          columnIndex: 9
        },
        {
          id: "filterSize",
          columnIndex: 10
        },
        {
          id: "filterAgreement",
          columnIndex: 11
        },
        {
          id: "filterCommission",
          columnIndex: 12
        },
        {
          id: "filterTrevenue",
          columnIndex: 13
        },
        {
          id: "filterCashBack",
          columnIndex: 14
        },
        {
          id: "filterActualRevenue",
          columnIndex: 15
        },
        {
          id: "filterStatus",
          columnIndex: 16
        },
        {
          id: "filterReceived",
          columnIndex: 17
        },
        {
          id: "filterSales",
          columnIndex: 18
        },
      ];
      activeFilters = [];
      $("#pagedataaas tr").each(function() {
        var row = $(this);
        var showRow = true;
        filterInputs.forEach(function(inputInfo) {
          var input = $("#" + inputInfo.id);
          var filterValue = input.val().toLowerCase();
          var cellValue = row.find("td:eq(" + inputInfo.columnIndex + ")").text().toLowerCase();
          if (cellValue.indexOf(filterValue) === -1) {
            showRow = false;
            return false;
          }
          if (filterValue.trim() !== "") {
            activeFilters.push(filterValue);
          }
        });
        if (showRow) {
          row.addClass("custom-filtered-row");
        } else {
          row.removeClass("custom-filtered-row");
        }
      });
      var totalTotalRevenue = 0;
      var totalActualRevenue = 0;
      var counterRow = 0;
      $(".custom-filtered-row").each(function() {
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

      $("#counter").text(counterRow);
      $("#totalTotalRevenue").text(totalTotalRevenue.toLocaleString());
      $("#totalActualRevenue").text(totalActualRevenue.toLocaleString());
      $("#pagedataaas tr").hide();
      applyCustomFilter();
    }
    applyCustomFilter();

    function applyCustomFilter() {
      $(".custom-filtered-row").show();
    }
    $(".filterable .btn-filter1").click(function() {
      $("#filterModal").modal("show");
    });
    $("#applyFiltersBtn").click(function() {
      $("#filterModal").modal("hide");
      applyFilters();
    });
    $("#filterModal").on("hidden.bs.modal", function() {
      $(".filterable .filters input").val("");
      applyFilters();
    });
    $("#closeFilter").click(function() {
      applyFilters();
      $("#filterModal").modal("hide");
    });
    $("#cancleFilter").click(function() {
      applyFilters();
      $("#filterModal").modal("hide");
    });
    $(document).ready(function() {
      $("#clearFiltersBtn").click(function() {
        $("#filterID, #filterBookingDate, #filterMonth, #filterBuilder, #filterProject, #filterContactnumber, #filterCustumername, #filterEmail, #filterType, #filterUnit, #filterSize, #filterAgreement, #filterCommission, #filterTrevenue, #filterCashBack, #filterActualRevenue, #filterStatus, #filterReceived, #filterSales").val("");
      });
    });
    $("#clearFiltersBtn").click(function() {
      applyFilters();
      $("#filterModal").modal("hide");
    });
  </script>

  <script>
    $(document).ready(function() {
      $('#scroll-left').on('click', function() {
        $('.table-container').animate({
          scrollLeft: '-=300'
        }, 'ease-in-out');
      });

      $('#scroll-right').on('click', function() {
        $('.table-container').animate({
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
        } else {
          $(".fold-table tr.view").removeClass("open").next(".fold").removeClass("open");
          $(this).addClass("open").next(".fold").addClass("open");
        }
      });
    });
  </script>
  </body>

</html>