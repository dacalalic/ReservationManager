<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="template_style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-7 col-xl-5">
                <form action="/login" method="POST">
                    <div class="form-group">
                        <label for="username">Username or email</label>
                        <input type="text" class="form-control" id="userName" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
                <?php if(isset($validation)){ ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>