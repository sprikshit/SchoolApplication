<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your background image URL and set its properties */
        body {
            background-image: url('./assets/images/school.jpg'); /* Replace 'your-background-image.jpg' with your image file path */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            height: 100vh; /* This ensures the background covers the entire viewport height */
        }
        
        /* Style for the card */
        
        .card-header{
            background: #d8ac81 ;
        }

        .login{
            background:#224f6a ;
            color:white ;
        }
    </style>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Admin Login</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == 1) {
                            echo '<p class="text-danger text-center">Invalid username or password. Please try again.</p>';
                        }
                        ?>
                        <form method="post" action="login_process.php">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn login">Login</button>
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
</body>
</html>
