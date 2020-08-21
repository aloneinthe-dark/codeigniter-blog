<div class="container">
	<div class="row mb-5">


		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<?php if($this->session->flashdata('pesan') != null): ?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('pesan'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php else: ?>
					<?php endif; ?>
					
					<form action="<?= base_url('pengaturan/update') ?>" method="POST">
						<div class="form-group">
							<label>Nama Blog</label>
							<input class="form-control" name="nama_blog" type="text" value="<?= $pengaturan['nama_blog']; ?>" required>
						</div>
						<div class="form-group">
							<label>Link Instagram</label>
							<input class="form-control" name="link_instagram" value="<?= $pengaturan['link_instagram']; ?>" type="text" required>
						</div>
						<div class="form-group">
							<label>Link Facebook</label>
							<input class="form-control" name="link_facebook" type="text" value="<?= $pengaturan['link_facebook']; ?>" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" name="email" value="<?= $pengaturan['email']; ?>" type="text" required>
						</div>
						<div class="form-group">
							<label>No. Hp</label>
							<input class="form-control" name="no_hp" type="text" value="<?= $pengaturan['no_hp']; ?>" required>
						</div>
						<button type="submit" class="btn btn-primary">Ubah</button>
					</form>

				</div>
			</div>
			
		</div>


		<div class="col-md-6">
			<div class="card">
				<div class="card-body">

				</div>
			</div>

		</div>

	</div>
</div>