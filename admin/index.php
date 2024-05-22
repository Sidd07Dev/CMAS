<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMAS- Dashboard</title>
    <meta name="description" content="Cmas mark automation system">
    <meta name="keywords" content="cmas mark entry">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <!-- Bootstrap CSS -->
    <link id="bootstrap-theme" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .main {
            background-image: none;
        }

        #loading {
            position: fixed;
            height: 100vh;
            width: 100vw;
            background: #fff url('https://mir-s3-cdn-cf.behance.net/project_modules/disp/ccb15d13765711.56277de03b749.gif') no-repeat center;
            z-index: 99999;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: #f8f9fa;
            transition: transform 0.3s ease; /* Added transition for smooth animation */
            width: 250px;
            transform: translateX(-100%); /* Initially hide the sidebar */
        }

        /* Display sidebar on all devices */
        @media (max-width: 10000px) {
            .sidebar.active {
                transform: translateX(0%);
            }

            .sidebar .overlay {
                display: block;
            }
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99;
        }
        
        .profile-content {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .profile-content img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-details {
            flex-grow: 1;
        }
        
        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .logo-details {
            font-size: 29px;
            padding: 20px;
        }

        .nav-link a {
            text-decoration: none;
        }

        /* Animation for sidebar */
        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0%);
            }
        }

        @keyframes slideOutToLeft {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Dark mode */
        body.dark-mode {
            background-color: #333;
            color: #fff;
        }

        body.dark-mode .sidebar {
            background-color: #444;
        }

        body.dark-mode .nav-link a {
            color: #fff;
        }
    </style>
</head>

<body onload="LoadingDisable()">
    
    <div id="loading"></div>
    <div class="overlay" onclick="closeSidebar()"></div>
    <nav class="sidebar">
        <!-- Close icon -->
        <i class="bx bx-x close-icon" onclick="closeSidebar()"></i>
        <div class="logo-details"><i class='bx bxs-school'></i>
            <span class="logo_name">CMAS</span>
        </div>
        <!-- Sidebar content -->
        <div class="profile-content">
            <div class="profile-details">
                <img src="DefaultProfile.png" alt="profile">
                <div>
                    <div class="profile_name">GUEST USER</div>
                    <div class="job">Admin</div>
                </div>
            </div>
            <i class='bx bx-log-out-circle '></i>
        </div>
        <ul class="nav-link">
            <li><a href="index.php"><i class='bx bxs-grid-alt'></i><span class="link_name">Dashboard</span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-book-reader'></i>
                    <span class="link_name">Courses</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">BED</a></li>
                    <li><a class="dropdown-item" href="UG.php">UG</a></li>
                    <li><a class="dropdown-item" href="PG.php">PG</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-message-alt-check'></i>
                    <span class="link_name">Mark Entry</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item" href="#">BED</a></li>
                    <li><a class="dropdown-item" href="insert.php">UG</a></li>
                    <li><a class="dropdown-item" href="insert2.php">PG</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <main>
        <!-- Content here -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-outline-dark" onclick="toggleSidebar()"><i class='bx bx-menu'></i></button>
                    <button class="btn btn-outline-dark"  onclick="toggleColorMode()"><i class='bx bxs-moon'></i></button> <!-- Added button for toggling color mode -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="Form-Container">
                        <div class="Form-main">
                            <marquee behavior="" direction="left">
                                <h1><b>WELCOME TO CMAS ADMIN PANEL</b></h1>
                            </marquee>
                            <center>
                                <u style="color:red;">
                                    <h3>Instructions</h3>
                                </u>
                            </center>
                            <h3>Follow below steps:-</h3>
                            <ol>
                                <li>
                                    <p>Click on Mark entry section.</p>
                                </li>
                                <li>Click on sub section like..( UG,PG etc)</li>
                                <li>Now choose Subject and Paper that you want to insert the results.</li>
                                <li>After clicking submit button enter your UID and Password provide by adminstraton then click submit button</li>
                                <li>After verifying now insert all students results at a time </li>
                            </ol>
                            <h4>Important:-</h4>
                            <p>Don't share your UID and Password, may be misused... </p><br>
                            <p>We will track all changes done by which user..</p><br>
                            <h2>If you encounter any issues, please contact our team at <a href="mailto:support@cmas.co.in">support@cmas.co.in</a> </h2>
                            <h2>Visit CMAS Beta Version at <a href="https://betatesting.cmas.co.in/">CMAS(Beta Version)</a> </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var preloader = document.getElementById('loading');

        function LoadingDisable() {
            preloader.style.display = "none";
        }

        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('active');
        }

        function closeSidebar() {
            document.querySelector('.sidebar').classList.remove('active');
        }

        function toggleColorMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>

</html>
