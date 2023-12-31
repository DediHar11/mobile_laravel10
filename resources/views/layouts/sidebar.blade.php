<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">INVENTARIS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('load/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                <span>{{Auth::user()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-archive me-2"></i>
                    Master</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('merek')}}" class="dropdown-item">Merek</a>
                    <a href="{{route('kategori')}}" class="dropdown-item">Kategori</a>
                    <a href="{{route('barang')}}" class="dropdown-item">Barang</a>
                    <a href="{{route('pengguna')}}" class="dropdown-item">Pengguna</a>
                </div>

            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-window-restore me-2"></i>Transaksi</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('barangmasuk')}}" class="dropdown-item">Barang Masuk</a>
                    <a href="{{route('barangkeluar')}}" class="dropdown-item">Barang Keluar</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Laporan</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('barang_masuk')}}" class="dropdown-item">Laporan Barang Masuk</a>
                    <a href="{{route('barang_keluar')}}" class="dropdown-item">Laporan Barang Keluar</a>
                    <a href="{{route('stok_barang')}}" target="_blank" class="dropdown-item">Laporan Stok Barang</a>
                </div>
            </div>

            {{-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}

        </div>
    </nav>
</div>
<!-- Sidebar End -->
