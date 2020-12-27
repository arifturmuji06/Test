<?= $this->extend('templateshome/index'); ?>

<?= $this->section('page-content'); ?>
<section class="isi">
    <div id="detail">
        <div class="container">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h2 class="my-3">Tambah Resep</h2>

            <form action="/recipe/update/<?= $recipes['recipe_id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="recipe_id" value="<?= $recipes['recipe_id']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $recipes['recipe_image']; ?>">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= User()->id; ?>">
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Nama Resep</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= (old('title')) ? old('title') : $recipes['title'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('title'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rdesc" class="col-sm-2 col-form-label">Keterangan Resep</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('recipe_desc')) ? 'is-invalid' : ''; ?>" id="rdesc" name="rdesc" rows="3" value=""><?= (old('recipe_desc')) ? old('recipe_desc') : $recipes['recipe_desc'] ?></textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="serving" class="col-sm-2 col-form-label">Porsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('serving')) ? 'is-invalid' : ''; ?>" id="serving" name="serving" value="<?= (old('serving')) ? old('serving') : $recipes['serving'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="duration" class="col-sm-2 col-form-label">Durasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('duration')) ? 'is-invalid' : ''; ?>" id="duration" name="duration" value="<?= (old('duration')) ? old('duration') : $recipes['duration'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ingredients" class="col-sm-2 col-form-label">Bahan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('ingredients')) ? 'is-invalid' : ''; ?>" id="ingredients" name="ingredients" rows="3" value=""><?= (old('ingredients')) ? old('ingredients') : $recipes['ingredients'] ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="steps" class="col-sm-2 col-form-label">Langkah-angkah</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('steps')) ? 'is-invalid' : ''; ?>" id="steps" name="steps" rows="3" value=""><?= (old('steps')) ? old('steps') : $recipes['steps'] ?></textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/defaultreseppic.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="Gambar"><?= $recipes['recipe_image']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update Resep</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>