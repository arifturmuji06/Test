<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-4 text-gray-800">Recipe Page</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <!-- Tabel list resep yang butuh approval -->
    <h4 class="h4 mb-4 text-gray-800">Need Approval</h4>

    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Resep</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($recipes as $recipe) : ?>
                        <?php if ($recipe['status_resep'] != 'approve') : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $recipe['title']; ?></td>
                                <td style="width: 545px;"><?= $recipe['recipe_desc']; ?></td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <form action="/admin/approve" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <div class="form-group">
                                                        <input type="hidden" id="recipe_id" class="recipe_id" name="recipe_id" value="<?= $recipe['recipe_id']; ?>">
                                                        <button type="submit" class="btn btn-primary">Approve</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col">
                                                <form action="/admin/deleteresep" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <div class="form-group">
                                                        <input type="hidden" id="recipe_id" class="recipe_id" name="recipe_id" value="<?= $recipe['recipe_id']; ?>">
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <form action="/admin/approveall" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Approve All</button>
                    </div>
                </div>
            </form>
            <br>
            <br>
        </div>
    </div>

    <!-- Tabel list resep yang sudah live -->
    <h4 class="h4 mb-4 text-gray-800">Live Recipe</h4>

    <div class="row">
        <div class="col">
            <form action="" method="post" class="form-inline" style="margin-top: 20px;">
                <input class="form-control mr-sm-2" type="text" name="keyword" id="keyword" placeholder="Cari resep ..." aria-label="Search" style="width:500px">
                <button class="btn" type="submit" name="submit"><i class="fas fa-search"></i> Cari</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Resep</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($recipes as $recipe) : ?>
                        <?php if ($recipe['status_resep'] == 'approve') : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $recipe['title']; ?></td>
                                <td style="width: 545px;"><?= $recipe['recipe_desc']; ?></td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <a href="/recipe/<?= $recipe['slug']; ?>">
                                                    <button type="submit" class="btn btn-success">Detail</button>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <form action="/admin/deleteresep" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" id="recipe_id" class="recipe_id" name="recipe_id" value="<?= $recipe['recipe_id']; ?>">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>