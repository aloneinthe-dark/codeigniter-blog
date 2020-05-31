<div class="col-lg-12 col-md-12 col-sm-12">
	<form action="<?= base_url('kategori/simpan_ubah') ?>" method="POST">
		<div class="form-group">
			<label>Nama Kategori</label>
			<input type="hidden" name="id" value="<?= $kategori['id']; ?>">
			<input class="form-control" type="text" name="nama_kategori" value="<?= $kategori['nama_kategori']; ?>">
		</div>
		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
	</form>
</div>