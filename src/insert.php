<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'phpcrud');

if(isset($_POST['insertdata']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
    
$query=" INSERT INTO register('firstname','lastname','contact') VALUES ('$firstname','$lastname','$contact')";
$query_run = mysqli_query($connection,$query);    
    
if($query_run)
{
    echo '<script> alert("Data sent");</script>';
    header('Location: reg.php');
}
else
{
    echo '<script> alert("Data not sent); </script>';
}
        
}
?>