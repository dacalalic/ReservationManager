<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/css/template_style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
</head>

<body>
    <div id="page-container">
        <header>
            <nav>
                <div class="navbar navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="/user">
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
                        <div>
                            <span class="align-middle d-inline"><?= session()->username ?></span>
                            <div class="dropdown d-inline">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    &#9881;
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <?php if(!session()->type){ ?>
                                    <a class="dropdown-item" href="/user/upgradetobusiness">Upgrade to business</a>
                                    <?php } else { ?>
                                    <a class="dropdown-item" href="/buser/createservice">Create service</a>
                                    <?php } ?>
                                    <a class="dropdown-item" href="/user/changepass">Change the password</a>
                                    <a class="dropdown-item" href="/user/logout">Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div id="content-wrap">