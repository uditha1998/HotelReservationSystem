<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="index.php">
        Willuda CMS
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img alt="Chris Wood" src="./img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128"> 

            <div class="fw-bold" style="font-size: 12px;margin-top: 10px">User Name</div>
            <small>Admin</small>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>


            <li class="sidebar-item ">
                <a class="sidebar-link" href="index.php"> 
                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#page" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-address-card"></i> <span class="align-middle">Activites</span>
                </a>
                <ul id="page" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-activity.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-activity.php">Manage</a></li>

                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#page1" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-bookmark"></i> <span class="align-middle">Attraction</span>
                </a>
                <ul id="page1" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-attraction.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-attraction.php">Manage</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#page2" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Service</span>
                </a>
                <ul id="page2" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-service.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-service.php">Manage</a></li>       
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#page2" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Gallery</span>
                </a>
                <ul id="page2" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-gallery.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-gallery.php">Manage</a></li>       
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#page3" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Customers</span>
                </a>
                <ul id="page3" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./view-customer.php">View</a></li>       
                </ul>
            </li>
             <li class="sidebar-item">
                 <a data-bs-target="#page4" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Bookings</span>
                </a>
               <ul id="page4" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./view-booking.php">View</a></li>       
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#page4" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Inquiries</span>
                </a>
                <ul id="page4" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./view-inquiries.php">View</a></li>       
                </ul>
            </li>





            <li class="sidebar-item">
                <a data-bs-target="#profile"  class="sidebar-link " href="./log-out.php">
                    <i class="align-middle me-2 fas fa-fw fa-backward"></i> <span class="align-middle">Sign Out</span>

                </a>

            </li>
        </ul>
    </div>
</nav>