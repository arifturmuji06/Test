<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Recipe Page</h1>


    <!-- Detail resep yang butuh approval -->
    <h2 class="h3 mb-4 text-gray-800">Detail Recipe</h2>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $recipes->title; ?></h5>
                    <p class="card-text"><?= $recipes->recipe_desc; ?></p>
                    <hr>
                    <h5>Bahan: </h5>
                    <h6><?= $recipes->ingredients; ?></h6>
                    <hr>
                    <h5>Cara Buat : </h5>
                    <h6><?= $recipes->steps; ?></h6>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary">Approve</button>
    <button type="button" class="btn btn-danger"><a href="/admin/resep">Back</a></button>



</div>
<?= $this->endSection(); ?>