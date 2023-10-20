<?php
$apiUrl = 'https://schoolapi-3yo0.onrender.com/get-visitors';

$curl = curl_init($apiUrl);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($curl);

if ($apiResponse === false) {
    echo 'Error fetching data: ' . curl_error($curl);
} else {
    $data = json_decode($apiResponse);

    echo "<script>";
    echo "var visitorData = " . json_encode($data) . ";";
    echo "</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visitor Log</title>
    <meta name="description" content="Visitor Log">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
    /* Style the table container */
    .table-container {
        background-color: #f5f5f5; /* Light gray background color */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style the table header */
    .table thead {
        background-color: #17a2b8; /* Primary color for the header */
        color: white;
        font-weight: bold;
    }

    /* Style the table rows */
    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9; /* Alternate row background color */
    }

    /* Style the table cells */
    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    /* Style the "View Details" button */
    .view-details-button {
        background-color: #17a2b8;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .view-details-button:hover {
        background-color: #0c7f99; /* Darker shade when hovered */
    }
</style>

    <style>
        /* Style the side panel */
        .side-panel {
            background-color: #333;
            color: #fff;
            padding: 20px;
            min-height: 100vh;
        }

        .side-panel a {
            color: #fff;
        }

        /* Style the cards */
        .card {
            margin: 20px;
        }
        .subSlider{
            /* margin-top: -22px; */
           opacity: 1;
         color:grey;
        }
        .subSlider ul {
            margin-left: 15px;
            list-style: none;
        }
        .subSlider ul li a{
            /* padding: 10px 4px  !important; */
            margin-left: 5px;
            padding: 10px;
            
        }
        .space{
            padding:10px 1px !important;
            margin-left:10px;
        }
        .spacer{
            margin-left: 5px;
        }
    </style>
</head>

<body>
   
    <div class="wrapper">
        <!-- sidebar navigation component -->
       
      
       <!-- sidebar navigation component -->
       <nav id="sidebar" class="active">
            <div class="sidebar-header text-center">
                <a class="navbar-brand" href="dashboard">
                    <h3 class="text-primary fw-bolder pt-2 mb-0">MaaBharti</h3>
                </a> 
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="./admin_dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
                </li>
                <li>
                    <a href="./add_data.php"><i class="fas fa-book"></i>Add Data</a>
                </li>
                <li>
                    <a href="./see_data.php"><i class="fas fa-align-center"></i>See Students</a>
                </li>
                <li>
            <a class="space" id="visitorManagementLink"><i class="fas fa-user-circle space"></i>Visitor Management<i id="dropdownIcon" class="fas fa-chevron-down rotate-icon spacer"></i></a>
        </li>
        <div class="subSlider">
            <ul id="visitorManagementSubMenu" style="display: none;">
                <li>
                    <a href="./dashbord.php">Visitor's Dashboard</a>
                </li>
                <li>
                    <a href="visitorslog.php">Visitor Log</a>
                </li>
                <li>
                    <a href="addvisitor.php">Add Visitor</a>
                </li>
            </ul>
        </div>
                <li>
                 <a href="./hrms/hrmsdashboard.php"><i class="fas fa-align-center"></i>HRMS</a>
                </li>
        </nav>
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Access</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li>
                                            <a href="./admin_dashboard.php" target="_blank" class="dropdown-item"><i class="fas fa-user-clock"></i>Dashboard</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a href="./see_data.php" class="dropdown-item"><i class="fas fa-align-center"></i>Add visitor</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a href="./add_data.php" class="dropdown-item"><i class="fas fa-edit"></i>Visitors Log</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
                <!-- end of navbar navigation -->

            <div class="content">
                
                <div class="container">
                    <h3 class="page-title">Visitor Log
                        <a href="addvisitor.php" class="btn btn-outline-primary btn-sm float-end">
                            <i class="fas fa-plus"></i><span class="button-with-icon">Add</span>
                        </a>
                    </h3>
                    
                    <div class="card border-0 border-top border-info border-3 shadow-sm mb-4">
                        <div class="card-body">
                            <form action="visitor-log" method="post" class="needs-validation mb-2" novalidate autocomplete="off" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="JemzYcd46dgs9HceLpYNUFZAbTVFGa5Psl2fYcFO">                      
                                <div class="col-md-12">
                                    <div class="row g-1">
                                        <div class="col-sm-2">
                                            <input type="date" id="start-date" name="start" class="airdatepicker form-control form-control-sm mr-1" value="" placeholder="Start Date" required>
                                        </div>

                                        <div class="col-sm-2 position-relative">
                                            <input type="date" id="end-date" name="end"  class="airdatepicker form-control form-control-sm mr-1" value="" placeholder="End Date" required>
                                        </div>

                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-outline-secondary btn-sm col-md-12">
                                                <i class="fas fa-filter"></i><span class="button-with-icon">Filter</span>
                                            </button>
                                        </div>

                                        <div class="col-sm-2">
                                        <button type="button" id="btnTableExport" class="btn btn-outline-primary btn-sm col-md-12">
                                                <i class="fas fa-file-export"></i><span class="button-with-icon">Export to CSV</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <table width="100%" class="table table-hover" id="dataTables-example" data-order='[[ 0, "desc" ]]'>
                                <thead>
                                    <tr>
                                        <th>Date</th> 
                                        <th>Visitor's Id</th> 
                                        <th>Visitor's Name</th> 
                                        <th>Reason for Visit</th>
                                        <th>To Who </th>
                                        <th>Visitor Number</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (json_last_error() === JSON_ERROR_NONE) {
                                        foreach ($data as $item) {
                                            echo "<tr>";
                                            echo "<td>{$item->visitDate}</td>";
                                            echo "<td>{$item->visitorID}</td>";
                                            echo "<td>{$item->name}</td>";
                                            echo "<td>{$item->purpose}</td>";
                                            echo "<td>{$item->toWho}</td>";
                                            echo "<td>{$item->mobile}</td>";
                                            echo "<td>{$item->visitTime}</td>";
                                            echo "<td>";
                                            if (!empty($item->leaveTime)) {
                                                echo $item->leaveTime;
                                            } else {
                                                echo "exist time";
                                            }
                                            echo "</td>";                                            
                                            echo '<td class="text-start ml-5">';
                                            echo '<button class="btn btn-outline-secondary btn-sm btn-rounded exit-button" data-visitorsid="' . $item->visitorID . '">Exit</button>';
                                            echo '</td>';

                                            echo "</tr>"; 
                                        }
                                    } else {
                                        echo 'Error decoding JSON: ' . json_last_error_msg();
                                    }
                                    curl_close($curl);
                                    ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <div class="pagination"></div>

                </div>

            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/vendor/pagination.js"></script>
    <script>
        // JavaScript to toggle the visibility of the sub-menu
        document.getElementById("visitorManagementLink").addEventListener("click", function() {
            var subMenu = document.getElementById("visitorManagementSubMenu");
            if (subMenu.style.display === "none") {
                subMenu.style.display = "block";
            } else {
                subMenu.style.display = "none";
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to check if a button should be disabled on page load
            function checkButtonState() {
                $('.exit-button').each(function() {
                    var visitorId = $(this).data('visitorsid');
                    var buttonKey = 'buttonState_' + visitorId;
                    var isButtonDisabled = localStorage.getItem(buttonKey);

                    if (isButtonDisabled === 'true') {
                        $(this).prop('disabled', true);
                    }
                });
            }

            // Check button state on page load
            checkButtonState();

            $('.exit-button').click(function() {
                // Get the visitorid from the data-visitorsid attribute of the button
                var visitorId = $(this).data('visitorsid');

                // Disable the button within the clicked row
                var $button = $(this);
                $button.prop('disabled', true);

                // Construct the URL with the visitor ID
                var apiUrl = 'https://schoolapi-3yo0.onrender.com/visitor-left/' + visitorId;

                // Make an AJAX GET request to the API
                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    success: function(response) {
                        if (response.message) {
                            alert('Visitor left successfully.');

                            // Save button state to local storage
                            var buttonKey = 'buttonState_' + visitorId;
                            localStorage.setItem(buttonKey, 'true');

                            // Refresh the page
                            window.location.reload();
                        }
                    },
                    error: function() {
                        alert('Error making the API request.');

                        // Re-enable the button in case of an error
                        $button.prop('disabled', false);
                    }
                });
            });
        });
    </script>

    <!-- to filter the table  -->
    <script>
        $(document).ready(function () {
            // Event listener for the "Filter" button
            $("button[type='submit']").click(function (e) {
                e.preventDefault();

                // Get the start and end dates from the input fields
                var startDate = $("#start-date").val();
                var endDate = $("#end-date").val();

                // Loop through each row in the table
                $("#dataTables-example tbody tr").each(function () {
                    var rowDate = $(this).find("td:first").text(); // Assuming the date is in the first column

                    // Check if the row date is within the selected date range
                    if (rowDate >= startDate && rowDate <= endDate) {
                        $(this).show(); // Show the row if it's within the range
                    } else {
                        $(this).hide(); // Hide the row if it's outside the range
                    }
                });
            });
        });
    </script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/initiate-toast.js"></script>
    <script src="assets/js/form-validator.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/initiate-datatable.js"></script>
    <script src="assets/js/table-export-csv.js"></script>
    <script src="./assets/js/export-to-csv.js"></script>


</body>
</html>
