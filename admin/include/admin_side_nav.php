<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="index.php">
        Setharana CMS
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img alt="Chris Wood" src="./img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128"> 

            <div class="fw-bold" style="font-size: 12px;margin-top: 10px"><?= $_SESSION['name'] ?></div>
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
                    <i class="align-middle me-2 fas fa-fw fa-address-card"></i> <span class="align-middle">Services</span>
                </a>
                <ul id="page" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-service.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-service.php">Manage</a></li>

                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#page1" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-bookmark"></i> <span class="align-middle">Slider Images</span>
                </a>
                <ul id="page1" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-slider.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-slider.php">Manage</a></li>
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
                    <i class="align-middle me-2 fas fa-fw fa-comment"></i> <span class="align-middle">Comments</span>
                </a>
                <ul id="page3" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-comment.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-comment.php">Manage</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#page4" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-bookmark"></i> <span class="align-middle">Blog Post</span>
                </a>
                <ul id="page4" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-blog.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-blog.php">Manage</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#page5" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-bookmark"></i> <span class="align-middle">Projects</span>
                </a>
                <ul id="page5" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-project.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-project.php">Manage</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#page6" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-bookmark"></i> <span class="align-middle">Staff</span>
                </a>
                <ul id="page6" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-staff.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-staff.php">Manage</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#page7" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-bookmark"></i> <span class="align-middle">About Us</span>
                </a>
                <ul id="page7" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="./create-about.php">Create</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="./manage-about.php">Manage</a></li>
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