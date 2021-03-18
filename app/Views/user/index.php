<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My profile</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('/img/' . user()->user_image) ?>" alt="<?= user()->username; ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= user()->username; ?></h5>
                    <ul class="list-group list-group-flush">
                        <?php if (user()->fullname) : ?>
                            <li class="list-group-item"><?= user()->fullname; ?></li>
                        <?php endif; ?>
                        <li class="list-group-item"><?= user()->email;; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>