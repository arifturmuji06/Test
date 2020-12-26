<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <!-- Form -->
    <h2 class="h3 mb-4 text-gray-800">Form Edit User</h2>
    <div class="row">
        <form action="/komik/save" method="post" enctype="multipart/form-data">

            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Fullname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">

                </div>
            </div>

            <div class="form-group row">
                <label for="penulis" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">About</label>
                <div class="col-sm-10">


                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Lat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Long</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                </div>
            </div>

            <div class=" form-group row">
                <label for="sampul" class="col-sm-2 col-form-label">User Image</label>
                <div class="col-sm-2">
                    <img src="/img/default.jpg" class="img-thumbnail img-preview" alt="">
                </div>

                <div class="col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">


                        <label class="custom-file-label" for="Sampul">Pilih Gambar</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>