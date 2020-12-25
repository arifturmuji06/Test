<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Arif Turmuji</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Home</a>
                    <a class="nav-item nav-link" href="/pages/about">About</a>
                    <a class="nav-item nav-link" href="/pages/contact">Contact</a>
                    <a class="nav-item nav-link" href="/komik">Komik</a>
                    <a class="nav-item nav-link" href="/orang">Orang</a>
                </div>
                <?php if (logged_in()) : ?>
                    <a class="nav-item nav-link" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-item nav-link" href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Data Komik</h2>

                <form action="/recipe/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Nama Resep</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= old('title'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('title'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_user" class="col-sm-2 col-form-label">id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_user" name="id_user" value="<?= User()->id; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="serving" class="col-sm-2 col-form-label">Porsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="serving" name="serving" value="<?= old('serving'); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="duration" class="col-sm-2 col-form-label">Durasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="duration" name="duration" value="<?= old('duration'); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ingredients" class="col-sm-2 col-form-label">Bahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ingredients" name="ingredients" value="<?= old('ingredients'); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="steps" class="col-sm-2 col-form-label">Langkah-angkah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="steps" name="steps" value="<?= old('steps'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-2">
                            <img src="/img/default.png" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?php//= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('sampul'); ?>
                                </div>
                                <label class="custom-file-label" for="Sampul">Pilih gambar..</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Resep</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script>
        function previewImg() {
            const sampul = document.querySelector('#sampul');
            const sampulLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            sampulLabel.textContent = sampul.files[0].name;

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>