<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="<?= base_url(); ?>/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <style>
        a.nav-link.link-secondary:hover {
            background: #f7f7f7;
        }

        .col-3.side_bar {
            padding: 0;
        }

        .side_bar span.bi {
            padding-right: 10px;
        }
    </style>

</head>

<body>

    <div class="container min-vh-100" style="max-width: 100%;">
        <div class="row">
            <div class="col-3 side_bar" style="width: 240px;">
                <div class="row">
                    <div class="col-4">
                        <div style="width: 50px;height: 50px;background: gainsboro;margin: 20px;"></div>
                    </div>
                    <div class="col" style="padding-bottom: 20px;margin-top: 24px;">

                        <div class="r">
                            <?php echo $nama_pengguna_; ?>
                        </div>
                        <div class="" style="font-size: 12px;">
                            Status : <?php echo $akses_pengguna_; ?>
                        </div>
                    </div>
                </div>

                <nav class="nav flex-column text-secondary">
                    <a class="nav-link link-secondary active" href="/admin/pages/dashboard"><span class="bi bi-collection-play-fill" aria-hidden="true"></span> Dashboard</a>
                    <a class="nav-link link-secondary" href="/admin/pages/produk"><span class="bi bi-folder-fill" aria-hidden="true"></span> Produk</a>
                    <a class="nav-link link-secondary" href="/admin/pages/penjualan"><span class="bi bi-cart-dash-fill" aria-hidden="true"></span> Penjualan</a>
                    <a class="nav-link link-secondary" href="/admin/pages/pembelian"><span class="bi bi-cart-plus-fill" aria-hidden="true"></span> Pembelian</a>
                    <a class="nav-link link-secondary" href="/admin/pages/pembelian"><span class="bi bi-person-lines-fill" aria-hidden="true"></span> Pengguna</a>
                    <a class="nav-link link-secondary" href="/admin/pages/pembelian"><span class="bi bi-bar-chart-line-fill" aria-hidden="true"></span> Laporan</a>
                </nav>
            </div>
            <div class="col min-vh-100" style="background: #f6f6f6;padding: 0px !important;">
                <nav class="navbar-light" style="background: #8832d7;">
                    <ul class="nav" style="float:left">
                        <li class="nav-item">
                            <a class="nav-link link-light active" href="#" style="
                                margin-top: -3px;
                            ">
                                <span class="bi bi-list" aria-hidden="true" style="font-size: 20px;background: #00000038;padding: 0px 0.4em;border-radius: 3px;"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light active" href="#">POS | Point Of Sales</a>
                        </li>
                    </ul>
                    <ul class="nav justify-content-end link-light">
                        <li class="nav-item">
                            <a class="nav-link link-light active" href="/login/logout">Log out</a>
                        </li>
                    </ul>
                </nav>

                <div class="container mt-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item" aria-current="page">Data</li>
                        </ol>
                    </nav>

                    <?=

                    $this->include("admin_pages/" . $content_);
                    ?>


                </div>


            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="<?= base_url(); ?>/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>