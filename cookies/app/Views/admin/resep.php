<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Recipe Page</h1>


    <!-- Tabel list resep yang butuh approval -->
    <h2 class="h3 mb-4 text-gray-800">Need Approval</h2>


    <!-- Tabel list resep yang sudah live -->
    <h2 class="h3 mb-4 text-gray-800">Live Recipe</h2>


</div>
<?= $this->endSection(); ?>