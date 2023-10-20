<!-- sidebar navigation component -->
<!-- Include this CSS within your HTML or in an external CSS file -->
<style>
    /* Style the Back button */
    #backButton {
        background-color: #17A2B8; /* Button background color */
        color: #fff; /* Text color */
        border: 1px solid #17A2B8; /* Button border */
        border-radius: 5px; /* Rounded corners */
        padding: 5px 10px; /* Padding around the text */
        font-size: 14px; /* Font size */
        margin-left: 30px;
    }

    /* Hover effect for the button */
    #backButton:hover {
        background-color: #0056b3; /* Button background color on hover */
        border: 1px solid #0056b3; /* Button border on hover */
    }
</style>

<nav id="sidebar" class="active">
    <div class="sidebar-header text-center">
        <a class="navbar-brand" href="dashboard">
            <h3 class="text-info fw-bolder pt-2 mb-0">MaaBharti</h3>
        </a>
    </div>
    <ul class="list-unstyled components text-secondary">
        <li>
            <a href="./hrmsdashboard.php"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a href="./StaffManagement.php"><i class="fas fa-book"></i> Staff Management</a>
        </li>
        <li>
            <a href="./vendermange.php"><i class="fas fa-align-center"></i> Vender Management</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-align-center"></i> Cleaners Management</a>
        </li>
    </ul>
</nav>
<!-- end of sidebar component -->

<div id="body" class="active">
    <!-- navbar navigation component -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <button type="button" id="sidebarCollapse" class="btn btn-light">
            <i class="fas fa-bars"></i><span></span>
        </button>
        <button type="button" id="backButton" class="btn btn-light">
            <i class="fas fa-arrow-left"></i> Back
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
                                    <a href="./hrmsdashboard.php" target="_blank" class="dropdown-item"><i class="fas fa-user-clock"></i> Dashboard</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="./StaffManagement.php" class="dropdown-item"><i class="fas fa-align-center"></i> Staff Management</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="#" class="dropdown-item"><i class="fas fa-edit"></i> Vender Management</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="#" class="dropdown-item"><i class="fas fa-edit"></i> Cleaners Management</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Back button element
    const backButton = document.getElementById('backButton');

    // Add an event listener for the back button
    backButton.addEventListener('click', function() {
        // Handle what should happen when the back button is clicked.
        // You can use window.history.back() to go back to the previous page.
        window.history.back();
    });
});

    </script>
