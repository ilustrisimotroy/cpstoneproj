<?php
require_once("session.php");
require_once("connections/conn.php");
$con = connection();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

   $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
   $user = $con->query($sql) or die ($con->error);
   $row = $user->fetch_assoc();
   $total = $user->num_rows;

        if($total > 0){
            $_SESSION['UserLogin'] = $row['email'];
            $_SESSION['Access'] = $row['user_lvl_id'];
            echo header("Location: dashboard.php");
        }else{
            echo "No user found.";
        }
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
                <h1>Login Page</h1>
                <br/>
                <form action="" method="post">
                <label>Email</label>
                <input type="text" name="email" id="email">
                <label>Password</label>
                <input type="password" name="password" id="password">
                <button type="submit" name="login">login</button>
                </form>
        </div>
</main>


</body>
</html>