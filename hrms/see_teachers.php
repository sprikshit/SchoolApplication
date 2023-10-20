
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
    <link href="./singleteacher.css" rel="stylesheet">
<style>
     .container {
        margin-top: 30px;
    }
    .card {
        border: 3px solid #17a2b8;
        border-radius: 15px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
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

    .float-end {
        float: right;
    }

    /* Style the table container */
    .table-container {
        background-color: #f5f5f5;
        /* Light gray background color */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style the table header */
    .table thead {
        background-color: #17a2b8;
        /* Primary color for the header */
        color: white;
        font-weight: bold;
    }

    /* Style the table rows */
    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
        /* Alternate row background color */
    }

    /* Style the table cells */
    .table td,
    .table th {
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
        background-color: #0c7f99;
        /* Darker shade when hovered */
    }
</style>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php require './components/headersidebar.php' ?>
        <div class="col-md-15" style="margin: 20px 50px 0;">
            <h3>Teacher Log<a href="./add_teacher.php" class="btn btn-outline-primary btn-sm float-end">
                    <i class="fas fa-plus"></i><span class="button-with-icon">Add Teacher Here</span></a>
            </h3>
            <!-- Search Bar -->
            <div class="form-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Search">
            </div>
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Marital Status</th>
                            <!-- <th>Address</th> -->
                            <th>Gender</th>
                            <!-- <th>Religion</th> -->
                            <th>Subject</th>
                            <th>Joining Date</th>
                            <th>Salary</th>
                            <th>Post</th>
                            <th>Login ID</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="data-table">
                        <!-- Table data will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>


        <script>
        // Function to fetch data from the API
        function fetchData() {
            fetch('https://schoolapi-3yo0.onrender.com/teachers')
                .then(response => response.json())
                .then(data => {
                    const dataTable = document.getElementById('data-table');
                    // Clear existing table data
                    dataTable.innerHTML = '';

                    // Loop through the data and create table rows
                    data.forEach(item => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                        <td>${item.name}</td>
                        <td>${item.mobile}</td>
                        <td>${item.maritalStatus}</td>
                        <td>${item.gender}</td>                       
                        <td>${item.subject}</td>
                        <td>${item.joiningDate}</td>
                        <td>${item.salary}</td>
                        <td>${item.post}</td>
                        <td>${item.loginID}</td>
                        <td>${item.password}</td>
                        <td>
    <button class="view-details-button" onclick="viewDetails('${item.loginID}')">View Details</button>
</td>

                    `;
                        dataTable.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Call the fetchData function to populate the table
        fetchData();
        </script>
        <script>
        function viewDetails(loginID) {
            // Fetch data from the API using the loginID
            fetch(`https://schoolapi-3yo0.onrender.com/teachers/${loginID}`)
                .then(response => response.json())
                .then(data => {
                    // Redirect to the new page (singleteacher.php) and pass the data as a query parameter
                    const queryParams = new URLSearchParams({
                        teacherData: JSON.stringify(data)
                    });
                    window.location.href = `singleteacher.php?${queryParams.toString()}`;
                })
                .catch(error => console.error('Error fetching teacher data:', error));
        }
        </script>
        <script src="../assets/js/script.js"></script>

</body>

</html>