<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <!-- Dashboard Menu -->
                <li class="submenu {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="#">
                        <i class="feather-grid"></i>
                        <span>Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                Admin Dashboard
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Users Menu -->
                <li class="submenu {{ request()->routeIs('admin.user.*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.user.index') }}"
                                class="{{ request()->routeIs('admin.user.index') ? 'active' : '' }}">
                                User List
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.user.create') }}"
                                class="{{ request()->routeIs('admin.user.create') ? 'active' : '' }}">
                                Create User
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="teachers.html">Teacher List</a></li>
                        <li><a href="teacher-details.html">Teacher View</a></li>
                        <li><a href="add-teacher.html">Teacher Add</a></li>
                        <li><a href="edit-teacher.html">Teacher Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="departments.html">Department List</a></li>
                        <li><a href="add-department.html">Department Add</a></li>
                        <li><a href="edit-department.html">Department Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="subjects.html">Subject List</a></li>
                        <li><a href="add-subject.html">Subject Add</a></li>
                        <li><a href="edit-subject.html">Subject Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="invoices.html">Invoices List</a></li>
                        <li><a href="invoice-grid.html">Invoices Grid</a></li>
                        <li><a href="add-invoice.html">Add Invoices</a></li>
                        <li><a href="edit-invoice.html">Edit Invoices</a></li>
                        <li><a href="view-invoice.html">Invoices Details</a></li>
                        <li><a href="invoices-settings.html">Invoices Settings</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="fees-collections.html">Fees Collection</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="salary.html">Salary</a></li>
                        <li><a href="add-fees-collection.html">Add Fees</a></li>
                        <li><a href="add-expenses.html">Add Expenses</a></li>
                        <li><a href="add-salary.html">Add Salary</a></li>
                    </ul>
                </li>
                <li>
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                </li>
                <li>
                    <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>
                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                </li>
                <li>
                    <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li>
                    <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                </li>
                <li>
                    <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="blog.html">All Blogs</a></li>
                        <li><a href="add-blog.html">Add Blog</a></li>
                        <li><a href="edit-blog.html">Edit Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="error-404.html">Error Page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                </li>
                <li class="menu-title">
                    <span>Others</span>
                </li>
                <li>
                    <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                </li>
                <li>
                    <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                </li>
                <li>
                    <a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
                </li>
                <li class="menu-title">
                    <span>UI Interface</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="accordions.html">Accordions</a></li>
                        <li><a href="avatar.html">Avatar</a></li>
                        <li><a href="badges.html">Badges</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="buttongroup.html">Button Group</a></li>
                        <li><a href="breadcrumbs.html">Breadcrumb</a></li>
                        <li><a href="cards.html">Cards</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="dropdowns.html">Dropdowns</a></li>
                        <li><a href="grid.html">Grid</a></li>
                        <li><a href="images.html">Images</a></li>
                        <li><a href="lightbox.html">Lightbox</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="modal.html">Modals</a></li>
                        <li><a href="offcanvas.html">Offcanvas</a></li>
                        <li><a href="pagination.html">Pagination</a></li>
                        <li><a href="popover.html">Popover</a></li>
                        <li><a href="progress.html">Progress Bars</a></li>
                        <li><a href="placeholders.html">Placeholders</a></li>
                        <li><a href="rangeslider.html">Range Slider</a></li>
                        <li><a href="spinners.html">Spinner</a></li>
                        <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                        <li><a href="tab.html">Tabs</a></li>
                        <li><a href="toastr.html">Toasts</a></li>
                        <li><a href="tooltip.html">Tooltip</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="video.html">Video</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="box"></i> <span>Elements </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="ribbon.html">Ribbon</a></li>
                        <li><a href="clipboard.html">Clipboard</a></li>
                        <li><a href="drag-drop.html">Drag & Drop</a></li>
                        <li><a href="rating.html">Rating</a></li>
                        <li><a href="text-editor.html">Text Editor</a></li>
                        <li><a href="counter.html">Counter</a></li>
                        <li><a href="scrollbar.html">Scrollbar</a></li>
                        <li><a href="notification.html">Notification</a></li>
                        <li><a href="stickynote.html">Sticky Note</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="chart-apex.html">Apex Charts</a></li>
                        <li><a href="chart-js.html">Chart Js</a></li>
                        <li><a href="chart-morris.html">Morris Charts</a></li>
                        <li><a href="chart-flot.html">Flot Charts</a></li>
                        <li><a href="chart-peity.html">Peity Charts</a></li>
                        <li><a href="chart-c3.html">C3 Charts</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="award"></i> <span> Icons </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                        <li><a href="icon-feather.html">Feather Icons</a></li>
                        <li><a href="icon-ionic.html">Ionic Icons</a></li>
                        <li><a href="icon-material.html">Material Icons</a></li>
                        <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                        <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                        <li><a href="icon-themify.html">Themify Icons</a></li>
                        <li><a href="icon-weather.html">Weather Icons</a></li>
                        <li><a href="icon-typicon.html">Typicon Icons</a></li>
                        <li><a href="icon-flag.html">Flag Icons</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                        <li><a href="form-input-groups.html">Input Groups </a></li>
                        <li><a href="form-horizontal.html">Horizontal Form </a></li>
                        <li><a href="form-vertical.html"> Vertical Form </a></li>
                        <li><a href="form-mask.html"> Form Mask </a></li>
                        <li><a href="form-validation.html"> Form Validation </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="tables-basic.html">Basic Tables </a></li>
                        <li><a href="data-tables.html">Data Table </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <span>Level 1</span></a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
