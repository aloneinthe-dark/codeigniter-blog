<div class="col-lg-12 col-md-12 col-sm-12">

<?php if($this->session->flashdata('pesan') != null): ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <?= $this->session->flashdata('pesan'); ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php else: ?>
<?php endif; ?>


	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  Tambah Kategori
	</button>
	<br>
	<br>


	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($kategori as $data): ?>
				<tr>
					<td><?= $data['id']; ?></td>
					<td><?= $data['nama_kategori'] ?></td>
					<td>
						<a href="<?= base_url('kategori/ubah/' . $data['id']); ?>" class="btn btn-info btn-sm">Ubah</a>
						<a onclick="return confirm('Hapus data ini ?')" href="<?= base_url('kategori/hapus/' . $data['id']); ?>" class="btn btn-danger btn-sm">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>	
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('kategori/tambah'); ?>" method="POST">
        	<div class="group">
        		<label>Nama Kategori</label>
        		<input class="form-control" name="nama_kategori">
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
