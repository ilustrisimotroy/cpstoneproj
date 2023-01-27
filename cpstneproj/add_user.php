<?php
 include_once("layouts/load.php");
include_once("connections/conn.php");
$con = connection();

if(isset($_POST['btnAdd'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $status = $_POST['status'];
        $userlevel = $_POST['userlevel'];

        $sql = "INSERT INTO `users`(`email`, `password`, `status`, `user_lvl_id`) 
        VALUES ('$email','$password','$status','$userlevel')";

        $con->query($sql) or die ($con->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./components/css/bootstrap.css" />
    <link rel="stylesheet" href="./components/css/datatables.bootstrap5.min.css" />
    <link rel="stylesheet" href="./components/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    
<main class="mt-5 pt-5">
        <div class="container-fluid">
                <h1>Add new user</h1>
                <div class="form-container">
                        <form action="" method="post">
                                <div class="form-input">
                                        <label>Email:</label>
                                        <input type="email" name="email" id="email">
                                </div>
                                <br>
                                <div class="form-input">
                                        <label>Password:</label>
                                        <input type="password" name="password" id="password">
                                </div>
                                <br>
                                <div class="form-input">
                                        <label>Status:</label>
                                        <input type="status" name="status" id="status">
                                </div>
                                <br>
                                <div class="form-input">
                                        <label>User Level</label>
                                       <select name="status" id="status">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                       </select>
                                </div>
                             <button type="submit" name="btnAdd">Add user</button>
                        </form>
                </div>
        </div>
</main>



</body>
</html>