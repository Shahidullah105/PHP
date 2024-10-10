<div class="left-side-menu">

<div class="h-100" data-simplebar>

    <!-- User box -->
    <div class="user-box text-center">
        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
        <div class="dropdown">
            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Nik Patel</a>
            <div class="dropdown-menu user-pro-dropdown">

                <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs me-1"></i><span>Settings</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="help-circle" class="icon-dual icon-xs me-1"></i><span>Support</span>
                </a>
                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                    <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                </a>

            </div>
        </div>
        <p class="text-muted">Admin Head</p>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul id="side-menu">

            <!-- <li class="menu-title">Navigation</li> -->

            <li>
                <a href="#sidebarDashboard" data-bs-toggle="collapse">
                    <span class="badge bg-success float-end">02</span>
                    <i data-feather="home"></i>
                    <span> Dashboards </span>
                    <!-- <span class="menu-arrow"></span> -->
                </a>
                <div class="collapse" id="sidebarDashboard">
                    <ul class="nav-second-level">
                        <li><a href="index.php">Ecommerce</a></li>
                        <li><a href="dashboard-analytics.html">Analytics</a></li>
                    </ul>
                </div>
            </li>

           

          

            <li>
                <a href="#sidebarEmail" data-bs-toggle="collapse">
                    <i data-feather="mail"></i>
                    <span> User </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="nav-second-level">
                        <li><a href="email-inbox.html">Add User</a></li>
                        <li><a href="email-read.html">Manage User</a></li>
                        <li><a href="email-compose.html">View  User</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarProjects" data-bs-toggle="collapse">
                    <i data-feather="briefcase"></i>
                    <span> Category </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="nav-second-level">
                        <li><a href="add-category.php">Add category</a></li>
                        <li><a href="project-detail.html">Manage Category</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarTasks" data-bs-toggle="collapse">
                    <i data-feather="clipboard"></i>
                    <span> Post  </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="nav-second-level">
                        <li><a href="add-post.php">Add Post</a></li>
                        <li><a href="manage-post.php">Manage Post</a></li>
                    </ul>
                </div>
            </li>

            
            <li class="menu-title mt-2">Custom</li>

            

           

            <li class="menu-title mt-2">Components</li>

           

           
         

           
            <li>
                <a href="charts.html">
                    <i data-feather="bar-chart-2"></i>
                    <span> Charts </span>
                </a>
            </li>

            <li>
                <a href="#sidebarTables" data-bs-toggle="collapse">
                    <i data-feather="grid"></i>
                    <span> Tables </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="nav-second-level">
                        <li><a href="tables-basic.html">Basic</a></li>
                        <li><a href="tables-datatables.html">Data Tables</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarMaps" data-bs-toggle="collapse">
                    <i data-feather="map"></i>
                    <span> Maps </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="nav-second-level">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                    <i data-feather="share-2"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMultilevel">
                    <ul class="nav-second-level">
                        <li>
                            <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                Second Level <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultilevel2">
                                <ul class="nav-second-level">
                                    <li><a href="javascript: void(0);">Item 1</a></li>
                                    <li><a href="javascript: void(0);">Item 2</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                Third Level <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultilevel3">
                                <ul class="nav-second-level">
                                    <li><a href="javascript: void(0);">Item 1</a></li>
                                    <li>
                                        <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                            Item 2 <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarMultilevel4">
                                            <ul class="nav-second-level">
                                                <li><a href="javascript: void(0);">Item 1</a></li>
                                                <li><a href="javascript: void(0);">Item 2</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>