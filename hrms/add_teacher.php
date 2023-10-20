<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">   
    <style>
         .container {
            margin-top: 30px;
        }
        .card {
            border: 3px solid #17a2b8;
            border-radius: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-select {
            border: 2px solid #17a2b8;
        }
        .btn-outline-primary {
            color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-outline-primary:hover {
            background-color: #17a2b8;
            color: white;
        }
        
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
        
         <?php include './components/headersidebar.php'; ?>

        <!-- end of sidebar component -->
       

            <!-- Main Content -->
    <div class="container">
    <h3 class="page-title">Add New Teacher
        <a href="./see_teachers.php" class="btn btn-outline-primary btn-sm float-end">
            <i class="fas fa-arrow-left"></i><span class="button-with-icon">Return</span>
        </a>
    </h3>
        
    <div class="card border-0 border-top border-info border-3 shadow-sm mb-4">

                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Contact Number:</label>
                            <input type="number" class="form-control" id="mobile" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="maritalStatus" >Marital Status:</label>
                    <select name="purpose" id="maritalStatus" class="form-select text-uppercase">
                        <option value="" disabled="" selected="">Choose...</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>                        
                    </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="purpose" id="gender" class="form-select text-uppercase">
                        <option value="" disabled="" selected="">Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>                        
                        <option value="Ohter">Other</option>                        
                    </select>
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion:</label>
                            <input type="text" class="form-control" id="religion" name="religion" required>
                        </div>
                        <div class="form-group">
                            <label for="post">Post:</label>
                            <input type="text" class="form-control" id="post" name="post" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary:</label>
                            <input type="number" class="form-control" id="salary" name="salary" required>
                        </div>
                        <div class="form-group">
                            <label for="joiningDate">Joining Date:</label>
                            <input type="date" class="form-control" id="joiningDate" name="joiningDate" required>
                        </div>
                       
                        <div class="form-group">
                            <label for="inTime">In Time:</label>
                            <input type="time" class="form-control" id="inTime" name="inTime" required>
                        </div>
                        <div class="form-group">
                            <label for="outTime">Out Time:</label>
                            <input type="time" class="form-control" id="outTime" name="outTime" required>
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
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        // Function to populate the modal with the current form data
        function populateModalWithData() {
            var name = $("#name").val();
            var mobile = $("#mobile").val();
            var maritalStatus = $("#maritalStatus").val();
            var address = $("#address").val();
            var gender = $("#gender").val();
            var religion = $("#religion").val();
            var post = $("#post").val();
            var joiningDate = $("#joiningDate").val();
            var subject = $("#subject").val();
            var salary = $("#salary").val();
            var inTime = $("#inTime").val();
            var outTime = $("#outTime").val();
            

            var dataDetails = `
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>mobile:</strong> ${mobile}</p>
                <p><strong>maritalStatus:</strong> ${maritalStatus}</p>
                <p><strong>address:</strong> ${address}</p>
                <p><strong>gender:</strong> ${gender}</p>
                <p><strong>religion:</strong> ${religion}</p>
                <p><strong>post:</strong> ${post}</p>
                <p><strong>Joining Date:</strong> ${joiningDate}</p>
                <p><strong>subject:</strong> ${subject}</p>
                <p><strong>Salary:</strong> ${salary}</p>
                <p><strong>In Time:</strong> ${inTime}</p>
                <p><strong>Out Time:</strong> ${outTime}</p>
               
            `;

            $("#dataDetails").html(dataDetails);
        }

        $("#openModalButton").click(function () {
            populateModalWithData(); // Populate modal with current form data
        });

        $("#verifyButton").click(function () {
    // You can add an AJAX request here to save the data to your API
    $.ajax({
        url: 'https://schoolapi-3yo0.onrender.com/add-teacher',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            name: $("#name").val(),
            mobile: $("#mobile").val(),
            maritalStatus: $("#maritalStatus").val(),
            address: $("#address").val(),
            gender: $("#gender").val(),
            religion: $("#religion").val(),
            post: $("#post").val(),
            joiningDate: $("#joiningDate").val(),
            subject: $("#subject").val(),
            salary: $("#salary").val(),
            inTime: $("#inTime").val(),
            outTime: $("#outTime").val(),
         
        }),
        success: function (response) {
            alert("Data has been verified and saved.");
            $('#dataModal').modal('hide');
            // Clear the form fields
            $("#name").val("");
            $("#mobile").val("");
            $("#maritalStatus").val("");
            $("#address").val("");
            $("#gender").val("");
            $("#religion").val("");
            $("#post").val("");
            $("#joiningDate").val("");
            $("#subject").val("");
            $("#salary").val("");
            $("#inTime").val("");
            $("#outTime").val("");
            window.location.href = "./see_teachers.php";
        },
        error: function (xhr, status, error) {
    console.error(xhr.responseText); // Log the error response to the console
    alert("An error occurred while saving the data.");
}

    });
});

    </script>
</body>
</html>
