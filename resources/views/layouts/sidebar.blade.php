<aside class="main-sidebar hidden-print ">
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            {{-- <li class="nav-level">--- Navigation</li> --}}
            <li class="active treeview">
                <a class="waves-effect waves-dark" href="{{url('/dashboard')}}">
                    <i class="icon-speedometer"></i><span> Dashboard</span>
                </a>
            </li>
            <li class="nav-level">----Menu</li>
            <li class="treeview">
                <a class="waves-effect waves-dark" href="{{route('datasiswa.index')}}">
                    <i class="icon-docs"></i><span>Data Jumlah Siswa</span>
                </a>
            </li>

            <li class="treeview">
                <a class="waves-effect waves-dark" href="{{route('peramalan.index')}}">
                    <i class="icon-chart"></i><span>Peramalan</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
