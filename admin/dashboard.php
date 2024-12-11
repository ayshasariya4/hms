<?php
session_start();
include('../includes/dbconn.php');
include('../includes/check-login.php');
check_login();

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
  <title>Hostel Management System</title>
  <!-- Custom CSS -->
  <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
  <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
  <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../dist/css/style.min.css" rel="stylesheet">
  <link href="dashboard.css" rel="stylesheet">

</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->

  <!-- ============================================================== -->
  <!-- End Topbar header -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->

  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" data-sidebarbg="skin6">
    <?php include 'sidebar1.php' ?>
  </div>
  <!-- End Sidebar scroll-->

  <!-- ============================================================== -->
  <!-- End Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->

    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->

    <!-- *************************************************************** -->
    <!-- End First Cards -->
    <!-- *************************************************************** -->



    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->

    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- apps -->
  <!-- apps -->
  <script src="../dist/js/app-style-switcher.js"></script>
  <script src="../dist/js/feather.min.js"></script>
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
  <!--This page JavaScript -->
  <script src="../assets/extra-libs/c3/d3.min.js"></script>
  <script src="../assets/extra-libs/c3/c3.min.js"></script>
  <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
  <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
  <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>

  <div id="root">
    <div class="container pt-5">
      <div class="row align-items-stretch">
        <div class="c-dashboardInfo col-lg-3 col-md-6">
          <div class="wrap">
            <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Registered Students
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
              </svg>
            </h4><span class="hind-font caption-12 c-dashboardInfo__count"><?php include 'counters/student-count.php' ?></span>
          </div>
        </div>
        <div class="c-dashboardInfo col-lg-3 col-md-6">
          <div class="wrap">
            <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Rooms
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
              </svg>
            </h4><span class="hind-font caption-12 c-dashboardInfo__count"><?php include 'counters/room-count.php' ?></span><span class="hind-font caption-12 c-dashboardInfo__subInfo"></span>
          </div>
        </div>
        <div class="c-dashboardInfo col-lg-3 col-md-6">
          <div class="wrap">
            <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Booked Rooms
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
              </svg>
            </h4><span class="hind-font caption-12 c-dashboardInfo__count"><?php include 'counters/booked-count.php' ?></span>
          </div>
        </div>
        <div class="c-dashboardInfo col-lg-3 col-md-6">
          <div class="wrap">
            <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Featured Course
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
              </svg>
            </h4><span class="hind-font caption-12 c-dashboardInfo__count"><?php include 'counters/course-count.php' ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>