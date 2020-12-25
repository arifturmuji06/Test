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
                <a href="/recipe" class="btn btn-primary mt-3">Tambah Data Komik</a>
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
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $recipe['recipe_id']; ?></td>
                                <td><?= $recipe['id']; ?></td>
                                <td><?= $recipe['title']; ?></td>
                                <td><?= $recipe['serving']; ?></td>
                                <td><?= $recipe['duration']; ?></td>
                                <td><?= $recipe['ingredients']; ?></td>
                                <td><?= $recipe['steps']; ?></td>
                                <td><?= $recipe['slug']; ?></td>
                                <td>
                                    <a href="/recipe/<?= $recipe['slug']; ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>