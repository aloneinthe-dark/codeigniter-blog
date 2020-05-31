<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="<?= base_url('postingan/tambah'); ?>" method="POST">
				<div class="form-group">
					<label>Nama postingan</label>
					<input type="text" name="nama_postingan" class="form-control">
					<?php if(form_error('nama_postingan')): ?>
						<span class="text-danger">Nama postingan tidak boleh kosong</span>
					<?php else: ?>

					<?php endif; ?>
					
				</div>
				<div class="form-group">
					<label>Kategori postingan</label>
					<select name="id_kategori" class="form-control">
						<?php foreach($kategori as $data): ?>
							<option value="<?= $data['id']; ?>"><?= $data['nama_kategori']; ?></option>
						<?php endforeach; ?>
					</select>
					<?php if(form_error('id_kategori')): ?>
						<span class="text-danger">Kategori postingan tidak boleh kosong</span>
					<?php else: ?>

					<?php endif; ?>

				</div>
				<div class="form-group">
					<label>Isi postingan</label>
					<textarea class="form-control" name="isi_postingan"></textarea>

					<?php if(form_error('isi_postingan')): ?>
						<span class="text-danger">Isi postingan tidak boleh kosong</span>
					<?php else: ?>

					<?php endif; ?>

				</div>

				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>