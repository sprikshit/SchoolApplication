<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">  
    <style>
    

/* Table Styles */

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
                 <div class="col-md-15" style="margin: 20px 50px 0;">
                <h2>Student List</h2>
                <!-- Search Bar -->
                <div class="form-group">
                    <input type="text" class="form-control" id="searchInput" placeholder="Search">
                </div>
                <div class="form-group">
                    <label for="classSelect">Select Class:</label>
                    <select class="form-control" id="classSelect">
                        <!-- JavaScript will populate this dropdown -->
                    </select>
                </div>
                <div class="table-container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Contact Number</th>
                                <th>App Reg Number</th>
                                <th>Mother's Name</th>
                                <th>Father's Name</th>
                                <th>Address</th>
                                <th>Login ID</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="studentTable">
                            <!-- JavaScript will populate this table -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add jQuery and Bootstrap JS -->
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
    <script>
        // Function to populate the class dropdown
        function populateClassDropdown(classes) {
            const classSelect = document.getElementById("classSelect");
            classSelect.innerHTML = '<option value="">All Classes</option>'; // Add an option to show all classes

            classes.forEach((className) => {
                const option = document.createElement("option");
                option.value = className;
                option.textContent = `Class ${className}`;
                classSelect.appendChild(option);
            });
        }

        // Function to fetch and display students by class
        function fetchStudentsByClass(className) {
            fetch(`https://schoolapi-3yo0.onrender.com/get-students?class=${className}`)
                .then((response) => response.json())
                .then((data) => {
                    const studentTable = document.getElementById("studentTable");
                    studentTable.innerHTML = "";

                    data.forEach((student) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                            <td>${student.name}</td>
                            <td>${student.age}</td>
                            <td>${student.class}</td>
                            <td>${student.section}</td>
                            <td>${student.contactNumber}</td>
                            <td>${student.appRegNumber}</td>
                            <td>${student.motherName}</td>
                            <td>${student.fatherName}</td>
                            <td>${student.address}</td>
                            <td>${student.loginID}</td>
                            <td>${student.password}</td>
                            <td>
                                <button class="expand-button" data-toggle="collapse" data-target="#studentDetails${student.loginID}">+</button>
                            </td>
                        `;

                        // Append the student details row
                        const detailsRow = document.createElement("tr");
                        detailsRow.innerHTML = `
                            <td colspan="12">
                                <div id="studentDetails${student.loginID}" class="collapse student-details">
                                    <p><strong>Name:</strong> <span id="name${student.loginID}">${student.name}</span></p>
                                    <p><strong>Age:</strong> <span id="age${student.loginID}">${student.age}</span></p>
                                    <p><strong>Class:</strong><span id="age${student.class}"> ${student.class}</span></p>
                                    <p><strong>Section:</strong><span id="age${student.section}"> ${student.section}</span></p>
                                    <p><strong>Contact Number:</strong><span id="age${student.contactNumber}">${student.contactNumber}</span></p>
                                    <p><strong>App Reg Number:</strong><span id="age${student.appRegNumber}">${student.appRegNumber}</span></p>
                                    <p><strong>Mother's Name:</strong><span id="age${student.motherName}">${student.motherName}</span></p>
                                    <p><strong>Father's Name:</strong><span id="age${student.fatherName}">${student.fatherName}</span></p>
                                    <p><strong>Address:</strong><span id="age${student.address}"> ${student.address}</span></p>
                                    <p><strong>Login ID:</strong><span id="age${student.loginID}"> ${student.loginID}</span></p>
                                    <p><strong>Password:</strong><span id="age${student.password}"> ${student.password}</span></p>
                                    <button class="edit-button" onclick="toggleEdit('${student.loginID}')">Edit</button>
                                    <button class="delete-button" onclick="deleteStudent('${student.loginID}')">Delete</button>
                                </div>
                            </td>
                        `;

                        studentTable.appendChild(row);
                        studentTable.appendChild(detailsRow);
                    });
                });
        }

        // Function to perform search filtering
        function performSearch() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const rows = document.querySelectorAll("#studentTable tr");

            rows.forEach((row) => {
                const cells = row.getElementsByTagName("td");
                let found = false;

                for (let i = 0; i < cells.length; i++) {
                    const cell = cells[i];
                    if (cell.textContent.toLowerCase().includes(searchInput)) {
                        found = true;
                        break;
                    }
                }

                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        // Attach event listeners
        document.getElementById("searchInput").addEventListener("input", performSearch);
        document.getElementById("classSelect").addEventListener("change", function () {
            const selectedClass = this.value;
            fetchStudentsByClass(selectedClass);
        });

        // Populate the class dropdown initially
        fetch("https://schoolapi-3yo0.onrender.com/get-classes")
            .then((response) => response.json())
            .then((classes) => {
                populateClassDropdown(classes);
                // Fetch and display all students initially
                fetchStudentsByClass("");
            });

        // Event delegation for expand buttons
        document.getElementById("studentTable").addEventListener("click", function (event) {
            if (event.target && event.target.classList.contains("expand-button")) {
                const button = event.target;
                const studentDetails = document.querySelector(button.getAttribute("data-target"));
                if (studentDetails.style.display === "block") {
                    studentDetails.style.display = "none";
                    button.textContent = "+";
                } else {
                    studentDetails.style.display = "block";
                    button.textContent = "-";
                }
            }
        });

    </script>
    <script>
        // Function to edit a student
        // Function to toggle between editable and non-editable states
    function toggleEdit(loginID) {
    const nameField = document.getElementById(`name${loginID}`);
    const ageField = document.getElementById(`age${loginID}`);
    const sectionField = document.getElementById(`section${loginID}`);
    const contactNumberField = document.getElementById(`contactNumber${loginID}`);

    // Create input fields to edit the information
    const nameInput = createInputField(nameField.textContent);
    const ageInput = createInputField(ageField.textContent);
    const sectionInput = createInputField(sectionField.textContent);
    const contactNumberInput = createInputField(contactNumberField.textContent);

    // Replace the text fields with input fields
    replaceField(nameField, nameInput);
    replaceField(ageField, ageInput);
    replaceField(sectionField, sectionInput);
    replaceField(contactNumberField, contactNumberInput);

    // Add a "Save" button to save the changes
    const saveButton = createSaveButton(loginID);
    const parentElement = nameField.parentElement;
    parentElement.appendChild(saveButton);
}

// Function to create an input field for editing
function createInputField(value) {
    const input = document.createElement('input');
    input.type = 'text';
    input.value = value;
    return input;
}

// Function to replace a field with another element
function replaceField(field, replacement) {
    field.parentElement.replaceChild(replacement, field);
}

// Function to create a "Save" button
function createSaveButton(loginID) {
    const button = document.createElement('button');
    button.textContent = 'Save';
    button.addEventListener('click', function () {
        saveStudentChanges(loginID);
    });
    return button;
}

// Function to save changes made to a student's information
function saveStudentChanges(loginID) {
    const editedName = document.getElementById(`name${loginID}`).value;
    const editedAge = document.getElementById(`age${loginID}`).value;
    const editedSection = document.getElementById(`section${loginID}`).value;
    const editedContactNumber = document.getElementById(`contactNumber${loginID}`).value;

    // Prepare the data to send in the request body
    const requestData = {
        name: editedName,
        age: editedAge,
        section: editedSection,
        contactNumber: editedContactNumber
    };

    // Make an AJAX request to update the student's information on the server
    $.ajax({
        url: `https://schoolapi-3yo0.onrender.com/students/${loginID}`, // Replace with your API endpoint
        method: 'PUT',
        data: JSON.stringify(requestData),
        contentType: 'application/json', // Set the content type to JSON
        success: function (response) {
            // Handle success, e.g., close the modal, update the table, etc.
            // Refresh the student table after updating
            fetchStudentsByClass(""); // You may need to pass the selected class
        },
        error: function (error) {
            // Handle error
            console.error('Error updating student: ', error);
            // Display an error message to the user, if needed
        }
    });
}



        // Function to delete a student
        function deleteStudent(loginID) {
            // Show a confirmation dialog
            const confirmation = confirm("Are you sure you want to delete this student?");
            if (confirmation) {
                // Make an AJAX request to delete the student from the server
                $.ajax({
                    url: 'delete_student.php', // Replace with your server-side endpoint
                    method: 'POST',
                    data: {
                        loginID: loginID
                    },
                    success: function (response) {
                        // Handle success, e.g., remove the student's row from the table
                        // You can use jQuery to remove the row by selecting it with the loginID
                        $(`#studentRow${loginID}`).remove();
                    },
                    error: function (error) {
                        // Handle error
                        console.error('Error deleting student: ', error);
                        // Display an error message to the user, if needed
                    }
                });
            }
        }
    </script>
</body>
</html>
