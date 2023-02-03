<?php
include_once("layouts/load.php");
$con = connection();
?>

<main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row modal-header">
                <div class="col-md-12 fw-bold fs-4 pb-3 mt-4">
                    Purchase Request

                    <div class="float-end">
                        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPR" aria-controls="offcanvasPR">
                        <span class="right-icon ms-auto"><i class="bi bi-plus-lg" style="margin-left: 5px;"></i></span>    
                                Purchase Request
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Purchase Request Table
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderd data-table" id="" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th> PR no. </th>
                                            <th> Item Description</th>
                                            <th> Requested By </th>
                                            <th> Supplier </th>
                                            <th> Status </th>
                                            <th> Requested Date </th>
                                            <th> Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#editPO" aria-controls="offcanvasRight">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    <!-- Edit -->
                                                </button>
                                                <button type="button" class="btn btn-info"> 
                                                    <i class="bi bi-binoculars-fill"></i>
                                                    <!-- View -->
                                                </button> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
</main>



<?php include_once "modals/modal.purchase_request.php"; ?>