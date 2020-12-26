<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Page</h1>

    <!-- User Detail -->
    <h2 class="h3 mb-4 text-gray-800">User Detail</h2>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama User</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, perspiciatis provident autem exercitationem doloribus et ipsa non quas quos dignissimos dolor sapiente necessitatibus corrupti natus, quibusdam ducimus culpa perferendis repellendus..</p>
        </div>
        <ul class="list-group list-group-flush">

            <li class="list-group-item">Email</li>
            <li class="list-group-item">Alamat</li>

        </ul>
        <div class="card-body">


            <a href="#" class="btn btn-primary">Edit Profile</a>
            <td><button type="button" class="btn btn-danger">Delete</button></td>

        </div>
        <?= $this->endSection(); ?>