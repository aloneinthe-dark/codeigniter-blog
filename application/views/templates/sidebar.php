<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= base_url('dashboard'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="<?= base_url('postingan'); ?>"><div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
								Berita & Postingan</a>
								<a class="nav-link" href="<?= base_url('kategori'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>
								Kategori</a>
								<a class="nav-link" href="<?= base_url('pengaturan'); ?>"><div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
								Pengaturan</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $header; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active"><?= $header; ?></li>
                        </ol>
                        <div class="row">
