<?php
// Function to fetch data from the API
function fetchDataFromAPI($apiUrl) {
    $curl = curl_init($apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $apiResponse = curl_exec($curl);

    if ($apiResponse === false) {
        echo 'Error fetching data: ' . curl_error($curl);
        return false;
    } else {
        $data = json_decode($apiResponse);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $data;
        } else {
            echo 'Error decoding JSON: ' . json_last_error_msg();
            return false;
        }
    }

    curl_close($curl);
}

// API URLs
$totalVisitorsInTodayApi = 'https://schoolapi-3yo0.onrender.com/total-visitors-in-today';
$totalVisitorsOutTodayApi = 'https://schoolapi-3yo0.onrender.com/total-visitors-out-today';

// Fetch data from the first API
$totalVisitorsInToday = fetchDataFromAPI($totalVisitorsInTodayApi);

// Fetch data from the second API
$totalVisitorsOutToday = fetchDataFromAPI($totalVisitorsOutTodayApi);
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="qYjx2fCNLYDGptqZvRcyd57rXI3MJbu9yUlO4eBK" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/img/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" href="assets/images/img/favicon.ico">
        <title>Dashboard</title>
    <meta name="description" content="Dashboard">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
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
                 <a href="../hrms/hrmsdashboard.php"><i class="fas fa-align-center"></i>HRMS</a>
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
                                            <a href="./see_data.php" class="dropdown-item"><i class="fas fa-align-center"></i>See Data</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a href="./add_data.php" class="dropdown-item"><i class="fas fa-edit"></i> Add Data</a>
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
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Dashboard</h2>
        </div>
    </div>

    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="info-box bg-success">
            <span class="info-box-icon lh-1">
                <p class="date-month" id="current-month"></p>
                <p class="date-day-number fs-2" id="current-day"></p>
            </span>
            <div class="info-box-content">
                <p class="date-day" id="current-day-of-week"></p>
                <p class="date-time mb-0" id="clock"></p>
            </div>
        </div>
    </div>

    <script>
        function updateDateTime() {
    const currentDate = new Date();
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    const currentMonth = months[currentDate.getMonth()];
    const currentDay = currentDate.getDate();
    const currentDayOfWeek = daysOfWeek[currentDate.getDay()];

    const currentHour = currentDate.getHours();
    const currentMinute = currentDate.getMinutes();
    const currentSecond = currentDate.getSeconds();

    // Update the date elements in your HTML
    document.getElementById("current-month").textContent = currentMonth;
    document.getElementById("current-day").textContent = currentDay;
    document.getElementById("current-day-of-week").textContent = currentDayOfWeek;

    // Update the clock element in your HTML
    document.getElementById("clock").textContent = `${currentHour}:${(currentMinute < 10 ? '0' : '')}${currentMinute}:${(currentSecond < 10 ? '0' : '')}${currentSecond}`;
}

// Update the date and time immediately
updateDateTime();

// Update the date and time every second
setInterval(updateDateTime, 1000);
    </script>

<?php
// Display data from the first API
if ($totalVisitorsInToday !== false) {
    echo '<div class="col-sm-12 col-md-6 col-lg-4">';
    echo '<div class="info-box bg-primary">';
    echo '<span class="info-box-icon text-white"><i class="fas fa-user-plus w-auto"></i></span>';
    echo '<div class="info-box-content">';
    echo '<p class="fs-2 text-white mb-0">' . $totalVisitorsInToday->totalVisitors . '</p>'; // Access the property here
    echo '<p class="text-uppercase text-white mb-0">Visitors Time In Today</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Display data from the second API
if ($totalVisitorsOutToday !== false) {
    echo '<div class="col-sm-12 col-md-6 col-lg-4">';
    echo '<div class="info-box bg-secondary">';
    echo '<span class="info-box-icon text-white"><i class="fas fa-user-plus w-auto"></i></span>';
    echo '<div class="info-box-content">';
    echo '<p class="fs-2 text-white mb-0">' . $totalVisitorsOutToday->totalVisitors . '</p>'; // Access the property here
    echo '<p class="text-uppercase text-white mb-0">Visitors Time Out Today</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

?>


    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Monthly Visitor Counts <span class="text-muted">(Current Day)</span></div>
                <div class="card-body ">
                    <p class="card-title"></p>
                    <div class="canvas-wrapper">
                        <iframe src="https://schoolapi-3yo0.onrender.com/total-visitors-per-day" frameborder="0" height="400px;" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Top Reasons for Visit <span class="text-muted">(Current year)</span></div>
                <div class="card-body">
                    <p class="card-title"></p>
                    <div class="canvas-wrapper">
                        <iframe src="https://schoolapi-3yo0.onrender.com/pieVchart" frameborder="0" height="350px;" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>

        </div>
    </div>

    
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
    <script type="text/javascript">
        var url = "http://codefactorapp.me/demo-frontdesk/public";
    </script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
   
</body>
</html>
