<?= $this->extend('templateshome/index'); ?>

<?= $this->section('page-content'); ?>
<section class="isi">
    <div id="detail">
        <?php foreach ($recipe as $r) : ?>
            <div class="container">
                <!-- gambar -->
                <div class="gambar">
                    <img src="/img/<?= $r->recipe_image; ?>" alt="" class="card-img">
                </div>
                <!-- gambar -->
                <!-- judul -->
                <div class="judul">
                    <h1 class="fw-bold"><?= $r->title; ?></h1>
                </div>
                <!-- judul -->
                <!-- profil pembuat -->
                <div class="profil">
                    <img src="/img/<?= $r->user_image; ?>" alt="" class="img-profil">
                    <p class="fw-bold" id="nama"><?= $r->fullname; ?></p>
                    <p style="margin-top: -15px;"><i class="fas fa-map-marker-alt"></i> <?= $r->addres; ?></p>
                </div>
                <!-- profil pembuat -->
                <!-- deskripsi -->
                <div class="deskripsi">
                    <p><?= $r->recipe_desc; ?></p>
                </div>
                <!-- deskripsi -->
                <!-- durasi -->
                <div class="durasi">
                    <p><i class="far fa-clock" style="color:  rgb(160, 160, 160);"></i> <?= $r->duration; ?> menit</p>
                </div>
                <!-- durasi -->
                <!-- porsi -->
                <div class="porsi">
                    <p><i class="fas fa-utensils" style="color: rgb(160, 160, 160);"></i> <?= $r->serving; ?> orang</p>
                </div>
                <!-- porsi -->
                <!-- bahan -->
                <div class="bahan">
                    <h4>Bahan-bahan</h4>
                    <!-- pengulangan -->
                    <div class="bahan-bahan">
                        <p><?= $r->ingredients; ?></p>
                    </div>
                    <!-- pengulangan -->
                </div>
                <!-- bahan -->
                <!-- langkah -->
                <div class="langkah">
                    <h4>Langkah</h4>
                    <!-- pengulangan -->
                    <div class="langkah-langkah">
                        <p><?= $r->steps; ?></p>
                    </div>
                    <!-- pengulangan -->
                </div>
                <!-- langkah -->
                <!-- tanggal upload -->
                <div class="tgl-upload">
                    <p>26 Desember 2020</p>
                </div>
                <!-- tanggal upload -->
                <!-- komentar -->
                <div class="komentar">
                    <h4><i class="fas fa-comment" style="color:  rgb(160, 160, 160);"></i> Komentar</h4>
                    <div class="d-flex justify-content-start" style="margin-top: 10px;">
                        <img src="/img/<?= user()->user_image; ?>" alt="" style="width: 38px; height:38px; border-radius:50%;margin-right:5px;">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tulis disini ..." aria-label="" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" style="box-shadow: none;">Kirim <i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- tampil komentar -->
                    <div class="tampil-komentar">
                        <p style="float: left;margin-left:15px;margin-right:24px;margin-top:2px;">|</p>
                        <img src="/img/nathan.jpg" alt="" style="width: 38px; height:38px; border-radius:50%;margin-right:5px; float:left;">
                        <div class="isi-komentar">
                            <p><b>NathanielGanteng</b></p>
                            <p style="margin-top:-20px;color:rgb(160, 160, 160);"><i class="far fa-clock"></i> 5 bulan yang lalu</p>
                            <p style="margin-top: -10px;"><i>"Resep nya mantap buun"</i></p>
                        </div>
                    </div>
                    <div class="tampil-komentar">
                        <p style="float: left;margin-left:15px;margin-right:24px;margin-top:2px;">|</p>
                        <img src="/img/tio.jpg" alt="" style="width: 38px; height:38px; border-radius:50%;margin-right:5px; float:left;">
                        <div class="isi-komentar">
                            <p><b>CEO Mangoyovi</b></p>
                            <p style="margin-top:-20px;color:rgb(160, 160, 160);"><i class="far fa-clock"></i> 2 bulan yang lalu</p>
                            <p style="margin-top: -10px;"><i>"Mantap buun resep nya mudah di recook"</i></p>
                        </div>
                    </div>
                    <!-- tampil komentar -->
                </div>
                <!-- komentar -->
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection(); ?>