<?php
$id = "";
$name = "";
$age = "";
$address = "";
$salary = "";

include "connect.php";
 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = '$id' ";
    $results = mysqli_query($conn,$sql);

    if(mysqli_num_rows($results)>0){
        while($row = mysqli_fetch_assoc($results)){
            $name = $row['NAME'];
            $id = $row['ID'];
            $age = $row['AGE'];
            $address = $row['ADDRESS'];
            $salary = $row['SALARY'];
        }
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
       <label for="id">ID</label>
       <input type="text" name="id" value="<?php echo $id ?>">
       <br><br>
       <label for="name">NAME</label>
       <input type="text" name="name" value="<?php echo $name ?>">
       <br><br>
       <label for="age">AGE</label>
       <input type="text" name="age" value="<?php echo $age ?>">
       <br><br>
       <label for="address">ADDRESS</label>
       <input type="text" name="address" value="<?php echo $address ?>">
       <br><br>
       <label for="salary">SALARY</label>
       <input type="text" name="salary" value = "<?php echo $salary ?>">
       <br><br>
       <input type="submit" value="submit" name="submit">
       <input type="submit" value="UPDATE" name="update">
       <input type="submit" value="Search" name="search">

    </form>
</body>
</html>