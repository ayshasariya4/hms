<!DOCTYPE html>
<html>
<?php
    session_start();
    include('../includes/dbconn.php');
    if(isset($_POST['submit']))
    {
    $regno=$_POST['regno'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $contactno=$_POST['contact'];
    $emailid=$_POST['email'];
   

    $dob=$_POST['dob'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $grelation=$_POST['grelation'];
    $gname=$_POST['gname'];


  
    $query="INSERT into userRegistration(regNo,firstName,middleName,lastName,gender,contactNo,email,dob,course,address,gname,grelation) values(?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('sssssissssss',$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$dob,$course,$address,$gname,$grelation);
    $stmt->execute();
        echo'<script>alert("Student has been Registered!");
        window.location="register.php";
        </script>';
        
    }
?>
<?php
include 'studentsidebar.php'
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student-register.css?1422585377">


    <script type="text/javascript">  
    function checkIfValidIndianMobileNumber(str) {
  // Regular expression to check if string is a Indian mobile number
    const regexExp = /^[6-9]\d{9}$/gi;

    return regexExp.test(str);
    }

    // Use the function
    checkIfValidIndianMobileNumber("9207323601"); // true
    checkIfValidIndianMobileNumber("92073236011"); // false
    </script>  
</head>

<body>
<script>
    function checkAvailability() {

        $("#loaderIcon").show();
        jQuery.ajax({
        url: "check-availability.php",
        data:'emailid='+$("#email").val(),
        type: "POST",
        success:function(data){
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
            },
                error:function ()
            {
                event.preventDefault();
                alert('error');
            }
        });
    }
    </script>



     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="register-student.css">


    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form method="POST" name="registration" onSubmit="return valid();">
            <div class="form first">
                <div class="details personal">
                   

                    <div class="fields">
                        <div class="input-field">
                            <label>Registration No.</label>
                            <input type="text" placeholder="Enter Registration Number" name="regno" id="regno" required>
                        </div>
                        
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First name" name="fname" id="fname" required>
                        </div>
                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter Middle name" name="mname" id="mname" required>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your name" name="lname" id="lname" required>
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select  id="gender" name="gender" required="required">
                                                <option selected>Choose...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" name="contact" id="contact" minlength="10" maxlength="10" required>
                        </div>


                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" name="email" id="email" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="dob" id="dob"  required>
                        </div>

                        
                        <div class="input-field">
                            <label>Course</label>
                            <select class="custom-select mr-sm-2" id="course" name="course">
                                            <option selected>Please Select...</option>
                                            <?php $query ="SELECT * FROM courses";
                                                $stmt2 = $mysqli->prepare($query);
                                                $stmt2->execute();
                                                $res=$stmt2->get_result();
                                                while($row=$res->fetch_object())
                                                {
                                            ?>
                                            <option value="<?php echo $row->course_fn;?>"><?php echo $row->course_fn;?>&nbsp;&nbsp;(<?php echo $row->course_sn;?>)</option>
                                            <?php } ?>
                                        </select>
                        </div>

                        <div class="input-field">
                            <label>Guardian's Name</label>
                            <input type="text" placeholder="Enter Guardian's name" name="gname" id="gname" required>
                        </div>
                        <div class="input-field">
                            <label>Relation</label>
                            <input type="text" placeholder="Enter Relation" name="grelation" id="grelation" required>
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter Address" name="address" id="address" required>
                        </div>
                    </div>
                </div>
                
                   

              
                

                   
            

                    <div class="buttons">
                      
                        
                        <button class="sumbit" name="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="register-student.js"></script>


            <br><br>
        </form>
    </div>

</body>

</html>