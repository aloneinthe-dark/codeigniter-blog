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
			<a href="<?= base_url('postingan/tambah'); ?>" class="btn btn-primary">Tambah Berita & Postingan</a>
			<table class="table table-bordered table-hover mt-2">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Kategori</th>
						<th>Tanggal dibuat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach($postingan as $data): ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $data['nama']; ?></td>
							<td>
								<?php foreach($kategori as $k): ?>
									<?php if($data['id_kategori'] == $k['id']): ?>
										<span class="badge badge-info"><?= $k['nama_kategori']; ?></span>
									<?php else: ?>
									<?php endif; ?>
								<?php endforeach; ?>
							</td>
							<td><?= date('D, d-M-Y', $data['tanggal_dibuat']); ?></td>
							<td>
								<a href="<?= base_url('postingan/detail/' . $data['id']); ?>" class="btn btn-info btn-sm">Detail</a>
								<a href="<?= base_url('postingan/edit/') . $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
								<a href="" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
		
</div>