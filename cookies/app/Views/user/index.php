<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Page</h1>

    <!-- User Detail -->
    <h2 class="h3 mb-4 text-gray-800">User Detail</h2>
    <div class="row">
        <div class="col-sm-4">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img style="width: 200px; height:auto;" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= user()->fullname; ?></h5>
                            <p class="card-text"><small class="text-muted"><?= user()->username; ?></small></p>
                            <p class="card-text"><?= user()->about; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                    <p class="card-text">Get in touch</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= user()->email; ?></li>
                    <li class="list-group-item"><?= user()->phone; ?></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Address</h5>
                    <p class="card-text"><?= user()->addres; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">
                                <div id="map">

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>



</div>
<?= $this->endSection(); ?>