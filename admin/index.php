<?php
session_start();
include('../includes/dbconn.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $stmt = $mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
    $stmt->bind_param('sss', $username, $username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $username, $password, $id);
    $rs = $stmt->fetch();
    $_SESSION['id'] = $id;
    $uip = $_SERVER['REMOTE_ADDR'];
    $ldate = date('d/m/Y h:i:s', time());
    if ($rs) {
        header("location:dashboard.php");
    } else {
        echo "<script>alert('Invalid Username/Email or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html dir="ltr">
<?php include 'studentsidebar.php'; ?>
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
    <link href="../dist/css/login.css" rel="stylesheet">

    <link href="index.css" rel="stylesheet">
    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.cpassword.value) {
                alert("Password and Re-Type Password Field do not match !!");
                document.registration.cpassword.focus();
                return false;
            }
            return true;
        }
    </script>

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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
       
        
<div class="container">
                            <form  method="POST">
                                
                             

                                 
                                        <div class="fields">
                                            <label for="uname">Email or Username</label><br>
                                            <input class="input-field" name="username" id="uname" type="text" placeholder="Email or Username" required>
                                        </div>
                                    
                                    
                                        <div class="fields">
                                            <label for="pwd">Password</label><br>
                                            <input class="input-field" name="password" id="pwd" type="password" placeholder="Enter your password" required>
                                        </div>
                                    
                                    <div class="submit">
                                        <button type="submit" name="login" class="btn btn-block btn-danger">LOGIN</button>
                                    </div>
                                  
                                   
                               
                            </form>
</div>
                       
            
        <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            $(".preloader ").fadeOut();
        </script>



    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
   

</body>

</html>