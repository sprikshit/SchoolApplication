<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">   
    <link href="./singleteacher.css" rel="stylesheet">   
    <link href="../../components/sidebar.css" rel="stylesheet">   
                 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <scrip src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">
<?php require '../../components/headersidebar.php'?>


<section class="bg-light">
<?php
if (isset($_GET['teacherData'])) {
    $teacherData = json_decode($_GET['teacherData'], true);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-18 mb-4 mb-sm-5">
            <div class="card card-style1 border-0">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    <div class="row align-items-center mainContainer">
                        <div class="col-lg-12">
                              <div class="image-container">
                                <img src="../../mahendra.jpg " alt="Teacher Image Placeholder"  width="290" height="300">
                            </div>                            
                            <div class="bg-secondary  py-1-9 px-1-9 rounded">
                                <h3 class="h2 text-white"><?php echo $teacherData['name']; ?></h3>
                                <span class="text-primary"><?php echo $teacherData['post']; ?></span>
                            </div>
                        </div>
                        <div class="col-lg-12 px-xl-10">
                            <ul class="mb-1-6">
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Mobile:</span> <?php echo $teacherData['mobile']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Address:</span> <?php echo $teacherData['address']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Marital Status:</span> <?php echo $teacherData['maritalStatus']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Gender:</span> <?php echo $teacherData['gender']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Religion:</span> <?php echo $teacherData['religion']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Subject:</span> <?php echo $teacherData['subject']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Joining Date:</span> <?php echo date("d-m-Y", strtotime($teacherData['joiningDate'])); ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Salary:</span> <?php echo $teacherData['salary']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">In Time:</span> <?php echo $teacherData['inTime']; ?></li>
                                <li class="mb-2 mb-xl-3 display-28"><span class=" display-26 text-secondary me-2 font-weight-600">Out Time:</span> <?php echo $teacherData['outTime']; ?></li>
                                <!-- You can add more details here if needed -->
                            </ul>
                        </div>                        
                        <div class="">
                                <div class="box">
                                <span class="border border-primary"></span>

                                    <h3 class="h2 text-white mb-0"></h3>
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
                <div class="card-header">Monthly Visitor Counts <span class="text-muted">(Current Day)</span></div>
                <div class="card-body ">
                    <p class="card-title"></p>
                    <div class="canvas-wrapper">
                <iframe id="teacherChartIframe" frameborder="0" height="400px;" width="100%"></iframe>
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
                    <iframe id="teacherStatusIframe" frameborder="0" height="400px;" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="mx-auto" style="width: 927px;">
<div class="container ">

<div class="teacherButton">
<button type="button" class="btn btn-primary btn-lg" id="punchInButton">Punch In</button>
<button type="button" class="btn btn-secondary btn-lg" id="punchOutButton">Punch Out</button>
<button type="button" class="btn btn-success btn-lg" id="absentButton">Absent</button>
</div>
<div class="card-body">
        <div class="form-group">
            <label for="name">Note:</label>
            <input type="text" class="form-control" id="name" name="name" required>  
         </div>
</div>
</div>
</section>

</div>

<div id="popup-modal" class="modal">
  <div class="modal-content">
    <span class="close-button">&times;</span>
    <p id="popup-message"></p>
  </div>
</div>

<script>
    // Pass the teacher's login ID as a JavaScript variable
    const teacherLoginID = <?php echo json_encode($teacherData['loginID']); ?>;

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
<script src="../../assets/js/script.js"></script>
<script>
    // Create a variable to track punch-in status
// Initialize variables to track the status of each action
// let hasPunchedIn = false;
// let hasPunchedOut = false;
let hasMarkedAbsent = false;

// Get a reference to the punch-in, punch-out, and absent buttons by their IDs
// const punchInButton = document.getElementById('punchInButton');
// const punchOutButton = document.getElementById('punchOutButton');
const absentButton = document.getElementById('absentButton');

// Function to show the popup with a message
function showPopup(message) {
  const popupModal = document.getElementById('popup-modal');
  const popupMessage = document.getElementById('popup-message');

  // Set the message content
  popupMessage.textContent = message;

  // Display the popup
  popupModal.style.display = 'block';

  // Close the popup when the close button is clicked
  const closeButton = document.querySelector('.close-button');
  closeButton.addEventListener('click', () => {
    popupModal.style.display = 'none';
  });
}

// // Check if the user has already punched in
// if (localStorage.getItem('hasPunchedIn') === 'true') {
//   hasPunchedIn = true;
// }

// // Check if the user has already punched out
// if (localStorage.getItem('hasPunchedOut') === 'true') {
//   hasPunchedOut = true;
// }

// Check if the user has already marked as absent
if (localStorage.getItem('hasMarkedAbsent') === 'true') {
  hasMarkedAbsent = true;
}

// "Punch-In" Button Click Event
punchInButton.addEventListener('click', () => {

  // Construct the API endpoint URL with the teacher data
  const loginID = <?php echo json_encode($teacherData['loginID']); ?>;
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

      // Check if the API response contains an error message
      if (data.error  == "Punch-in already recorded for today") {
        console.log('Received error message from API:', data.error);
        showPopup('Punch-in already recorded for today.');
      } else {
       // Update the punch-in status
        hasPunchedIn = true;
        localStorage.setItem('hasPunchedIn', 'true');
       // Show the punch-in success popup
        showPopup('Punch-in successful');
      }
    })
    .catch(error => {
      // Handle any errors that occur during the fetch
      console.error('Error:', error);
    });
});


// "Punch-Out" Button Click Event
punchOutButton.addEventListener('click', () => {

  // Check if the user has punched in before punching out
  if (!hasPunchedIn) {
    showPopup('You need to punch in first.');
    return; // Exit the function to prevent making an API request
  }

  // Construct the API endpoint URL with the teacher data
  const loginID = <?php echo json_encode($teacherData['loginID']); ?>;
  const apiUrl = `https://schoolapi-3yo0.onrender.com/punch-out/${loginID}`;

  // Make an API request to the constructed URL
  fetch(apiUrl)
    .then(response => {
      if (!response.ok) {
        showPopup('Punch-OUT already recorded for today.')
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      // Handle the API response data here
      console.log('API response:', data);
      // Update the punch-out status
      hasPunchedOut = true;
      localStorage.setItem('hasPunchedOut', 'true');
      // Show the punch-out success popup
      showPopup('Punch-out successful');
    })
    .catch(error => {
      // Handle any errors that occur during the fetch
      console.error('Error:', error);
    });
});

// "Absent" Button Click Event
absentButton.addEventListener('click', () => {
  // Get the current date in yyyy-mm-dd format
  const currentDate = new Date().toISOString().split('T')[0];

  // Check if the user has already marked as absent for today
  const markedDate = localStorage.getItem('markedAbsentDate');
  if (markedDate === currentDate) {
    showPopup('You have already marked as absent for today.');
    return; // Exit the function to prevent making an API request
  }

  // Construct the API endpoint URL with the teacher data
  const loginID = <?php echo json_encode($teacherData['loginID']); ?>; 
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
      // Update the marked date to today
      localStorage.setItem('markedAbsentDate', currentDate);
      // Show the absent success popup
      showPopup('Marked as absent for today');
    })
    .catch(error => {
      // Handle any errors that occur during the fetch
      console.error('Error:', error);
    });
});




</script>
</body>
</html>


