<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (logged_in()) : ?>
                    <a href="/recipe/create" class="btn btn-primary mt-3">Tambah Data Komik</a>
                <?php else : ?>
                    <a href="/login" class="btn btn-primary mt-3">Tambah Data Komik</a>
                <?php endif ?>

                <h1 class="mt-2">Daftar Komik</h1>
                <?php //if (session()->getFlashdata('pesan')) : 
                ?>
                <!-- <div class="alert alert-success" role="alert"> -->
                <?php //session()->getFlashdata('pesan'); 
                ?>
                <!-- </div> -->
                <?php //endif; 
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">id resep</th>
                            <th scope="col">id user</th>
                            <th scope="col">judul</th>
                            <th scope="col">porsi</th>
                            <th scope="col">durasi</th>
                            <th scope="col">bahan</th>
                            <th scope="col">langkah2</th>
                            <th scope="col">slug</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($recipe as $r) : ?>
                            <?php if ($r['status_resep'] == 'approve') : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $r['recipe_id']; ?></td>
                                    <td><?= $r['id']; ?></td>
                                    <td><?= $r['title']; ?></td>
                                    <td><?= $r['serving']; ?></td>
                                    <td><?= $r['duration']; ?></td>
                                    <td><?= $r['ingredients']; ?></td>
                                    <td><?= $r['steps']; ?></td>
                                    <td><?= $r['slug']; ?></td>
                                    <td>
                                        <a href="/recipe/<?= $r['slug']; ?>" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>