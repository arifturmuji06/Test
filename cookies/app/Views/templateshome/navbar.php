<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <div class="d-flex justify-content-start">
            <a class="navbar-brand" href="/recipe/">
                <img src="/img/cookies.png" alt="" width="50">
            </a>
            <form action="" method="get" class="form-inline">
                <input class="form-control mr-sm-0" type="search" name="keyword" id="keyword" placeholder="Cari resep/bahan/pengguna ..." style="width:300px;" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit" name="cari" id="tombol"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="d-flex justify-content-end">
            <div class="col-8">
                <a href="/recipe/create">
                    <button type="button" class="btn btn-warning fw-bold" style="color: white;"><span class="fas fa-plus"></span> Tambah Resep</button>
                </a>
            </div>
            <?php if (logged_in()) : ?>
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username; ?></span>
                            <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" style="width: 30px; height:30px;">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="/user">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                My Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
            <?php else : ?>
                <div class="col-8">
                    <a href="/login">
                        <button type="button" class="btn btn-warning fw-bold" style="color: white;"><span class="fas fa-sign-in-alt"></span> Login</button>
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</nav>