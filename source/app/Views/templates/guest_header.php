<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/css/template_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
    <script src="<?= base_url() ?>/js/services.js" defer></script>
</head>

<body>
    <div id="page-container">
        <header>
            <nav>
                <div class="navbar navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="/">
                            <img src="<?= base_url() ?>/images/waiter.png" width="50px" height="50px">
                            Reservation manager
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">                            
                                <a class="nav-link" href="/serviceviewer/allservices" id="services">
                                    <img src="<?= base_url() ?>/images/desk.png" width="50px" height="50px">
                                    Services
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <a class="btn btn-primary mr-2" href="/login">Log in</a>
                            <a class="btn btn-outline-secondary" href="/signin">Sign in</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div id="content-wrap">