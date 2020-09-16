

<!-- postingan -->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-lg-8 col-sm-8">

      <div class="card shadow mt-3">
        <div class="card-body">
          <h4><?= $postingan['nama'] ?></h4>
          <span class="badge badge-info"><?= date('D, d-M-Y', $postingan['tanggal_dibuat']) ?></span>
          <span class="badge badge-primary"><?= $kategori ?></span>
          <p><?= htmlspecialchars_decode($postingan['isi_postingan']) ?></p>
          
        </div>
      </div>
      
    </div>
    <div class="col-md-4 col-lg-4 col-sm-4">
      <div class="list-group mt-3">
        <a href="#" class="list-group-item list-group-item-action active">
          Cras justo odio
        </a>
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
      </div>
    </div>
  </div>
</div>
<!-- /postingan -->

