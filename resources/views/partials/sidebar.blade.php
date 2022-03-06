<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
    <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Mahasiswa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>
                Beranda
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/profil" class="nav-link">
            <i class="nav-icon fa fa-user" aria-hidden="true"></i>
            <p>
                profil
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Tabel
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/tableM" class="nav-link">
                <p>Mahasiswa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/tableD" class="nav-link">
                <p>Dosen</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/matakuliah/list" class="nav-link">
                <p>Mata kuliah</p>
                </a>
            </li>
            </ul>
        </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fa fa-graduation-cap"></i>
                <p>
                    Perkuliahan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/data-kelas" class="nav-link">
                    <p>Kelas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelas/create" class="nav-link">
                    <p>Tambah Kelas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=".#" class="nav-link">
                    <p>Jadwal Kuliah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=".#" class="nav-link">
                    <p>Tugas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=".#" class="nav-link">
                    <p>Penilaian</p>
                    </a>
                </li>
                </ul>
            </li>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>