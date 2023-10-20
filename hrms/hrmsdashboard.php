<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../components/sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="dash.css">
</head>
<body>

     <div class="wrapper">
        <!-- sidebar navigation component -->
        <?php include './components/headersidebar.php'; ?>
    <!-- Main Content -->
    <div class="container text-center">
    <div class="row justify-content-center algin-item-center">
        <div class="col-md-12">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card card-1">
                        <div class="card-body">
                            <h5 class="card-title">Vendor Management</h5>
                            <p class="card-text">Add data to the system.</p>
                            <a href="./" class="btn ">Go to Vendor Management</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card card-2">
                        <div class="card-body">
                            <h5 class="card-title">Staff Management</h5>
                            <p class="card-text">View Staff Management information.</p>
                            <a href="./StaffManagement.php" class="btn">Go to Staff Management</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card card-3">
                        <div class="card-body">
                            <h5 class="card-title">Student Management</h5>
                            <p class="card-text">View Student Management information.</p>
                            <a href="./StudentManagement.php" class="btn ">Go to Student Management</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
