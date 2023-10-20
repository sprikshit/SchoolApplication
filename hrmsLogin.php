<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your background image URL and set its properties */
        body {
            background-image: url('./assets/images/school.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            height: 100vh;
        }

        /* Style for the card */
        .card-header {
            background: #d8ac81;
        }

        .login {
            background: #224f6a;
            color: white;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            justify-content: center;
            width: fit-content;
            margin: auto;
        }

        input {
            padding: 0.6rem;
        }

        .btn {
            padding: 0.5rem 0.8rem;
            background-color: blue;
            outline: none;
            border: none;
            cursor: pointer;
        }

        .otpverify {
            display: none;
            flex-direction: column; /* To stack OTP input and verify button vertically */
            align-items: center;
            gap: 1rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">HRMS Login</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo '<p class="text-danger text-center">Invalid username or password. Please try again.</p>';
                        }
                        ?>
                        <form id="loginForm">
                            <div class="form">
                                <label for="Pin">PIN:</label>
                                <input type="number" id="pin" placeholder="Enter Your PIN...">
                                <div class="otpverify">
                                    <input type="text" id="otp_inp" placeholder="Enter the OTP sent to your Email...">
                                    <button class="btn" id="otp-btn">Verify</button>
                                </div>
                                <button type="button" onclick="sendOTP()" class="btn" id="send-otp-btn">Send OTP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const correctPIN = '1234';
        

        function sendOTP() {
            const otpverify = document.getElementsByClassName('otpverify')[0];
            const pinInput = document.getElementById('pin');
            const pin = pinInput.value;

            if (pin === correctPIN) {
                const senderEmail = 'namanvijayvargiya007@gmail.com';
                const recipientEmail = 'sprikshit0610@gmail.com';


                
                $.ajax({
                    type: 'POST',
                    url: 'send_otp.php',
                    data: { senderEmail: senderEmail, recipientEmail: recipientEmail, },
                    success: function(response) {
                        console.log('AJAX request success:', response);

                        if (response === 'success') {
                            alert("OTP sent successfully");
                            otpverify.style.display = 'flex'; 
                            const otp_inp = document.getElementById('otp_inp');
                            const otp_btn = document.getElementById('otp-btn');
                        } else {
                            alert('Error Sending OTP. Please try again.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('AJAX request error:', status, error);
                        alert('Error sending OTP. Please try again.');
                    }
                });
            } 
        }

        document.getElementById('pin').addEventListener('input', function() {
            const pinInput = document.getElementById('pin');
            const sendOTPButton = document.getElementById('send-otp-btn');
            const otpVerify = document.querySelector('.otpverify');

            if (pinInput.value !== '') {
                sendOTPButton.disabled = false;
            } else {
                sendOTPButton.disabled = true;
            }
        });

        document.getElementById('otp-btn').addEventListener('click', function() {
    const enteredOTP = document.getElementById('otp_inp').value;
    const attemptsLeft = 3; // Adjust this to match the number of attempts you set in the PHP code

    if (attemptsLeft > 0) {
        // Send the entered OTP to the server for verification
        $.ajax({
            type: 'POST',
            url: 'verify_otp.php', // Create a PHP file for OTP verification
            data: { enteredOTP: enteredOTP },
            success: function(response) {
                if (response === 'success') {
                    // Redirect to the next page since OTP is verified
                    window.location.href = 'hrmsdasboard.php';
                } else {
                    alert('Invalid OTP. Please try again.');
                    attemptsLeft--;
                    if (attemptsLeft === 0) {
                        alert('You have exhausted your OTP verification attempts.');
                        // Optionally, you can disable the verification button here.
                    }
                }
            },
            error: function(xhr, status, error) {
                console.log('AJAX request error:', status, error);
                alert('Error verifying OTP. Please try again.');
            }
        });
    } else {
        alert('You have exhausted your OTP verification attempts.');
        // Optionally, you can disable the verification button here.
    }
});




     
    </script>
</body>
</html>
