<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
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

        .card {
            margin: 20px;
        }
        .subSlider{
           opacity: 1;
         color:grey;
        }
        .subSlider ul {
            margin-left: 15px;
            list-style: none;
        }
        .subSlider ul li a{
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
            
    <!-- Main Content -->
            <div class="col-md-15">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Data</h5>
                        <p class="card-text">Add data to the system.</p>
                        <a href="add_data.php" class="btn btn-primary">Go to Add Data</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">See Students</h5>
                        <p class="card-text">View student information.</p>
                        <a href="./see_data.php" class="btn btn-secondary">Go to See Students</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Visitor Management</h5>
                        <p class="card-text">Manage visitors.</p>
                        <a href="dashbord.php" class="btn btn-info">Go to Visitor Management</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HRMS</h5>
                        <p class="card-text">Manage HRMS</p>
                        <a href="/hrms/hrmsdashboard.php" class="btn btn-info">Go to HRMS Management</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
