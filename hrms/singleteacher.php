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
    <link href="../components/sidebar.css" rel="stylesheet">
    <link href="./singleteacher.css" rel="stylesheet">
    <style>
        .wrapper {
            background-color: gray;
        }

        /* Style for Monthly Visitor Counts and Top Reasons for Visit Cards */
        .card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #17a2b8;
            /* Header background color */
            color: #fff;
            /* Header text color */
            font-weight: bold;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        /* Style for Monthly Visitor Counts and Top Reasons for Visit Iframes */
        .canvas-wrapper {
            position: relative;
            overflow: hidden;
        }



        /* Style for the Note Input */
        .form-group {
            margin-top: 20px;
        }

        .form-control {
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 10px;
        }

        /* Add your additional styles here */

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .canvas-wrapper {
                padding-bottom: 100%;
                /* Full-width for small screens */
            }
        }


        /* Style the teacher card container */
        .card.card-style1 {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Style the teacher image */
        .image-container img {
            max-width: 100%;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Style teacher name and post */
        .text-white {
            color: #fff;
        }

        /* Style the info-box with teacher details */
        .info-box {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Style the leave request section */
        h2.text-danger {
            color: #ff5733;
            margin-top: 20px;
            font-weight: bold;
        }

        /* Style the leave request details */
        ul.mb-2 {
            list-style: none;
            margin: 0;
            padding: 0;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
        }

        section.mb-5 {
            background-color: #f5f5f5;
            /* Background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Style the approve and reject buttons */
        .btn-success,
        .btn-danger {
            font-size: 16px;
            margin-top: 10px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #4caf50;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #f44336;
            color: #fff;
        }

        /* Style the popup container */
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        /* Style the custom popup */
        .custom-popup {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Style the popup message */
        .popup-message {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Style the close popup button */
        .close-popup-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .close-popup-button:hover {
            background-color: #0056b3;
        }

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
    </style>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <scrip src="../assets/vendor/bootstrap/js/bootstrap.min.js">
        </script>
</head>

<body>
    <div class="wrapper">
        <?php require './components/headersidebar.php' ?>


        <section class="bg-light">
            <?php
            if (isset($_GET['teacherData'])) {
                $teacherData = json_decode($_GET['teacherData'], true);

                // Define a placeholder value for missing data
                $placeholder = "Null";

            ?>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-18 mb-4 mb-sm-5">
                            <div class="card card-style1 border-0">
                                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                    <div class="row align-items-center mainContainer">
                                        <div class=" " style="  background-color: #414142; padding:40px 0;  padding-bottom: 0;         border-radius: 8px;">
                                            <div class="image-container" style=" display: flex;  justify-content: center;">
                                                <img src="../mahendra.jpg " alt="Teacher Image Placeholder" width="80%">
                                            </div>
                                            <div class="  px-1-9 rounded" style="padding-top: 0.5rem; padding-bottom: 1.8rem;">
                                                <h3 class="h2 text-white"><?php echo $teacherData['name'] ?? $placeholder; ?></h3>
                                                <span class="text-warning"><?php echo $teacherData['post'] ?? $placeholder; ?></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 px-xl-10">
                                            <div class="info-box">
                                                <ul class="mb-1-6 pl-0" style="list-style: none;">
                                                    <li class=" mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Mobile:</span>
                                                        <?php echo $teacherData['mobile'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Address:</span>
                                                        <?php echo $teacherData['address'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Marital
                                                            Status:</span> <?php echo $teacherData['maritalStatus'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Gender:</span>
                                                        <?php echo $teacherData['gender'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Religion:</span>
                                                        <?php echo $teacherData['religion'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Subject:</span>
                                                        <?php echo $teacherData['subject'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Joining
                                                            Date:</span>
                                                        <?php echo date("d-m-Y", strtotime($teacherData['joiningDate'])) ?? $placeholder; ?>
                                                    </li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Salary:</span>
                                                        <?php echo $teacherData['salary'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">In
                                                            Time:</span> <?php echo $teacherData['inTime'] ?? $placeholder; ?></li>
                                                    <li class="mb-2 display-28"><span class=" display-26 text-danger me-2 font-weight-600">Out
                                                            Time:</span> <?php echo $teacherData['outTime'] ?? $placeholder; ?></li>
                                                    <!-- You can add more details here if needed -->
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- //===============================                       -->
                                        <div class="col-lg-12 px-xl-10">
                                            <h2 class="text-danger text-start font-weight-600">Leave Requests</h2>

                                            <!-- Loop through leaveRequests array and display each request -->
                                            <div class="content_scroll" style="overflow: auto; max-height: 380px;">
                                                <?php foreach ($teacherData['leaveRequests'] as $leaveRequest) { ?>
                                                    <ul class="mb-2 mb-xl-3">
                                                        <li>
                                                            <span class=" text-danger me-2 font-weight-600">Start Date:</span><?php echo $leaveRequest['startDate'] ?? $placeholder; ?>
                                                        </li>
                                                        <li>
                                                            <span class=" text-danger me-2 font-weight-600">End Date:</span><?php echo $leaveRequest['endDate'] ?? $placeholder; ?>
                                                        </li>
                                                        <li>
                                                            <span class=" text-danger me-2 font-weight-600">Reason:</span><?php echo $leaveRequest['reason'] ?? $placeholder; ?>
                                                        </li>
                                                        <li>
                                                            <span class=" text-danger me-2 font-weight-600">Leave Type:</span><?php echo $leaveRequest['ty'] ?? $placeholder; ?>
                                                        </li>
                                                        <li>
                                                            <span class=" display-26 text-danger me-2 font-weight-600">Response:</span>
                                                        </li>
                                                        <form class="leave-response-form mb-4 mt-1">
                                                            <button type="button" class="btn btn-success approve-leave" data-leave-id="<?php echo $leaveRequest['_id'] ?? $placeholder; ?>" data-login-id="<?php echo json_encode($teacherData['loginID']) ?? $placeholder; ?>">Approve</button>
                                                            <button type="button" class="btn btn-danger reject-leave" data-leave-id="<?php echo $leaveRequest['_id'] ?? $placeholder; ?>" data-login-id="<?php echo json_encode($teacherData['loginID']) ?? $placeholder; ?>">Reject</button>

                                                        </form>
                                                    </ul>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                echo "No teacher data provided.";
            }
            ?>

        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header">Monthly Time Per Day Counts <span>(Per Day)</span>
                        </div>
                        <div class="card-body ">
                            <p class="card-title"></p>
                            <div class="canvas-wrapper mt-2">
                                <iframe id="teacherChartIframe" frameborder="0" height="400px;" width="100%"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">Total Attendance <span>(Current year)</span>
                        </div>
                        <div class="card-body">
                            <p class="card-title"></p>
                            <div class="canvas-wrapper">
                                <iframe id="teacherStatusIframe" frameborder="0" height="400px;" width="100%"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mx-auto my-4" style="width: 927px;">
            <div class="container ">

                <div class="teacherButton">
                    <button type="button" class="btn  btn-lg" id="punchInButton">Punch In</button>
                    <button type="button" class="btn  btn-lg" id="punchOutButton">Punch Out</button>
                    <button type="button" class="btn  btn-lg" id="absentButton">Absent</button>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Note:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>


                </div>
            </div>
        </section>

        <div class="container">
            <div class="info-box">
                <div class="col-md-15" style="margin: 20px 50px 0;">
                    <h3>Total Salary:
                        <span class=" float-end button-with-icon"><?php echo $teacherData['salary'] ?? $placeholder; ?></span>
                    </h3>
                    <!-- Search Bar -->

                    <div class="table-container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>Attendace</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody id="data-table">
                                <!-- Table data will be inserted here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-container" style="display: none;">
        <div class="custom-popup">
            <div class="card card-style1">
                <div class="card-body p-3">
                    <h3 class=" popup-message h2 text-primary mb-3"></h3>
                    <!-- Add a <p> element with the class "popup-message" -->
                    <!-- <p class="popup-message"></p> -->
                    <button class="close-popup-button btn btn-primary">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Pass the teacher's login ID as a JavaScript variable
        const teacherLoginID = <?php echo json_encode($teacherData['loginID']) ?? $placeholder; ?>;

        // Get a reference to the first iframe element
        const iframe1 = document.getElementById('teacherChartIframe');

        // Construct the API endpoint URL with the teacherLoginID for the first iframe
        const apiUrl1 = `https://schoolapi-3yo0.onrender.com/teacher-chart/${teacherLoginID}`;

        // Set the src attribute of the first iframe
        iframe1.src = apiUrl1;

        // Pass the teacher's login ID as a JavaScript variable for the second iframe
        const teachersLoginID = <?php echo json_encode($teacherData['loginID']); ?>;

        // Get a reference to the second iframe element
        const iframe2 = document.getElementById('teacherStatusIframe');

        // Construct the API endpoint URL with the teacherLoginID for the second iframe
        const apiUrl2 = `https://schoolapi-3yo0.onrender.com/teacher-status-chart/${teachersLoginID}`;

        // Set the src attribute of the second iframe
        iframe2.src = apiUrl2;
    </script>

<script src="../assets/js/script.js"></script>
    <script>
        
        let hasPunchedIn = false;
        // let hasPunchedOut = false;
        let hasMarkedAbsent = false;

        // Get a reference to the punch-in, punch-out, and absent buttons by their IDs
        const punchInButton = document.getElementById('punchInButton');
        // const punchOutButton = document.getElementById('punchOutButton');
        const absentButton = document.getElementById('absentButton');

        // Function to show the popup with a message
        function showPopup(message) {
            const popupModal = document.querySelector('.popup-container');
            // Note: You can also use document.querySelector('.popup-container') if you prefer to target it globally.

            // Set the message content
            const popupMessage = popupModal.querySelector('.popup-message');
            popupMessage.textContent = message;

            // Display the popup
            popupModal.style.display = 'flex';

            // Close the popup when the close button is clicked
            const closeButton = popupModal.querySelector('.close-popup-button');
            closeButton.addEventListener('click', () => {
                popupModal.style.display = 'none';
                window.location.reload(); // This should reload the page
            });
        }



        // Check if the user has already punched in
        if (localStorage.getItem('hasPunchedIn') === 'true') {
            hasPunchedIn = true;
        }

        // Check if the user has already marked as absent
        if (localStorage.getItem('hasMarkedAbsent') === 'true') {
            hasMarkedAbsent = true;
        }

        // "Punch-In" Button Click Event
        punchInButton.addEventListener('click', () => {
            // Get the current date in yyyy-mm-dd format
            const currentDate = new Date().toISOString().split('T')[0];
            const loginID = <?php echo json_encode($teacherData['loginID']); ?>;

            // Check if the user has marked as absent for today with the current login ID
            const absentData = JSON.parse(localStorage.getItem('absentData')) || {};

            if (absentData[loginID] === currentDate) {
                showPopup('You have marked as absent for today. Cannot punch in.');
                return; // Exit the function to prevent making a punch-in API request
            }

            // Check if the user has already punched in for today with the current login ID
            const punchInData = JSON.parse(localStorage.getItem('punchInData')) || {};

            if (punchInData[loginID] === currentDate) {
                showPopup('You have already punched in for today.');
                return; // Exit the function
            }

            // Construct the API endpoint URL with the teacher data
            const apiUrl = `https://schoolapi-3yo0.onrender.com/punch-in/${loginID}`;

            // Make an API request to the constructed URL
            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        showPopup('Punch-in already recorded for today.');
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Log the API response for debugging
                    console.log('API response:', data);

                    // Update the punch-in status
                    hasPunchedIn = true;
                    localStorage.setItem('hasPunchedIn', 'true');

                    // Store the punch-in date
                    punchInData[loginID] = currentDate;
                    localStorage.setItem('punchInData', JSON.stringify(punchInData));

                    // Show the punch-in success popup
                    showPopup('Punch-in successful');
                })
                .catch(error => {
                    // Handle any errors that occur during the fetch
                    console.error('Error:', error);
                });
        });

        // "Punch-Out" Button Click Event
        punchOutButton.addEventListener('click', () => {
            const currentDate = new Date().toISOString().split('T')[0];
            const loginID = <?php echo json_encode($teacherData['loginID']); ?>;
            const punchInData = JSON.parse(localStorage.getItem('punchInData')) || {};

            if (punchInData[loginID] !== currentDate) {
                showPopup('You need to punch in first.');
                return; // Exit the function to prevent making a punch-out API request
            }

            const apiUrl = `https://schoolapi-3yo0.onrender.com/punch-out/${loginID}`;

            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        showPopup('Punch-out already recorded for today.');
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('API response:', data);
                    hasPunchedOut = true;
                    localStorage.setItem('hasPunchedOut', 'true');
                    showPopup('Punch-out successful');
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        // "Absent" Button Click Event
        absentButton.addEventListener('click', () => {
            // Get the current date in yyyy-mm-dd format
            const currentDate = new Date().toISOString().split('T')[0];
            const loginID = <?php echo json_encode($teacherData['loginID']); ?>;

            // Check if the user has already punched in for today with the current login ID
            const punchInData = JSON.parse(localStorage.getItem('punchInData')) || {};
            const punchOutData = JSON.parse(localStorage.getItem('punchOutData')) || {};

            if (punchInData[loginID] === currentDate && !punchOutData[loginID]) {
                showPopup('You have already punched in for today. Cannot mark as absent.');
                return; // Exit the function to prevent making an API request
            }

            // Check if the user has already marked as absent for today with the current login ID
            const absentData = JSON.parse(localStorage.getItem('absentData')) || {};

            if (absentData[loginID] === currentDate) {
                showPopup('You have already marked as absent for today.');
                return; // Exit the function to prevent making an API request
            }

            // Construct the API endpoint URL with the teacher data
            const apiUrl = `https://schoolapi-3yo0.onrender.com/absent/${loginID}`;

            // Make an API request to the constructed URL
            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Handle the API response data here
                    console.log('API response:', data);
                    // Update the marked date to today for the current login ID
                    absentData[loginID] = currentDate;
                    localStorage.setItem('absentData', JSON.stringify(absentData));
                    // Show the absent success popup
                    showPopup('Marked as absent for today');
                })
                .catch(error => {
                    // Handle any errors that occur during the fetch
                    console.error('Error:', error);
                });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const id = <?php echo json_encode($teacherData['loginID']); ?>;
            const approveButtons = document.querySelectorAll('.approve-leave');
            const rejectButtons = document.querySelectorAll('.reject-leave');

            // Check local storage for previously updated statuses
            approveButtons.forEach(button => {
                const leaveId = button.getAttribute('data-leave-id');
                const status = localStorage.getItem(`status_${leaveId}`);
                if (status) {
                    hideButtonsForLeaveId(leaveId);
                    hideButtonAndDisplayStatus(button, status);
                }
            });

            rejectButtons.forEach(button => {
                const leaveId = button.getAttribute('data-leave-id');
                const status = localStorage.getItem(`status_${leaveId}`);
                if (status) {
                    hideButtonsForLeaveId(leaveId);
                    hideButtonAndDisplayStatus(button, status);
                }
            });

            function hideButtonAndDisplayStatus(button, status) {
                // Check if the status message is already displayed before adding it
                const existingStatus = button.parentElement.querySelector('.status-message');
                if (!existingStatus) {
                    button.style.display = 'none';
                    const statusMessage = document.createElement('h1');
                    statusMessage.textContent = `Leave has been ${status}`;
                    statusMessage.style.color = status === 'Approved' ? 'green' : 'red';
                    statusMessage.style.fontSize = '24px';
                    statusMessage.classList.add('status-message'); // Add a class to identify the status message
                    button.parentElement.appendChild(statusMessage);
                }
            }

            function updateLeaveStatus(leaveId, loginId, status, button) {
                // Make an API request to update the status
                fetch(`https://schoolapi-3yo0.onrender.com/leave-request/${id}/${leaveId}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            loginId: loginId,
                            status: status
                        }),
                    })
                    .then(response => {
                        if (response.ok) {
                            // The status was updated successfully, hide both "Approved" and "Reject" buttons
                            hideButtonsForLeaveId(leaveId);
                            // Update the content in the DOM and local storage
                            const statusMessage = document.createElement('h1');
                            statusMessage.textContent = `Leave has been ${status}`;
                            statusMessage.style.color = status === 'Approved' ? 'green' : 'red';
                            statusMessage.style.fontSize = '24px';
                            statusMessage.classList.add('status-message');
                            localStorage.setItem(`status_${leaveId}`, status);
                            button.parentElement.replaceWith(statusMessage);
                        } else {
                            // Handle the error case
                            console.error('Failed to update leave status');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }

            function hideButtonsForLeaveId(leaveId) {
                // Hide both "Approve" and "Reject" buttons for the specified leave ID
                approveButtons.forEach(button => {
                    if (button.getAttribute('data-leave-id') === leaveId) {
                        button.style.display = 'none';
                    }
                });
                rejectButtons.forEach(button => {
                    if (button.getAttribute('data-leave-id') === leaveId) {
                        button.style.display = 'none';
                    }
                });
            }

            approveButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const leaveId = button.getAttribute('data-leave-id');
                    const loginId = button.getAttribute('data-login-id');
                    updateLeaveStatus(leaveId, loginId, 'Approved', button);
                });
            });

            rejectButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const leaveId = button.getAttribute('data-leave-id');
                    const loginId = button.getAttribute('data-login-id');
                    updateLeaveStatus(leaveId, loginId, 'Rejected', button);
                });
            });

        });

        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('name');

            // Check if there is a saved value in localStorage
            const savedName = localStorage.getItem('savedName');
            if (savedName) {
                nameInput.value = savedName;
            }

            // Listen for input changes and save the value in localStorage
            nameInput.addEventListener('input', function() {
                const value = nameInput.value;
                localStorage.setItem('savedName', value);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const id = <?php echo json_encode($teacherData['loginID']); ?>;

            function formatDate(date) {
                const year = date.getFullYear();
                const month = (date.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
                return `${year}/${month}`;
            }

            const currentDate = new Date();
            const currentYearMonth = formatDate(currentDate);

            function fetchData() {
                fetch(`https://schoolapi-3yo0.onrender.com/teacher-salary-history/${id}/${currentYearMonth}`)
                    .then(response => response.json())
                    .then(data => {
                        const dataTable = document.getElementById('data-table');
                        // Clear existing table data
                        dataTable.innerHTML = '';

                        // Loop through the data and create table rows
                        data.forEach(item => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                    <td>${item.month}</td>
                    <td>${item.attendence}</td>
                    <td>${item.salary}</td>
                    `;
                            dataTable.appendChild(row);
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }

            fetchData();
        });
    </script>
</body>

</html>