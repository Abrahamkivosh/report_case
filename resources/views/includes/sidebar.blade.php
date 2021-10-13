<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">{{ Auth::User()->name }}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><div ></div><a class="dropdown-item dropdown-footer btn btn-danger"
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>


                    </ul>
                </li>
                <li class="nav-small-cap">--- Complaints ---</li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('complaint.index') }}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">View Complaints <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('complaint.create') }}" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Add Complaint</span></a>
                </li>
                <li> <a class=" waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-email.html">Mailbox</a></li>
                    </ul>
                </li>
                <li> <a class=" waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="ui-cards.html">Cards</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
