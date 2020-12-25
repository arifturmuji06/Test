<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Recipe Page</h1>


    <!-- Tabel list resep yang butuh approval -->
    <h2 class="h3 mb-4 text-gray-800">Need Approval</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Resep</th>
                <th scope="col">Serving</th>
                <th scope="col">Duration</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ayam Goreng</td>
                <td>1-5 serving</td>
                <td>2 jam</td>
                <td><button type="button" class="btn btn-primary">Approve</button>
                    <button type="button" class="btn btn-primary">Detail</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Nasi Goreng</td>
                <td>2-3 serving</td>
                <td>30 menit</td>
                <td><button type="button" class="btn btn-primary">Approve</button>
                    <button type="button" class="btn btn-primary">Detail</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Sayur Lodeh</td>
                <td>2-3 serving</td>
                <td>70 menit</td>
                <td><button type="button" class="btn btn-primary">Approve</button>
                    <button type="button" class="btn btn-primary">Detail</button></td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary">Approve All</button>

    <!-- Tabel list resep yang sudah live -->
    <h2 class="h3 mb-4 text-gray-800">Live Recipe</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Resep</th>
                <th scope="col">Serving</th>
                <th scope="col">Duration</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ayam Goreng</td>
                <td>1-5 serving</td>
                <td>2 jam</td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Nasi Goreng</td>
                <td>2-3 serving</td>
                <td>30 menit</td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Sayur Lodeh</td>
                <td>2-3 serving</td>
                <td>70 menit</td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>

</div>
<?= $this->endSection(); ?>