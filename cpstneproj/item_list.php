<?php
include_once("layouts/load.php");
$con = connection();
?>


<main class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-4">
                    Item Lists
                    
                    <div class="float-end">
                        <!-- <button type="button" class="btn btn-success text-light" data-bs-toggle="modal" href="#addSuppliermodal">
                            <span class="right-icon ms-auto"><i class="bi bi-cloud-arrow-down-fill" style="margin-left: 5px;"></i></span> 
                                
                        </button> -->

                        <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" href="#addSuppliermodal">
                            
                        </button> -->
                        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="right-icon ms-auto"><i class="bi bi-plus-lg" style="margin-left: 5px;"></i></span>    
                                Add New items
                        </button>
                    </div>
                </div>
            </div>

            <!-- <div class="row mt-3 mb-3">
                <div class="col -md-3 mb-3">
                    

                    
                </div>
            </div> -->

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
                            Items Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  id="" style="width: 100%;">
                                     <thead>
                                        <tr>
                                            <!-- <th style="width: 50px"></th> -->
                                            <th>Item no.</th>
                                            <th>Description</th>
                                            <!-- <th>UoM</th> -->
                                            <th>Category</th>
                                            <th>Date created</th>
                                            <th style="text-align: center;">Actions</th>
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
                                            <td><?php echo "Item-001";  ?> </td>
                                            <td><?php echo "Item Descrption"; ?> </td>
                                            <td><?php echo "Electrical"; ?> </td>
                                            <td><?php echo "01-15-2020"; ?> </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#editItemCanvas" aria-controls="offcanvasRight">
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


    <?php include_once "./modals/modal.itemList.php"; ?>