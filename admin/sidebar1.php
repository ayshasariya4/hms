<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar1.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                    <a href=#>H</a>
                </span>


                <div class="text logo-text">
                    <span class="name">HOSTel</span>
                    <span class="profession">Hello</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <a href="profile.php">
                        <i class='bx bx-happy-alt icon'></i>
                        <input type="text" placeholder="Profile">
                    </a>
                </li>



                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="register-student.php">
                            <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Register Student</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="view-students-acc.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">View Student Acc.</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="bookings.php">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Book Hostel</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="manage-students.php">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Hostel Students</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="manage-rooms.php">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Manage Rooms</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="manage-courses.php">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Manage Courses</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="view-queries.php">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">View Queries</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>



    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

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