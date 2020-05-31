<div class="container">
	
	<?php if($this->session->flashdata('pesan') != null): ?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <?= $this->session->flashdata('pesan'); ?>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php else: ?>
	<?php endif; ?>

	<div class="card">
		<div class="card-body">
			
			<h3><?= $postingan['nama']; ?></h3>
			<span class="badge badge-info"><?= date('D, d-M-Y', $postingan['tanggal_dibuat']); ?></span>
			<span class="badge badge-success"><?= $kategori['nama_kategori'] ?></span>

			<p>
				<?= $postingan['isi_postingan']; ?>
			</p>

		</div>
	</div>
		
</div>