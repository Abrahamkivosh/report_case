<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ '/storage/profile/' . Auth::user()->image }}" alt="user-img" class="img-circle"><span class="hide-menu">{{ Auth::User()->name }}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('show.user',Auth()->User()->id) }}"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="{{ route('edit.user',Auth::User()->id )}}")><i class="ti-settings"></i> Account Setting</a></li>
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
                <li> <a class=" waves-effect waves-dark" href="{{ route('complaints.index') }}" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">View Complaints <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('complaints.create') }}" aria-expanded="false"><i class="ti-pencil"></i><span class="hide-menu">Add Complaint</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
