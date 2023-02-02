<?php
include_once("./layouts/load.php");
$con = connection();
?>


<main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row modal-header">
                <div class="col-md-12 fw-bold fs-4 pb-3 mt-4">
                    Purchase Order

                    <div class="float-end">
                        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPO" aria-controls="offcanvasPO">
                        <span class="right-icon ms-auto"><i class="bi bi-plus-lg" style="margin-left: 5px;"></i></span>    
                                Add Purchase Order
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            List Puchase Orders
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderd" id="example" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px"> </th>
                                            <th> Number </th>
                                            <th> Date Created </th>
                                            <th> P.O Code </th>
                                            <th> Supplier </th>
                                            <th> Items </th>
                                            <th> Status </th>
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
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </main>




    <?php include_once "modals/modal.purchase_order.php"; ?>