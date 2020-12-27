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
            <div cla ss="col">
                <a href="/recipe/create" class="btn btn-primary mt-3">Tambah Data Komik</a>

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
                            <th scope="col">judul</th>
                            <th scope="col">gambar resep</th>
                            <th scope="col">desc resep</th>
                            <th scope="col">status resep</th>
                            <th scope="col">slug resep</th>
                            <th scope="col">id user</th>
                            <th scope="col">username</th>
                            <th scope="col">user image</th>
                            <th scope="col">user slug</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($recipe as $r) : ?>
                            <?php if ($r->status_resep == 'approve') : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $r->recipe_id; ?></td>
                                    <td><?= $r->title; ?></td>
                                    <td>
                                        <img src="img/<?= $r->recipe_image; ?>" alt="">
                                    </td>
                                    <td><?= $r->recipe_desc; ?></td>
                                    <td><?= $r->status_resep; ?></td>
                                    <td><?= $r->recipe_slug; ?></td>
                                    <td><?= $r->userid; ?></td>
                                    <td><?= $r->username; ?></td>
                                    <td>
                                        <img src="<?= base_url(); ?>/img/<?= $r->user_image; ?>" alt="">
                                    </td>
                                    <td><?= $r->user_slug; ?></td>
                                    <td>
                                        <a href="/recipe/<?= $r->recipe_slug; ?>" class="btn btn-success">Detail</a>
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