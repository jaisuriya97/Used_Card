<?php
$con = new mysqli('localhost', 'root', '', 'users');
if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `userdata` where id=$id";
    $result = mysqli_query($con,$sql);
    if ($result){
        header('location:dashboard.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>