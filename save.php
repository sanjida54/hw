<?php
session_start();
//echo '<pre>';
//print_r($_GET);

//var_dump();
getData();//Function is being called

function getData()
{
    $studentName = $_POST['studentName'];
    $Gender = $_POST['Gender'];
    $Department = $_POST['Department'];
    //$gender=$_POST['gender'];

    include "connection.php";


    $insert_query = "INSERT INTO student1(studentName,Gender,Department) values('$studentName','$Gender','$Department')";
    $insert_query = mysqli_query($connection, $insert_query);

    if ($insert_query) {
        echo 'Data has been saved successfully';
    } else {
        echo 'Data has not been saved successfully';
  
  }
  header("Location:registration.php");
  
}

?>
    