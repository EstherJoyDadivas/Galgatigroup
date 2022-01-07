<?php
include('format/header.php');
include('format/sidebar.php');
?>

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topbar-menu float-end mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        </span>
                        <span>
                            <span class="account-user-name">Admin Name</span>
                            <span class="account-position">Admin</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>My Account</span>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- <button class="button-menu-mobile open-left">
                <i class="mdi mdi-menu"></i>
            </button> -->
            <div>
                <h1>Home</h1>
            </div>
        </div>
        <!-- end Topbar -->

        <!-- home/managebooks -->
        <div class="container">
            <h2>Manage Books</h2>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Published Date</th>
                        <th>Publisher</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@mail.com</td>
                        <td>mary@mail.com</td>
                        <td>mary@mail.com</td>
                        <td>mary@mail.com</td>
                    </tr>
                </tbody>
            </table>


        </div>

        <?php
        include('format/footer.php'); ?>