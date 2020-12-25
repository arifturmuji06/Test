<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Page</h1>

    <!-- Tabel list user -->
    <h2 class="h3 mb-4 text-gray-800">User List</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><a href="<?= base_url('admin/' . $user->id); ?>" class="btn btn-info">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>