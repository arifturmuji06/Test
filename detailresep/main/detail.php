<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Cookies Recipe</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Ayam Goreng mail</h1>
                <div class="text-center">
                    <img src="img/ayam.jpg" class="rounded" width="300" alt="...">
                </div>
            </div>
        </div>
        <div class="kategori"> Kategori Resep</div>
        <a class="navbar-brand" href="home.php">Ayam </a>
        <hr>
        <div class="row" id="masakan">
        </div>
        <h1 class="text-center">Bahan Masakan : </h1>
        <div class="Bahan">
            <ol>
                <li>1 Kg ayam</li>
                <li>100 g kunir</li>
                <li>1 siung bawang</li>
            </ol>
        </div>
        <hr>
        <h1 class="text-center">Cara memasak</h1>
        <div class="Detail">
            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam quibusdam vel est expedita ullam ad ut animi, culpa dignissimos asperiores alias. Laboriosam vero velit nobis nemo, suscipit quas est eveniet.</h3>
        </div>
        <hr>
        <h1 class="text-center">Dibuat Oleh</h1>
        <div class="text-center">
            <img src="img/nancy.jpeg" width="300" alt="">
        </div>
        <h3 class="text-center">Nancy</h3>
        <div class="text-center">
            <button type="button" class="btn btn-secondary">Profil</button>
        </div>
        <hr>
        <h3 class="text-center">Komentar</h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Kirim</button>
            </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role-"document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class-"modal-title" id="exampleModallabel">Cari Resep</h5>
                    <button type="button" class="close" data-dismiss -"modal" aria-label-"Close">
                        <span aria hidden-"true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
    <script src="js/script.js"></script>

</body>

</html>