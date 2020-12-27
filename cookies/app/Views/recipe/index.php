<?= $this->extend('templateshome/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Search & Iklan -->
<div class="home">
    <div class="container">
        <div class="d-flex justify-content-center">
            <img src="/img/cookies.png" class="logo" alt="">
        </div>
        <div class="d-flex justify-content-center">
            <form action="" method="get" class="form-inline" style="margin-top: 20px;">
                <input class="form-control mr-sm-2" type="search" name="keyword" id="keyword" placeholder="Cari resep/bahan/pengguna ..." aria-label="Search" style="width:500px">
                <button class="btn" type="submit" name="cari" id="tombol"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </div>
</div>
<!-- Search & Iklan -->

<!-- Slide Foto -->
<div class="iklan">
    <div class="container iklan">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/iklan1.jpg" class="d-block w-100" alt="..." style="height: 150px;">
                </div>
                <div class="carousel-item">
                    <img src="/img/iklan2.jpg" class="d-block w-100" alt="..." style="height: 150px;">
                </div>
                <div class="carousel-item">
                    <img src="/img/iklan3.jpg" class="d-block w-100" alt="..." style="height: 150px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- Slide Foto -->

<!-- Isi -->
<section class="isi">
    <div id="container">
        <div class="container">
            <!-- Belom Pengulangan -->
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach ($recipe as $r) : ?>
                    <?php if ($r->status_resep == 'approve') : ?>
                        <div class="col">
                            <div class="card">
                                <img src="/img/<?= $r->recipe_image; ?>" class="card-img-top" alt="..." style="margin-bottom: -10px;">
                                <div class="card-body">
                                    <a href="" class="judul">
                                        <h5 class="card-title" style="margin-bottom: 10px;"><?= $r->title; ?></h5>
                                    </a>
                                    <div class="d-flex justify-content-center">
                                        <img src="/img/<?= $r->user_image; ?>" alt="" style="width:30px; height:30px; border-radius:50%;" id="img-profil">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <p class="fw-bold" id="nama"><?= $r->username; ?></p>
                                    </div>
                                    <div id="dash">
                                        <p class="card-text"><?= $r->recipe_desc; ?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <i><small class="text-muted">Created at <?= ($r->created); ?></small></i>
                                </div>
                                <!-- Buat nge link ke detail -->
                                <a href="/recipe/<?= $r->recipe_slug; ?>" class="stretched-link"></a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- Batas Pengulangan -->
        </div>
    </div>
</section>
<!-- Isi -->
<?= $this->endSection(); ?>