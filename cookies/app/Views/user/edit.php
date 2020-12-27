<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <!-- Form -->
    <h2 class="h3 mb-4 text-gray-800">Form Edit User</h2>

    <div class="row">
        <div class="col-lg-8">

            <form action="<?= base_url(); ?>/user/update/<?= user()->id; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= user()->id; ?>">
                <input type="hidden" name="fotoLama" value="<?= user()->user_image; ?>">
                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" autofocus value="<?= (old('fullname')) ? old('fullname') : $user->fullname ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('fullname'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= user()->username; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="about" class="col-sm-2 col-form-label">About</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('about')) ? 'is-invalid' : ''; ?>" id="about" name="about" rows="3" value=""><?= (old('about')) ? old('about') :  $user->about  ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="addres" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('addres')) ? 'is-invalid' : ''; ?>" id="addres" name="addres" value="<?= (old('addres')) ? old('addres') :  $user->addres  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= user()->email; ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" id="phone" name="phone" value="<?= (old('phone')) ? old('phone') :  $user->phone  ?>">
                    </div>
                </div>

                <div class=" form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Profile Picture</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>/img/<?= $user->user_image; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <label class="custom-file-label" for="Foto"><?= $user->user_image; ?></label>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <p>*this is optional, for showing your address location</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lat" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lat')) ? 'is-invalid' : ''; ?>" id="lat" name="lat" value="<?= (old('lat')) ? old('lat') :  $user->lat  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="long" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('long')) ? 'is-invalid' : ''; ?>" id="long" name="long" value="<?= (old('long')) ? old('long') :  $user->long  ?>">
                    </div>
                </div>



                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


</div>
<?= $this->endSection(); ?>