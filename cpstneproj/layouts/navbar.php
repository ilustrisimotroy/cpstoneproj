<?php
// start session
if(!isset($_SESSION)){
    session_start();
}

include_once("connections/conn.php");
$con = connection();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./components/css/bootstrap.css" />
    <link rel="stylesheet" href="./components/css/datatables.bootstrap5.min.css" />
    <link rel="stylesheet" href="./components/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Warehouse Management System</title>
    </head>
    <body>

<!-- Navbar Start here -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <!-- Offcanvas Trigger starts here -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                </button>
            <!-- Offcanvas Trigger ends here -->
          <a class="navbar-brand fw-bold text-uppercase me-auto" href="dashboard.php"> WMS </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <div class="d-flex ms-auto mt-2">
              <div class="input-group my-3 my-lg-0">

<!-- for username -->
                <?php

                if(isset($_SESSION['UserLogin'])){
                    echo '<p class="mt-2 text-white"> Welcome: '.$_SESSION['UserLogin'].'</p>';
                }
                ?>


                <!-- <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell-fill" style="font-size: 16px;"></i> -->
                    <!-- <img src="./images/user.jpg" style="width: 50px; height: 50px; border-radius: 50%;"  alt="users"> -->
                <!-- </a> -->
                <!-- <input type="text" name="" id="" class="form-control" />
                <button class="btn btn-primary" type="button" id="button-addon2"> <i class="bi bi-search"></i> </button> -->
              </div>
            </div>

            <ul class="navbar-nav mb-2 mb-lg-0">
            <!-- <li class="text-white">test</li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <i class="bi bi-person-fill"></i> -->
                        <img src="./images/user.jpg" style="width: 42px; height: 42px; border-radius: 50%;"  alt="users">
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
                    </ul>
                  </li>
            </ul>

            
          </div>
        </div>
      </nav>    



    <!-- Navbar Ends here -->
<script src="components/js/bootstrap.bundle.min.js"></script>
<script src="components/js/jquery-3.6.0.js"></script>
<script src="components/js/jquery.dataTables.min.js"></script>
<script src="components/js/dataTables.bootstrap5.min.js"></script>
<script src="components/js/script.js"></script>
<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>