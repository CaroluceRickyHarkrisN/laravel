<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website LK | Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
}
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="stylex.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="trix.css">
    <script type="text/javascript" src="trix.js"></script>
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Dashboard </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 " type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Log out</a>
        </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="AdminPengumuman">
                    <span data-feather="file-text"></span>
                    Pengumuman
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="InputPoin">
                    <span data-feather="shopping-cart"></span>
                    Input Poin 
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="Kepanitiaan">
                    <span data-feather="users"></span>
                    Program Kepanitiaan
                </a>
            </ul>
    </div>
    </nav>
    <div class="container-fluid py-5">
        <h2 text align="center">Pengumuman</h2>
        <div class="container table-responsive px-2 pt-3 sm-6">
        <table class="table table-striped text-center table-bordered border-dark table table-hover">
            <thead class="table-primary table-bordered border-dark">
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th> Isi </th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <th>1</th>
                <th>Pengumuman 1</th>
                <th>Mary</th>
                <th>10/08/2022</th>
                <th><a href="https://drive.google.com/file/d/1r7G1SRgnNs1CiVVdKilz0Y0Eeq5IbSc6/view" target="_blank"><span data-feather="eye"></span></th></a>
                <th><span data-feather="edit"></span></th>
            </tr>
            <tr>
                <th>2</th>
                <th>Pengumuman 2</th>
                <th>John</th>
                <th>11/08/2022</th>
                <th><a href="https://drive.google.com/file/d/1r7G1SRgnNs1CiVVdKilz0Y0Eeq5IbSc6/view" target="_blank"><span data-feather="eye"></span></th></a>
                <th><span data-feather="edit"></span></th>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>