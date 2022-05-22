
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.14
* @link https://tabler.io
* Copyright 2018-2020 The Tabler Authors
* Copyright 2018-2020 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Login - BKL Sales Book</title>
        <!-- CSS files -->
        <link href="<?php echo base_url();?>assets/dist/css/tabler.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/dist/css/tabler-flags.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/dist/css/tabler-payments.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/dist/css/demo.min.css" rel="stylesheet"/>
        <style>
            body {
      	        display: none;
                background-image: url(<?php echo base_url();?>assets/dist/img/login-bg.jpg);
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body class="antialiased border-top-wide border-primary d-flex flex-column">
        <div class="flex-fill d-flex flex-column justify-content-center py-4">
            <div class="container-tight py-6">
                <div class="text-center mb-4">
                    <a href="."><img src="<?php echo base_url();?>assets/dist/img/logo-side.png" height="75" alt="logo-main"></a>
                    <h3 style="color : #DD5B82;">Book and Graph All Your Company Data</h3>
                </div>
                <form class="card card-md" action="<?php echo base_url(); ?>auth/ceklogin" method="POST" autocomplete="off">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4" style="color : #5F1854;">Selamat datang! Silahkan masuk.</h2>
                        <h4><?php echo $this->session->flashdata('msg');?></h4>
                        <div class="mb-3">
                            <label class="form-label" style="color : #5F1854;">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                        </div>
                        <div class="mb-2">
                            <label class="form-label" style="color : #5F1854;">
                                Password
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" name ="password" class="form-control" autocomplete="off" placeholder="Masukkan password">
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100 mb-3" style="background-color : #5F1854;">Masuk</button>
                            Belum memiliki akun? Tanyakan kepada staff, boss, dan administrator agar segera dibuatkan!
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Libs JS -->
        <script src="<?php echo base_url();?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Tabler Core -->
        <script src="<?php echo base_url();?>assets/dist/js/tabler.min.js"></script>
        <script>
        document.body.style.display = "block"
        </script>
    </body>
</html>