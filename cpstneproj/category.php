<?php
include_once("layouts/load.php");
$con = connection();
?>

<?php
include_once("layouts/load.php");
$con = connection();
?>


<main class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-4">
                    Category
                    
                    <div class="float-end">
                        <!-- <button type="button" class="btn btn-success text-light" data-bs-toggle="modal" href="#addSuppliermodal">
                            <span class="right-icon ms-auto"><i class="bi bi-cloud-arrow-down-fill" style="margin-left: 5px;"></i></span> 
                                
                        </button> -->

                        <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" href="#addSuppliermodal">
                            
                        </button> -->
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#addCategory" aria-controls="offcanvasRight">
                        <span class="right-icon ms-auto"><i class="bi bi-plus-lg" style="margin-left: 5px;"></i></span>    
                                Add New Category
                        </button>
                    </div>
                </div>
            </div>

                        <!-- Supplier Data tables -->
            <div class="row">
                    <!-- Delete Button for multiple -->
                    <div class="col-md-12 mb-12 pb-3 pt-3">
                        <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" href="#deleteModal">
                            <span class="right-icon ms-auto"><i class="bi bi-trash3-fill" style="margin-left: 5px;"></i></span>
                            Delete Items
                        </button> -->
                    </div>
                    <!-- Datatables -->
                <div class="col-md-12">
                    <div class="card">                 
                        <div class="card-header">
                            Category Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  id="" style="width: 100%;">
                                     <thead>
                                        <tr>
                                            <!-- <th style="width: 50px"></th> -->
                                            <th>Category No.</th>
                                            <th>Description</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $result=mysqli_query($con,"SELECT * FROM suppliers");
                                        while($row = mysqli_fetch_array($result))
                                        {

                                    ?>

                                        <tr>
                                            <!-- <td style="margin-left: 100px;"> </td> -->
                                            <td><?php echo "Ctgry-001";  ?> </td>
                                            <td><?php echo "Category Descrption"; ?> </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editCategory">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    <!-- Edit -->
                                                </button>
                                                <button type="button" class="btn btn-info"> 
                                                    <i class="bi bi-binoculars-fill"></i>
                                                    <!-- View -->
                                                </button> 
                                                <!-- <button type="button" class="btn btn-danger"> Delete</button> -->
                                            </td>   


                                        </tr>                                
                                        
                                        <?php

                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <?php include_once "./modals/modal.category.php"; ?>