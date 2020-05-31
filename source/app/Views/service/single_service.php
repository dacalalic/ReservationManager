<div class="container">
    <input type="hidden" id="serviceId" value="<?= $serId ?>">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2><?= $name ?></h2>
        </div>
        <div class="col-2">
            <p><?= ucfirst($type) ?></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <p><?= $desc ?></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <?php if ($draft) { ?>
                <img src="data:image/png;base64,<?= base64_encode($draft) ?>">
            <?php } ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12" id="info">
        </div>
    </div>
    <?php if(session()->isLoggedIn){ ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <?php for ($i = 0; $i < $numofpoints; $i++) { ?>
                <div class="card">
                    <div class="card-header">
                        <h2>
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#res<?= $i ?>">
                                Point <?= $i + 1 ?>
                            </button>
                        </h2>
                    </div>

                    <div class="collapse" id="res<?= $i ?>">
                        <div class="card-body">
                            <h5>Create reservation</h5>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="time">Time</label>
                                            <input type="time" class="form-control" id="time<?= $i ?>" name="time">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="date">Time</label>
                                            <input type="date" class="form-control" id="date<?= $i ?>" name="date">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="pointId" value="<?= $i ?>">
                                <button type="button" class="btn btn-primary resbtn">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>
<script src="<?= base_url() ?>/js/send_reservation.js" defer></script>