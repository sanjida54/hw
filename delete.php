<?php
include 'connection.php';
$id=$_POST['Id'];
$delete_query="DELETE FROM student1 WHERE Id='$id' ";
$result=mysqli_query($connection,$delete_query);
if($result)
{
    echo 'data has been delete successfully!';
}
else
{
    echo 'failed';
}
header('Location:registration.php');

?>