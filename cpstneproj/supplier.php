<?php
include_once("Layouts/load.php");
$con = connection();
?>

    <main class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-4">Supplier Management</div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-md-3 mb-3">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" href="#addSuppliermodal">
                        Add Supplier <span class="right-icon ms-auto"><i class="bi bi-bag-plus-fill" style="margin-left: 5px;"></i></span>
                    </button>
                </div>
            </div>

                        <!-- Supplier Data tables -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Data Tables
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped data-table" id="example" style="width: 100%;">

                                     <thead>
                                        <th>Company Name</th>
                                        <th>Contact Person</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                        <th>Email Address</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $result=mysqli_query($con,"SELECT * FROM suppliers");
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo "<tr>";
                                            echo "<td>"; echo $row["company_name"]; echo "</td>";
                                            echo "<td>" ; echo $row["contact_person"]; echo "</td>";
                                            echo "<td>"; echo $row["contact_no"]; echo "</td>";
                                            echo "<td>"; echo $row["address"]; echo "</td>";
                                            echo "<td>"; echo $row["email"]; echo "</td>";
                                            echo "<td>"; ?> <button type="button" class="btn btn-success"> Edit</button>
                                                            <button type="button" class="btn btn-info"> View</button> 
                                                            <button type="button" class="btn btn-danger"> Delete</button> 
                                                        <?php echo"</td>";
                                            echo "</tr>";
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