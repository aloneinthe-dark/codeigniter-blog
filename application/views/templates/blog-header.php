<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/blog') ?>/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="#">CI-BLOG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-4 active">
            <a class="nav-link" href="<?= base_url('blog') ?>">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="<?= base_url('blog/tentang') ?>">Tentang</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="<?= base_url('blog/kontak') ?>">Kontak</a>
          </li>
          

        </ul>
        <form class="form-inline my-2 my-lg-0" action="<?= base_url('blog/cari') ?>">
          <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Cari" aria-label="Search" required>
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->

  <!-- banner -->
  <!-- /banner -->