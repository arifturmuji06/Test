<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Recipe Page</h1>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Resep title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Edit Resep</a>
            <td><button type="button" class="btn btn-danger">Delete Resep</button></td>
        </div>
    </div>

    <!-- Tabel list resep yang sudah live -->
    <h2 class="h3 mb-4 text-gray-800">List Resep</h2>
    <div class="col-lg-8">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nasi Goreng</td>
                        <td>1 Porsi</td>
                        <td><button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button></td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>