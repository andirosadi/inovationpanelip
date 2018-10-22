<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Inovation</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{url('c_inovasi')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Create Inovation</span></a></li>
                        <li class="sidebar-item"><a href="{{route('inovasi.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">List Inovation</span></a></li>
                        <li class="sidebar-item"><a href="{{url('listrevisi')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Revision</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
