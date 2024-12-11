<!DOCTYPE html>
<html>
<?php //include 'connection.php';
session_start();
include('../includes/dbconn.php');
if (isset($_POST['clicked'])) {
    // mysqli_select_db($conn, 'hmss');


    $namee = $_POST["namee"];
    $regno = $_POST["regno"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $phone = $_POST["phone"];
    $queryy = $_POST["queryy"];

    $query = "INSERT INTO querybox (namee, regno,email, course,phone,queryy) 
    VALUES (?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param("ssssis", $namee, $regno, $email, $course, $phone, $queryy);
    $stmt->execute();
    echo '<script>alert("Query submitted!");
    window.location="querybox.php";
    </script>';
}



?>
<?php include 'studentsidebar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="querybox.css">
</head>

<body>
   
<div class="querytitle">
        <h3>Drop your queries!</h3>
    </div>
    
    <div class="querybox">
        <form action="" method="POST">
            <input id="name" type="text" name="namee" placeholder="Name"><br><br>
            <input id="regno" type="text" name="regno" placeholder="USN"><br>
            <input id="email" type="text" name="email" placeholder="Email"><br>

            <select class="input_box" id="course" name="course" placeholder="select course">
                <option selected>Please Select...</option>
                <?php $query = "SELECT * FROM courses";
                $stmt2 = $mysqli->prepare($query);
                $stmt2->execute();
                $res = $stmt2->get_result();
                while ($row = $res->fetch_object()) {
                ?>
                    <option value="<?php echo $row->course_fn; ?>"><?php echo $row->course_fn; ?>&nbsp;&nbsp;(<?php echo $row->course_sn; ?>)</option>
                <?php } ?>
            </select><br>
            <input id="mobno" type="number" name="phone" placeholder="Phone"><br>
            <input id="query" type="text" name="queryy" placeholder="Query"><br>
            <!-- <button id="submit" name="clicked" type="submit"><a href="">Submit</a></button><br> -->
            <input id="submit" type="submit" name="clicked" value="submit"><br>

        </form>
    </div>
</body>

</html>

