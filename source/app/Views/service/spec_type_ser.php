<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 style="padding-top:1cm; text-align: center;"><?= ucfirst($type.'s') ?></h2>
        </div>
        <?php for($i = 0; $i < count($services); $i++){ ?>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $services[$i]["Name"] ?></h5>
                    <a href="/serviceviewer/singleservice?id=<?= $services[$i]["SerId"] ?>" class="card-link">
                        View service
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>