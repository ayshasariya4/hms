<!-- Sidebar navigation-->
<nav class="sidebar-nav">

    <ul id="sidebarnav">
    
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="dashboard.php"
        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
         class="hide-menu">Dashboard</span></a></li>

        <li class="list-divider"></li>

        <li class="nav-small-cap"><span class="hide-menu">Features</span></li>
                            
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="register-student.php"
        aria-expanded="false"><i class="fas fa-user-plus"></i><span
        class="hide-menu">Register Student</span></a></li>

        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="view-students-acc.php"
        aria-expanded="false"><i class="fas fa-user-circle"></i><span
        class="hide-menu">View Student Acc.</span></a></li>

        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="bookings.php"
        aria-expanded="false"><i class="fas fa-h-square"></i><span
        class="hide-menu">Book Hostel</span></a></li>

        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="manage-students.php"
        aria-expanded="false"><i class="fas fa-users"></i><span
        class="hide-menu">Hostel Students</span></a></li>

        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="manage-rooms.php"
        aria-expanded="false"><i class="fas fa-bed"></i><span
        class="hide-menu">Manage Rooms</span></a></li>

        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="manage-courses.php"
        aria-expanded="false"><i class="fas fa-book"></i><span
        class="hide-menu">Manage Courses</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="view-queries.php"
        aria-expanded="false"><i class="fas fa-paper-plane"></i><span
        class="hide-menu">View Queries</span></a></li>
                           
    </ul>
</nav>
<!-- End Sidebar navigation -->
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="home1.css" />

    <!----===== Boxicons CSS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
            <!--<img src="logo.png" alt="">-->
          </span>

                <div class="text logo-text">
                    <span class="name">Hostel</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="text" placeholder="Search..." />
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bar-chart-alt-2 icon"></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bell icon"></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-pie-chart-alt icon"></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-heart icon"></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-wallet icon"></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">Dashboard Sidebar</div>
    </section>

    <script>
        const body = document.querySelector("body"),
            sidebar = body.querySelector("nav"),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";
            }
        });
    </script>
</body>

</html>