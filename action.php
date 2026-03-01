<?php

include "connect.php";

if(isset($_POST['search'])){
    $id = $_POST['id'];
    header("Location:index.php?id=$id");
}

//insert
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO users (id,name,age,address,salary) VALUES('$id','$name','$age','$address','$salary')";
    $result = mysqli_query($conn,$sql);
}

//update
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "UPDATE users SET name='$name',age='$age',address ='$address',salary = '$salary' WHERE id = '$id'";
    $resultu = mysqli_query($conn, $sql);

    


}


?>