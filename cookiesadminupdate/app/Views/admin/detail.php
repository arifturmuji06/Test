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
                    <h5 class="card-title">Ayam Goreng</h5>
                    <p class="card-text">Ayam goreng homemade</p>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary">Approve</button>
    <button type="button" class="btn btn-danger">Back</button>

</div>
<?= $this->endSection(); ?>