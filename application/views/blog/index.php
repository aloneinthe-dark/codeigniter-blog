

<!-- postingan -->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-lg-8 col-sm-8">

      <?php foreach($postingan as $data): ?>
        <div class="card shadow mt-3">
          <div class="card-body">
            <h4><?= $data['nama'] ?></h4>
            <p><?php

            $isi_postingan = word_limiter($data['isi_postingan'], 40, '....');
            echo htmlspecialchars_decode($isi_postingan); 
            ?>

          </p>
          <a href="<?= base_url('blog/baca/') . $data['slug'] ?>">baca selengkapnya</a>
        </div>
      </div>
    <?php endforeach; ?>

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

