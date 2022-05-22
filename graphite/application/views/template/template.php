<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>BKL Sales Report</title>
    <!-- CSS files -->
    <link href="<?php echo base_url();?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/dist/libs/flatpickr/dist/flatpickr.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/dist/css/demo.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <style>
      body {
        display: none;
      }

      .help-block{
        color: red;
      }
      .flatpickr-current-month{
        font-size:120%;
      }
    </style>
	<!-- Libs JS -->
	  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/libs/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url();?>assets/dist/libs/flatpickr/dist/flatpickr.min.js"></script>

	<!-- Tabler Core -->
    <script src="<?php echo base_url();?>assets/dist/js/tabler.min.js"></script>
  </head>
  <body class="antialiased" style="background-color: #5F1854">
    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark" style="background-color: #3B0944">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="<?php echo base_url();?>assets/dist/img/logo-side.png" width="auto" height="auto" alt="logo-side" class="navbar-brand-image">
        </a>
        <div class="navbar-nav flex-row d-lg-none">
          <div class="nav-item dropdown d-none d-md-flex mr-3">
            <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
              <span class="badge bg-red"></span>
            </a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="navbar-nav pt-lg-3">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>dashboard" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                </span>
                <span class="nav-link-title">
                  Dashboard
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>d_penjualan" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="12" width="6" height="8" rx="1" /><rect x="9" y="8" width="6" height="12" rx="1" /><rect x="15" y="4" width="6" height="16" rx="1" /><line x1="4" y1="20" x2="18" y2="20" /></svg>
                </span>
                <span class="nav-link-title">
                  Detail Penjualan
                </span>
              </a>
            </li>
            <?php if($this->session->userdata('level')=="administrator" || $this->session->userdata('level')=="staff"){ ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><rect x="9" y="3" width="6" height="4" rx="2" /><line x1="9" y1="12" x2="9.01" y2="12" /><line x1="13" y1="12" x2="15" y2="12" /><line x1="9" y1="16" x2="9.01" y2="16" /><line x1="13" y1="16" x2="15" y2="16" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Data Master
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="<?php echo base_url();?>barang" >
                        Daftar Produk
                      </a>
                      <a class="dropdown-item" href="<?php echo base_url();?>lokasi" >
                        Daftar Lokasi
                      </a>
                      <a class="dropdown-item" href="<?php echo base_url();?>penjualan" >
                        Laporan Penjualan
                      </a>
                      <a class="dropdown-item" href="<?php echo base_url();?>user" >
                        Daftar User
                      </a>
                    </div>
                </div>
              </li>
            <?php }else if($this->session->userdata('level')=="pemimpin"){ ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>user" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Daftar User
                  </span>
                </a>
              </li>
            <?php } ?>  
          </ul>
        </div>
      </div>
    </aside>
    <div class="page">
      <header class="navbar navbar-expand-md navbar-light d-print-none" style="background-color: #A12559; color: #F1BBD5;">
          <div class="container-xl">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a href="." class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
            </a>
            <div class="navbar-nav flex-row order-md-last">
              <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
                <span class="avatar avatar-sm" style="background-image: url(<?php echo base_url();?>assets/dist/img/user.png)"></span>
                  <div class="d-none d-xl-block pl-2">
                    <div><?php echo $this->session->userdata('nama_lengkap');?></div>
                    <div class="mt-1 small" style="color: white;"><?php echo $this->session->userdata('level');?></div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a href="<?php echo base_url(); ?>auth/logout" class="dropdown-item">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </header>
      <div class="content">
      <div class="container-xl">
          <?php echo $contents; ?>
      </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container">
            <div class="row text-center align-items-center flex">
              <div class="col mt-3 mt-lg-0">
                <img src="<?php echo base_url();?>assets/dist/img/logo-side.png" height="75" alt="logo-footer">
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>