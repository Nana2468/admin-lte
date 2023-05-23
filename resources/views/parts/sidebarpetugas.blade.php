<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="mx-3">

        <a href="{{ url('starter') }}" class="brand-link">
            <i class="nav-icon far bi bi-wallet"></i>
            <span class="brand-text font-weight-medium text-lg">e-SPP</span>
        </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('petugas') }}" class="nav-link active">
                        <i class="far bi bi-house-door-fill nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">TRANSAKSI</li>
                <li class="nav-item">
                    <a href="{{ url('starter') }}" class="nav-link">
                        <i class="far bi bi-credit-card nav-icon"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('starter') }}" class="nav-link">
                        <i class="far bi bi-folder-fill nav-icon"></i>
                        <p>History Pembayaran</p>
                    </a>
                </li>
                <li class="nav-header">PENGATURAN</li>
                <li class="nav-item">
                    <a href="{{ url('starter') }}" class="nav-link">
                        <i class="far bi bi-door-closed-fill nav-icon"></i>
                        <p>Log Out</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('starter') }}" class="nav-link">
                        <i class="far bi bi-exclamation-octagon-fill nav-icon"></i>
                        <p>About</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->

</aside>
<!-- /.control-sidebar -->
