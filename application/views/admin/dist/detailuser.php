<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        .avatar {
            vertical-align: middle;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-top: 20px;
            border: 2px solid black;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="admin">YUK NGODING ADMIN</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href=""><?= $this->session->userdata('username') ?></a>
                    <div class="dropdown-divider"></div>
                    <?php if ($this->session->userdata('username') == null) : ?>
                        <a class="dropdown-item" href="<?= base_url('auth') ?>">Login</a>
                    <?php else : ?>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav" style="background-color:#E6E6E6">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= base_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="<?= base_url('admin/user_data') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            User
                        </a>
                        <a class="nav-link collapsed" href="<?= base_url('admin/dataQuiz') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quiz
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= $this->session->userdata('username') ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">DETAIL USER</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <?php foreach ($dataUser as $row) : ?>
                    <div class="bg-white" style="padding:100px;">
                        <div class="row">
                            <div class="span2">
                                <?php if ($row['avatar'] != NULL) : ?>
                                    <img src="<?= $row['avatar'] ?>" alt="" class="img-rounded">
                                <?php else : ?>
                                    <img src="<?= base_url('assets/images/profile.png') ?>" alt="" class="img-rounded">
                                <?php endif; ?>
                            </div>
                            <div class="span4">
                                <blockquote>
                                    <p><?= $row['fullname'] ?></p>
                                    <small><cite title="Source Title"><?= $row['username'] ?></cite></small>
                                </blockquote>
                                <p>
                                    <i class="icon-envelope"></i><?= $row['password'] ?> <br>
                                    <i class="icon-globe"></i><?= $row['role'] ?>
                                </p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger mt-5 float-right" style="margin-right:-75px;">Back</button>
                    </div>
                <?php endforeach; ?>
            </div>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; YUKNGODING 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>

</html>