<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-7 col-xl-5">
            <form action="/user/changepass" method="POST">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="passconfirm">Password confirm</label>
                    <input type="password" class="form-control" name="passconfirm" id="passconfirm">
                </div>
                <button class="btn btn-primary" type="submit">Change password</button>
            </form>
            <?php if(isset($validation)){ ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>