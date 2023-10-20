    <!DOCTYPE html>
    <html>
    <head>
        <title>Add Data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
                

            <!-- end of sidebar component -->
        

                <!-- Main Content -->
                <div  style="display:flex; justify-content:center; align-item: center;" >
                    <!-- Form for adding data -->
                    <div class="form-container w-50">
                        <h2>Add Students</h2> 
                        <div class="card border-0 border-top border-info border-3 shadow-sm mb-4">

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <input type="text" class="form-control" id="class" name="class" required>
                            </div>
                            <div class="form-group">
                                <label for="section">Section:</label>
                                <input type="text" class="form-control" id="section" name="section" required>
                            </div>
                            <div class="form-group">
                                <label for="contactNumber">Contact Number:</label>
                                <input type="tel" class="form-control" id="contactNumber" name="contactNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="appRegNumber">App Registration Number:</label>
                                <input type="text" class="form-control" id="appRegNumber" name="appRegNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="motherName">Mother's Name:</label>
                                <input type="text" class="form-control" id="motherName" name="motherName" required>
                            </div>
                            <div class="form-group">
                                <label for="fatherName">Father's Name:</label>
                                <input type="text" class="form-control" id="fatherName" name="fatherName" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataModal" id="openModalButton">
                                VERIFY
                            </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add this HTML at the end of your existing HTML code, right before the closing </body> tag -->
        <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="dataModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dataModalLabel">Data Preview</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Display the data here -->
                        <div id="dataDetails"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
                        <button type="button" class="btn btn-primary" id="verifyButton">Verify</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add this JavaScript code before the closing </body> tag -->
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script>
            // Function to populate the modal with the current form data
            function populateModalWithData() {
                var name = $("#name").val();
                var age = $("#age").val();
                var classValue = $("#class").val();
                var section = $("#section").val();
                var contactNumber = $("#contactNumber").val();
                var appRegNumber = $("#appRegNumber").val();
                var motherName = $("#motherName").val();
                var fatherName = $("#fatherName").val();
                var address = $("#address").val();

                var dataDetails = `
                    <p><strong>Name:</strong> ${name}</p>
                    <p><strong>Age:</strong> ${age}</p>
                    <p><strong>Class:</strong> ${classValue}</p>
                    <p><strong>Section:</strong> ${section}</p>
                    <p><strong>Contact Number:</strong> ${contactNumber}</p>
                    <p><strong>App Registration Number:</strong> ${appRegNumber}</p>
                    <p><strong>Mother's Name:</strong> ${motherName}</p>
                    <p><strong>Father's Name:</strong> ${fatherName}</p>
                    <p><strong>Address:</strong> ${address}</p>
                `;

                $("#dataDetails").html(dataDetails);
            }

            $("#openModalButton").click(function () {
                populateModalWithData(); // Populate modal with current form data
            });

            $("#verifyButton").click(function () {
                // You can add an AJAX request here to save the data to your API
                $.ajax({
                    url: 'https://schoolapi-3yo0.onrender.com/students', // Replace with your API endpoint
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        name: $("#name").val(),
                        age: $("#age").val(),
                        class: $("#class").val(),
                        section: $("#section").val(),
                        contactNumber: $("#contactNumber").val(),
                        appRegNumber: $("#appRegNumber").val(),
                        motherName: $("#motherName").val(),
                        fatherName: $("#fatherName").val(),
                        address: $("#address").val(),
                        // Add other fields as needed
                    }),
                    success: function (response) {
                        alert("Data has been verified and saved.");
                        $('#dataModal').modal('hide'); // Close the modal
                        // Clear the form fields
                        $("#name").val("");
                        $("#age").val("");
                        $("#class").val("");
                        $("#section").val("");
                        $("#contactNumber").val("");
                        $("#appRegNumber").val("");
                        $("#motherName").val("");
                        $("#fatherName").val("");
                        $("#address").val("");
                        window.location.href = "./see_data.php";
                    },
                    error: function (error) {
                        alert("An error occurred while saving the data.");
                    }
                });
            });
        </script>
    </body>
    </html>
