<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Locals</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <form action="/serviceviewer/spectypeser" method="GET">
            <label style="padding-bottom: 0.3cm;padding-top: 0.2cm">Select types of locals :</label>
            <div class="form-group">
                <input type="radio" class="form-check-control" id="restaurant" name="type" value="restaurant">
                <label for="restaurant">Restaurants</label>
            </div>
            <div class="form-group">
                <input type="radio" class="form-check-control" id="cafe" name="type" value="cafe">
                <label for="cafe">Cafes</label>
            </div>
            <div class="form-group">
                <input type="radio" class="form-check-control" id="pub" name="type" value="pub">
                <label for="pub">Pubs</label>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <div class="row justify-content-center">
    <?php for($i = 0; $i < count($services); $i++){ ?>
        <div class="col-3" style="padding-top: 0.5cm ; padding-bottom: 0.1cm">
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