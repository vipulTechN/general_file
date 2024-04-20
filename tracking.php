<?php
session_start();

// Check if the user is logged in and is a superadmin
if (!(isset($_SESSION['loggedin']) && isset($_SESSION['is_superadmin']) && $_SESSION['is_superadmin'] === true)) {
    header('Location: access_denied.html'); // Redirect to an access denied page or another page
    exit;
}

$servername = "localhost"; // Change this to your MySQL server name
$username = "u903436302_shincentiveapp"; // Change this to your MySQL username
$password = "SearchIncentive@$#@!007"; // Change this to your MySQL password
$dbname = "u903436302_incentiveApp"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the ggdata table
$sql = "SELECT id, month, gen_revenue, recent_pay, remaning_amt, user_name, bookin_number, send_amt FROM tracking_table";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Tracker Data</title>
    <link rel="icon" type="image/png" href="./dataimage/nobglogo.png">
    <!-- Include any necessary CSS or JavaScript libraries for filtering -->
    <!-- For example, you can use jQuery DataTables for filtering -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.css">
    <style>
        /* This is for internal CSS Start*/
        .nine h1,.nine h1 span{text-transform:uppercase}.img,table{width:100%}body{font-family:Arial,sans-serif}.nine h1 span,h1{font-family:Raleway,sans-serif}.table-container{overflow-x:auto;padding:45px}.table-container table{width:100%;min-width:800px;white-space:nowrap}table{border-collapse:collapse;margin-bottom:20px}table,td,th{border:1px solid #000}td,th{padding:8px;text-align:left}th{background-color:#add8e6}tbody tr:nth-child(2n){background-color:#f9f9f9}tbody tr:hover{background-color:#f2f2f2}h1{position:relative;padding:0;margin:0;font-weight:300;font-size:40px;color:#080808;-webkit-transition:.4s;-o-transition:.4s;transition:.4s}h1 span{display:block;font-size:.5em;line-height:1.3}h1 em{font-style:normal;font-weight:600}.nine h1{text-align:center;font-size:50px;color:#222;letter-spacing:1px;font-family:"Playfair Display",serif;font-weight:400}.nine h1 span{margin-top:5px;font-size:15px;color:#444;word-spacing:1px;letter-spacing:2px;font-weight:500;display:grid;grid-template-columns:1fr max-content 1fr;grid-template-rows:27px 0;grid-gap:20px;align-items:center}.nine h1 span:after,.nine h1 span:before{content:" ";display:block;border-bottom:1px solid #ccc;border-top:1px solid #ccc;height:5px;background-color:#f8f8f8}.img{background-image:url(./dataimage/logoimage2.jpg);background-position:center;background-repeat:no-repeat;background-size:cover}
        /* This is for internal CSS End*/
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
</head>
<body class="img">
<div class="nine">
  <h1>Search Homes India
    <span>User Incentive OverView</span>
  </h1>
</div>
<div class="table-container">
    <table id="dataTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Month</th>
                <th>Generated Revenue</th>
                <th>Recent Payment</th>
                <th>Remaining Amount</th>
                <th>Build Amount</th>
                <th>User Name</th>
                <th>Booking Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['month'] . "</td>";
                    echo "<td>₹ " . $row['gen_revenue'] . "</td>";
                    echo "<td>₹ " . $row['recent_pay'] . "</td>";
                    echo "<td>₹ " . $row['remaning_amt'] . "</td>";
                    echo "<td>₹ " . $row['send_amt'] . "</td>";
                    echo "<td>" . $row['user_name'] . "</td>";
                    echo "<td>" . $row['bookin_number'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

    <script>
        // Initialize DataTable with advanced filtering
        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                dom: 'lBfrtip', // Customizing the table features
                buttons: ['csv', 'excel', 'pdf'], // Adding export buttons
                "paging": true,
                "ordering": true,
                "info": true,
                "search": {
                    "smart": true // Enable smart search
                }
            });

            // Adding column-wise search inputs
            $('#dataTable thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });

            // Apply column-wise search
            table.columns().every(function() {
                var that = this;

                $('input', this.header()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
