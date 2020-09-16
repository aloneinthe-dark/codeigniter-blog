

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
        Kategori Postingan
      </a>
      <?php foreach($kategori as $data): ?>
        <a href="#" class="list-group-item list-group-item-action"><?= $data['nama_kategori'] ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>
<!-- /postingan -->

