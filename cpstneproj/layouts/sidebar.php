 <!-- OffCanvas Start here -->

      
 <div class="offcanvas offcanvas-start sidebarNav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

<div class="offcanvas-body p-0">
  <nav class="navbar-light">
    <ul class="navbar-nav">
        <li><div class="text-muted small fw-bold text-uppercase px-3 mt-3">Core</div></li>
        <li>
            <a href="./dashboard.php" class="nav-link px-3 mt-3 active">
            <span class="me-2">
            <i class="bi bi-house-fill"></i>
            </span>
            <span>Dashboard</span>
            </a>
        </li>
        <li class="my-4">
            <hr class="dropdown-divider"/>
        </li>
        <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
                Interface
            </div>
        </li>

        <li>
            <a class="nav-link px-3 mt-3 sidebar-link" data-bs-toggle="collapse" href="#collapseSupplier" role="button" aria-expanded="false" aria-controls="collapseUsers">
                <span class="me-2"><i class="bi bi-people-fill"></i></span>
                <span>Parties</span>
                <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
            </a>
            <div class="collapse" id="collapseSupplier">
                <div>
                    <ul class="navbar-nav ps-3">
                        
                        <li>
                            <a href="./supplier.php" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                <span>Suppliers</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                <span>Customers</span>
                            </a>
                        </li>
                         -->
                    </ul>
                </div>
            </div>
        </li>

        <li>
            <a class="nav-link px-3 mt-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span class="me-2"><i class="bi bi-microsoft"></i></span>
                <span>Product Manager</span>
                <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
            </a>
            <div class="collapse" id="collapseExample">
                <div>
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="./item_list.php" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                <span>Items List</span>
                            </a>
                        </li>
                        <li>
                            <a href="./category.php" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                <span>Categories</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                <span>Brands</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </li>


        <li>
            <a class="nav-link px-3 mt-3 sidebar-link" data-bs-toggle="collapse" href="#collapsePurchase" role="button" aria-expanded="false" aria-controls="collapseUsers">
                <span class="me-2"><i class="bi bi-receipt-cutoff"></i></span>
                <span>Purchase Method</span>
                <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
            </a>
            <div class="collapse" id="collapsePurchase">
                <div>
                    <ul class="navbar-nav ps-3">
                        <li class="mt-3">
                            <a href="#" class="nav-link px-3">
                                <span class="me-1">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                    <span>Purchase Request </span>
                            </a>
                        </li>

                        <li>
                            <a href="./prchse_order.php" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                    <span>Purchase Order</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-arrow-right-short"></i>
                                </span>
                                    <span>Good Receipt P.O</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </li>

        <li class="mt-3">
            <a href="#" class="nav-link px-3">
                <span class="me-1">
                    <i class="bi bi-people-fill"></i>
                </span>
                <span>Employees</span>
            </a>
        </li>

        <li class="mt-3">
            <a href="#" class="nav-link px-3">
                <span class="me-1">
                    <i class="bi bi-houses-fill"></i>
                </span>
                <span>Warehouse</span>
            </a>
        </li>

        

        <li>
            <a class="nav-link px-3 mt-3 sidebar-link" data-bs-toggle="collapse" href="#collapseUsers" role="button" aria-expanded="false" aria-controls="collapseUsers">
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>User Manage</span>
                <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
            </a>
            <div class="collapse" id="collapseUsers">
                <div>
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-people"></i>
                                </span>
                                <span>Master List</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2">
                                    <i class="bi bi-check2-square"></i>
                                </span>
                                <span>User Access Roles</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        
    </ul>
  </nav>
</div>
</div>

<!-- OffCanvas Ends here -->
