<?php
    include('../includes/pdoconfig.php');
    if(!empty($_POST["regno"])) {	
    $id=$_POST['regno'];
    $stmt = $DB_con->prepare("SELECT * FROM userregistration WHERE regNo = :id");
    $stmt->execute(array(':id' => $id));
    ?>
    <?php
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
    ?>
    <?php

$arr = array(
   'firstName'=> $row['firstName'],
   'middleName'=> $row['middleName'],   
   'lastName'=> $row['lastName'],
   'email'=> $row['email'],
   'gender'=> $row['gender'],
   'contact'=> $row['contactNo'],
   'course'=> $row['course'],
   'gname'=> $row['gname'],
   'grelation'=> $row['grelation']
  
 
);
echo json_encode($arr);
   ?>

    <?php
    }
}

?>