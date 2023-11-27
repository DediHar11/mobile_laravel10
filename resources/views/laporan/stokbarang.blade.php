<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Stok Barang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('load/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('load/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('load/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('load/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="text-center rounded p-4">
                <div class="align-items-center justify-content-between mb-4" align="center">
                    <h2>LAPORAN STOK BARANG</h2>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark" style="background-color:coral">
                                <th>No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Merek</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Stok</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $d)
                            <tbody>
                                <tr style="background-color:snow">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $d->nama_barang }}</td>
                                    <td>{{ $d->merek->merek }}</td>
                                    <td>{{ $d->kategori->kategori }}</td>
                                    <td>{{ $d->keterangan }}</td>
                                    <td>{{ $d->stok }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->



    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('load/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('load/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('load/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('load/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('load/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('load/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('load/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('load/js/main.js') }}"></script>
    <script type="text/javascript">
        window.print()
    </script>
</body>

</html>
