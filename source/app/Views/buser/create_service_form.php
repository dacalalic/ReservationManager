<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="/buser/createservice" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Service name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="description">Service description</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="default">-</option>
                                    <option value="restaurant">Restaurant</option>
                                    <option value="cafe">Cafe</option>
                                    <option value="pub">Pub</option> 
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="draft">Add draft</label>
                                <input class="form-control" type="file" id="draft" name="draft">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numofpos">Number of positions</label>
                    <input type="number" class="form-control" name="numofpoints" id="numofpos">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
            <?php if(isset($validation)){ ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
            <?php } ?>
        </div>
    </div>
</div>