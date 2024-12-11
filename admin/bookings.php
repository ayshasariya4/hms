<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();
    //code for registration
    if(isset($_POST['submit'])){
        $roomno=$_POST['room'];
        $seater=$_POST['seater'];
        $feespm=$_POST['fpm'];
        $foodstatus=$_POST['foodstatus'];
        $stayfrom=$_POST['stayf'];
        $duration=$_POST['duration'];
        $course=$_POST['course'];
        $regno=$_POST['regno'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $contactno=$_POST['contact'];
        $emailid=$_POST['email'];
        $emcntno=$_POST['econtact'];
        $gurname=$_POST['gname'];
        $gurrelation=$_POST['grelation'];
        $gurcntno=$_POST['gcontact'];
        $caddress=$_POST['address'];
        $ccity=$_POST['city'];
        $cpincode=$_POST['pincode'];
        $paddress=$_POST['paddress'];
        $pcity=$_POST['pcity'];
        $ppincode=$_POST['ppincode'];
        $query="INSERT into  registration(roomno,seater,feespm,foodstatus,stayfrom,duration,course,regno,firstName,middleName,lastName,gender,contactno,emailid,egycontactno,guardianName,guardianRelation,guardianContactno,corresAddress,corresCIty,corresPincode,pmntAddress,pmntCity,pmntPincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $mysqli->prepare($query);
        $rc=$stmt->bind_param('iiiisissssssisissississi',$roomno,$seater,$feespm,$foodstatus,$stayfrom,$duration,$course,$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$emcntno,$gurname,$gurrelation,$gurcntno,$caddress,$ccity,$cpincode,$paddress,$pcity,$ppincode);
        $stmt->execute();
        echo'<script>alert("Success: Booked!");
         window.location="bookings.php";
         </script>';
    }
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
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="register-student.css" rel="stylesheet">

    <script>
        function calcTotalFee(fee){
            let baseFee = parseInt(fee);
            let dr = parseInt(document.getElementById("duration").value);
            let fdFee = parseInt(document.getElementById("customRadio1").value);
            let totalFee = 0;
            console.log(baseFee);
            console.log(fdFee);
            console.log(dr);
            console.log(baseFee);


            if(document.getElementById("customRadio1").checked){
            totalFee = (baseFee+fdFee)*dr;
            }else{
            totalFee = (baseFee*dr);
            }
            document.getElementById("ta").value = totalFee;
        }

function AddVal(val){
    console.log(val)
    if(isNaN(parseInt($('#fpm').val()))){
        $('#fpm').val(0)
    }
    if (val==3000){
var sum = parseInt($('#fpm').val()) + 3000;
        
        $('#ta').val(sum)
        console.log(sum)
    }else{
        var sum = parseInt($('#fpm').val());
        
        $('#ta').val(sum)
    }

}
function changeTot(){
   
    if($('#customRadio1').is(':checked')){
        var sum = parseInt($('#fpm').val())+3000;
        
        $('#ta').val(sum)
        console.log('done')
    }else{
        var sum = parseInt($('#fpm').val());
        
        $('#ta').val(sum)
    }
    console.log(parseInt($('#fpm').val()))

}

    function getSeater(val) {
        $.ajax({
        type: "POST",
        url: "get-seater.php",
        data:'roomid='+val,
        success: function(data){
        //alert(data);
        $('#seater').val(data);
        }
        });

        $.ajax({
        type: "POST",
        url: "get-seater.php",
        data:'rid='+val,
        success: function(data){
        //alert(data);
        $('#fpm').val(data);
        }
        });
    }

    function getUserRegistered(val) {
        $.ajax({
        type: "POST",
        url: "get-user-reg.php",
        data:'regno='+val,
        dataType:'json',
        success: function(data){
        //alert(data);
        $('#fname').val(data.firstName);
        $('#mname').val(data.middleName);
        $('#lname').val(data.lastName);
        $('#email').val(data.email);
        $('#gender').val(data.gender);
        $('#contact').val(data.contact);
        $('#econtact').val(data.contact);
        $('#course').val(data.course);
        $('#gname').val(data.gname);
        $('#grelation').val(data.grelation);
        $('#gcontact').val(data.contact);

        }
        });

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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
 
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
      
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include 'sidebar1.php'?>
            </div>
            <!-- End Sidebar scroll-->
      
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
           
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
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

    <!-- Custom Ft. Script Lines -->
<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
    </script>
    
    <script>
        function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
        url: "check-availability.php",
        data:'roomno='+$("#room").val(),
        type: "POST",
        success:function(data){
            $("#room-availability-status").html(data);
            $("#loaderIcon").hide();
        },
            error:function (){}
            });
        }

        function MenuChange(){
            newValue=parseInt(document.formcheck.foodstatus.value.asInt);
            document.formcheck.ta.value=newvalue;
        }
    </script>


    <script type="text/javascript">

    $(document).ready(function() {
        $('#duration').keyup(function(){
            var fetch_dbid = $(this).val();
            $.ajax({
            type:'POST',
            url :"ins-amt.php?action=userid",
            data :{userinfo:fetch_dbid},
            success:function(data){
            $('.result').val(data);
            }
            });
            

    })});
    </script>

 <!----===== Iconscout CSS ===== -->
 <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
 <link rel="stylesheet" href="bookings.css">
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
                        <label>Room No.</label>
                        <select  name="room" id="room" onChange="getSeater(this.value);" onBlur="checkAvailability()" required id="inlineFormCustomSelect">
                                            <option selected>Select...</option>
                                            <?php $query ="SELECT * FROM rooms";
                                            $stmt2 = $mysqli->prepare($query);
                                            $stmt2->execute();
                                            $res=$stmt2->get_result();
                                            while($row=$res->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $row->room_no;?>"> <?php echo $row->room_no;?></option>
                                            <?php } ?>
                                        </select>
                                        <span id="room-availability-status" style="font-size:12px;"></span>
                    </div>
                    <div class="input-field">
                        <label>Start Date</label>
                        <input type="date" placeholder="Start date" name="stayf" id="stayf" required>
                    </div>
                    <div class="input-field">
                        <label>No. of Beds</label>
                        <input type="text" placeholder="No. of beds" name="seater" id="seater" required>
                    </div>
                    <div class="input-field">
                        <label>Total Duration</label>
                        <select  id="duration" name="duration">
                                            <option selected>Choose...</option>
                                            <option value="1">One Month</option>
                                            <option value="2">Two Month</option>
                                            <option value="3">Three Month</option>
                                            <option value="4">Four Month</option>
                                            <option value="5">Five Month</option>
                                            <option value="6">Six Month</option>
                                            <option value="7">Seven Month</option>
                                            <option value="8">Eight Month</option>
                                            <option value="9">Nine Month</option>
                                            <option value="10">Ten Month</option>
                                            <option value="11">Eleven Month</option>
                                            <option value="12">Twelve Month</option>
                                        </select>
                    </div>
                    <div class="input-field">
                        <label>Food Status</label>
                        <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" value="3000" name="foodstatus" onChange="AddVal(this.value);" 
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Required <code>Extra 3000 Per Month</code></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" value="0" name="foodstatus" onChange="AddVal(this.value);" 
                                        class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio2">Not Required</label>
                                </div>
                    </div>

                    <div class="input-field">
                        <label>Fees</label>
                        <input type="number" placeholder="Your Fees" name="fpm" id="fpm" onchange="calcTotalFee(this.value)" value="" required>
                    </div>
                    <div class="input-field">
                        <label> Total Amount</label>
                        <input type="number" placeholder="Total Amount" name="ta" id="ta" required>
                    </div>
                <div class="details ID">
                    <span class="title">Students Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Registration No.</label>
                            <select class="custom-select mr-sm-2" name="regno" id="regno" onChange="getUserRegistered(this.value);" required id="inlineFormCustomSelect">
                                            <option selected>Select...</option>
                                            <?php $query ="SELECT * FROM userregistration";
                                            $stmt2 = $mysqli->prepare($query);
                                            $stmt2->execute();
                                            $res=$stmt2->get_result();
                                            while($row=$res->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $row->regNo;?>"> <?php echo $row->regNo;?></option>
                                            <?php } ?>
                                        </select>
                                        <span id="room-availability-status" style="font-size:12px;"></span>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First Name" name="fname" id="fname" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter Middle Name" name="mname" id="mname" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name" name="lname" id="lname" required>
                        </div>

                        <div class="input-field">
                           <label>Email</label>
                          <input type="text" placeholder="Enter your email" name="email" id="email" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select id="gender" name="gender" class="form-control" required="required">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                        </div>

                        <div class="input-field">
                            <label>Contact No.</label>
                            <input type="tel" placeholder="Enter your Contact No." name="contact" id="contact" maxlength="10" minlength="10" required>
                        </div>

                        <div class="input-field">
                            <label>Emergency Contact No.</label>
                            <input type="tel" placeholder="Enter your Contact No." name="econtact" id="econtact" maxlength="10" minlength="10" required>
                        </div>

                      
                    
                         <div class="input-field">
                        <label>Course</label>
                        <select id="course" name="course">
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
                            <label>Guardian's Contact No.</label>
                            <input type="tel" placeholder="Enter your Contact No." name="gcontact" id="econtact" maxlength="10" minlength="10" required>
                        </div>
                       
                      <div class="input-field">
                        <label>Address</label>
                        <input type="text" placeholder="Enter Address" name="address" id="address" required>
                       </div>

                      <div class="input-field">
                        <label>City</label>
                        <input type="text" placeholder="Enter Address" name="city" id="city" required>
                       </div>

                      <div class="input-field">
                        <label>Pincode</label>
                        <input type="number" placeholder="Enter Pincode" name="pincode" id="pincode" required>
                      </div>

                      <h6 class="card-subtitle"><code>Ignore this CHECK BOX if you have different permanent address</code> </h6>
                                    <fieldset class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="adcheck"> My permanent address is same as above!
                                        </label>
                                    </fieldset>

                      <div class="input-field">
                        <label>Permanent Address</label>
                        <input type="text" placeholder="Enter Address" name="paddress" id="paddress" required>
                      </div>

                     <div class="input-field">
                        <label>City</label>
                        <input type="text" placeholder="Enter Address" name="pcity" id="pcity" required>
                     </div>

                      <div class="input-field">
                        <label>Pincode</label>
                        <input type="number" placeholder="Enter Pincode" name="ppincode" id="ppincode" required>
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




</body>

</html>