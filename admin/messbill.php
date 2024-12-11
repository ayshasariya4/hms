<!DOCTYPE html>
<html>


<?php //include 'connection.php';
$username = 'root';
$password = "";
$server = 'localhost';
$db = 'hostelmsphp';

$conn = new mysqli($server, $username, $password, $db);
//mysqli_select_db($conn, 'hmss');

if ($conn) {
    //echo "connection succesfull";
?>
    <script>
        // alert('connection succesfull');
    </script>
    <?php
} else {

    //echo "connection failed";

    die("no connection" . mysqli_connect_error());
}


if (isset($_POST['clicked'])) {
    // mysqli_select_db($conn, 'hmss');


    $regNo = $_POST["regNo"];
    $mdate = $_POST['mdate'];
    $messfees = $_POST["messfees"];


    $insertquery = "INSERT INTO messbill(regNo, mdate,messfees) VALUES ('$regNo',' $mdate',' $messfees')";
    // $result = $conn->query($insertquery);

    //
    if ($conn->query($insertquery)) {
    ?>
        <script>
            alert('inserted succesfull');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('not inserted');
        </script>
<?php
    }
}

mysqli_close($conn);

?>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fees.css">
    <style>
        .container input[type="submit"] {
            position: relative;
            left: 180px;
            border: 1px solid #eee;
            border-radius: 20px;
            box-shadow: 5px 5px 5px #eee;
            text-shadow: none;
            background: #C65D7B;
            padding: 12px 30px;
            border-radius: 30px;
            color: #000000;
            font-weight: bold;
            font-size: 15px;
            transition: .4s;
        }

        .container input[type="submit"]:hover {

            color: #fff;
            border: 1px solid #eee;
            border-radius: 20px;
            box-shadow: 5px 5px 5px #eee;
            text-shadow: none;
            background: #774360;
        }

        .flex-container {
            display: flex;
            flex-direction: row;
        }

        .left {
            flex-basis: 80%;
        }

        .right {
            flex-basis: 20%;

        }

        nav.flex-container {
            padding: 40px 40px 0px 40px;
        }
    </style>
</head>

<body>
    <div class="nav-bar">
        <nav style="text-align:center;" class="flex-container">
            <div>
                <ul class="left">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutus.html">About us</a></li>
                    <li><a href="querybox.php">Query Box</a></li>
                </ul>
            </div>
            <div class="right">
                <a href="register.php"><button type="button" class="btn btn-light">Register</button></a>
            </div>
        </nav>
    </div>
    <div class="container">
        <h2 class="title">Mess Fee Details</h2>
        <form class="" action="" method="POST">
            <label class="labell">Reg No.:</label><br>
            <input class="input_box" type="text" placeholder="Enter USN" name="regNo" required><br><br>
            <label class="labell">Date:</label><br>
            <input class="input_box" type="date" name="mdate"> <br><br>
            <label class="labell">Mess Fees:</label><br>
            <input class="input_box" type="number" name="messfees"><br><br>
            <input type="submit" class="button" value="submit" name="clicked">

            <!-- <button name="clicked" type="submit" value="submit"><a href="">Submit</a></button> -->
            <!-- The above line is removed due to the fact that we must use input:submit to properly
                    submit a form otherwise form won't be submitted -->
        </form>
    </div>

</body>

</html>