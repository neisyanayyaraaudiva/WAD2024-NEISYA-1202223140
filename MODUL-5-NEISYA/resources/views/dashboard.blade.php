<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .bg-custom {
            background-color: rgba(255, 105, 180, 0.8) !important; /* Soft Pink with transparency */
            border-radius: 0 0 15px 15px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 0.9rem;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa !important;
        }

        .dropdown-menu {
            background-color: #ffb6c1;
            z-index: 1050; /* Pastikan dropdown terlihat di atas elemen lain */
            min-width: 200px; /* Lebar dropdown lebih memadai */
        }

        .dropdown-item {
            color: black !important;
        }

        .dropdown-item:hover {
            background-color: #ffc0cb;
        }

        .navbar {
            padding: 0.5rem 1rem;
        }

        .container-fluid {
            padding-top: 60px; /* Memberikan ruang untuk navbar */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">EAD University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dosenDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Dosen</a>
                        <ul class="dropdown-menu" aria-labelledby="dosenDropdown">
                            <li><a class="dropdown-item" href="{{ route('dosen.create') }}">Tambah Dosen</a></li>
                            <li><a class="dropdown-item" href="{{ route('dosen.index') }}">Daftar Dosen</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="mahasiswaDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Mahasiswa</a>
                        <ul class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                            <li><a class="dropdown-item" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a></li>
                            <li><a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="mainContent" style="overflow-y: auto;">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
