<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $visitorName = $_POST["name"];
    $purpose = $_POST["purpose"];
    $toWho = $_POST["toWho"];
    $mobile = $_POST["mobile"];

    // API endpoint URL (replace with your actual API endpoint)
    $apiUrl = "https://schoolapi-3yo0.onrender.com/visitors";

    // Data to be sent as JSON
    $postData = [
        "name" => $visitorName,
        "purpose" => $purpose,
        "toWho" => $toWho,
        "mobile" => $mobile
    ];

    // Convert data to JSON format
    $jsonData = json_encode($postData);

    // Initialize cURL session
    $ch = curl_init($apiUrl);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer YourAuthToken" // Replace with your API authorization token if required
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

    // Execute cURL session and capture the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        // Process the API response
        $responseData = json_decode($response, true);

        // Check if the API response indicates success
        if (isset($responseData["result"]) && $responseData["result"] === "Entry Successful") {
            // Entry added successfully, show an alert and redirect
            echo '<script>';
            echo 'alert("Visitor\'s entry added successfully.");';
            echo 'window.location.href = "visitorslog.php";';
            echo '</script>';
            exit; // Exit to prevent displaying any other content
        }
    }

    // Close cURL session
    curl_close($ch);
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="Add New Visitor">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="components/sidebar.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.1.0/css/datepicker.min.css" rel="stylesheet">
    
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
                                            <a href="./see_data.php" class="dropdown-item"><i class="fas fa-align-center"></i>Add Visitor</a>
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
    <h3 class="page-title">Add New Visitor
        <a href="visitorslog.php" class="btn btn-outline-primary btn-sm float-end">
            <i class="fas fa-arrow-left"></i><span class="button-with-icon">Return</span>
        </a>
    </h3>
        
    <div class="card border-0 border-top border-info border-3 shadow-sm mb-4">
        <form action="" method="POST" class="needs-validation" novalidate accept-charset="utf-8">
            <!-- Add the API endpoint URL to the 'action' attribute -->
            <!-- Example: action="https://api.example.com/endpoint" -->
        
            <div class="card-body">
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="firstname" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control text-uppercase" value="" required>
                        <!-- Use 'name' attribute to match the API field name (e.g., 'first_name') -->
                 </div>
                </div>
                <div class="mb-3">
                    <label for="reasonforvisit" class="form-label">Reason For Visit</label>
                    <select name="purpose" class="form-select text-uppercase">
                        <option value="" disabled="" selected="">Choose...</option>
                        <option value="CONTACT STAFF">Contact STAFF</option>
                        <option value="INTERVIEW">INTERVIEWS</option>
                        <option value="PARENTS">PARENTS</option>
                        <option value="VENDORS">VENDORS</option>
                        <option value="VISITORS">VISITORS</option>
                        <option value="ADMISSION ENQUIRY">ADMISSION ENQUIRY</option>
                    </select>
                    <!-- Use 'name' attribute to match the API field name (e.g., 'reason_for_visit') -->
                </div>
                <div class="mb-3">
                    <label for="visitorfrom" class="form-label">To Who</label>
                    <input type="text" name="toWho" class="form-control text-uppercase" value="" required>
                    <!-- Use 'name' attribute to match the API field name (e.g., 'visitor_from') -->
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Mobile Number</label>
                    <input type="text" name="mobile" class="form-control text-uppercase" value="" placeholder="Mobile Number" required data-position="top right">
                    <!-- Use 'name' attribute to match the API field name (e.g., 'mobile_number') -->
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="./visitorslog.php" class="btn btn-secondary">
                    <i class="fas fa-times"></i><span class="button-with-icon">Cancel</span>
                </a>
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-check"></i><span class="button-with-icon">Save</span>
                </button>
            </div>
        </form>
        
    </div>
</div>

            </div>

        </div>
    </div>

    <!-- message alert -->
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.1.0/css/datepicker.min.css"></script><!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.1.0/js/i18n/datepicker.en.min.js"></script> -->

</body>
</html>
