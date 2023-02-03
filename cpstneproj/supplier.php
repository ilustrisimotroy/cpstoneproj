<?php
include_once("layouts/load.php");
require_once('connections/inventoryclass.php');
$supplier = $invt->getSuppliers();
?>

    <main class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-4">
                    Supplier Management
                    
                    <div class="float-end">
                        <button type="button" class="btn btn-success text-light" data-bs-toggle="modal" href="#addSuppliermodal">
                            <span class="right-icon ms-auto"><i class="bi bi-cloud-arrow-down-fill" style="margin-left: 5px;"></i></span> 
                                Import Suppliers
                        </button>

                        <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" href="#addSuppliermodal">
                            
                        </button> -->
                        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="right-icon ms-auto"><i class="bi bi-plus-lg" style="margin-left: 5px;"></i></span>    
                                Add New Supplier 
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
                    <div class="col-md-12 mb-12 pb-3 pt-5">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" href="#deleteModal">
                            <span class="right-icon ms-auto"><i class="bi bi-trash3-fill" style="margin-left: 5px;"></i></span>
                            Delete Suppliers
                        </button>
                    </div>
                    <!-- Datatables -->
                <div class="col-md-12">
                    <div class="card">                 
                        <div class="card-header">
                            Supplier Tables
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  id="example" style="width: 100%;">
                                     <thead>
                                        <tr>
                                            <th style="width: 50px"></th>
                                            <th>Company Name</th>
                                            <th>Contact Number</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th style="text-align: center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       foreach($supplier as $supplier)
                                        {
                                    ?>

                                        <tr>
                                            <td style="margin-left: 100px;"> </td>
                                            <td><?php echo $supplier["company_name"]; ?> </td>
                                            <td><?php echo $supplier["contact_no"]; ?> </td>
                                            <td><?php echo $supplier["email"]; ?> </td>
                                            <td><?php echo $supplier["status"]; ?> </td>
                            
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-success">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-info"> 
                                                    <i class="bi bi-binoculars-fill"></i>
                                                    View
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


    <?php include_once "modals/modal.supplier.php"; ?>
