<?php
include_once("Layouts/load.php");
$con = connection();
?>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row modal-header">
                <div class="col-md-12 fw-bold fs-4 pb-3">
                    Stock Transfer

                    <div class="float-end">
                        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="right-icon ms-auto"><i class="bi bi-plus-lg" style="margin-left: 5px;"></i></span>    
                                Add New Transfer 
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row pt-5 mt-2 mb-5" style="row-gap: 8px; display: flex;">
                    <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search By Invoice Number" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <i class="bi bi-search btn btn-outline-secondary" type="button"></i>
                        </div>
                    </div>  
                    
                    <div class="col col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-4">
                        <div class="input-group mb-3">
                            <select class="form-select">
                                <option value="" hidden>Select Warehouse..</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div> 
                    
                    <div class="col col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-2">
                        <div class="input-group">
                            <input type="text" placeholder="Start Date" class="form-control" id="date"  onfocus="(this.type='date')">
                            <!-- <input placeholder="Date" class="textbox-n" type="text" id="s"> -->
                        </div>
                    </div>  

                    <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-2">
                        <div class="input-group mb-3">
                            <input type="text" placeholder="End Date" class="form-control" id="date"  onfocus="(this.type='date')">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
            test
        </div>
            </div>
        </div>
    </main>