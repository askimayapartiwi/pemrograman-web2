<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>
<div class="container">
    <h1>Daftar Hijab</h1>
    <?php if (isset($_SESSION['berhasil'])) : ?>
        <div class="alert alert-success mb-3">
            <strong>Success!</strong> <?= $_SESSION['berhasil'] ?>
        </div>
        <?php unset($_SESSION['berhasil']); // menghapus session berhasil ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['erorr'])) : ?>
        <div class="alert alert-danger mb-3">
            <strong>Error!</strong> <?= $_SESSION['erorr'] ?>
        </div>
        <?php unset($_SESSION['erorr']); // menghapus session error ?>
    <?php endif; ?>

    <div class="my-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi-plus-circle-fill"></i> Tambah
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Bahan</th>
                        <th scope="col">Contoh</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hijabs as $hijab) : ?>
                        <tr>
                            <th scope="row"><?= $hijab['id'] ?></th>
                            <td><?= $hijab['merk'] ?></td>
                            <td><?= $hijab['jenis'] ?></td>
                            <td><?= $hijab['bahan'] ?></td>
                            <td>
                                <img src="<?= base_url($hijab['contoh']) ?>" alt="" style="width: 150px; height: auto;">
                            </td>
                            <td><?= $hijab['harga'] ?></td>
                            <td>
                                <!-- Tombol Edit -->
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" 
                                    data-bs-id="<?= $hijab['id'] ?>" 
                                    data-bs-merk="<?= $hijab['merk'] ?>" 
                                    data-bs-jenis="<?= $hijab['jenis'] ?>" 
                                    data-bs-bahan="<?= $hijab['bahan'] ?>" 
                                    data-bs-harga="<?= $hijab['harga'] ?>">
                                    <i class="bi bi-pencil"></i> Edit
                                </button>
                                <!-- Tombol Hapus -->
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="<?= $hijab['id'] ?>">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Hijab</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/daftar-hijab') ?>" id="formTambah" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" id="merk" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" id="jenis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="bahan">Bahan</label>
                        <input type="text" name="bahan" id="bahan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="contoh">Contoh</label>
                        <input type="file" name="contoh" accept="image/*" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Form Edit Hijab</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/daftar-hijab/edit') ?>" id="formEdit" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_edit" id="edit_id">
                    <div class="mb-3">
                        <label for="edit_merk">Merk</label>
                        <input type="text" name="merk" id="edit_merk" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="edit_jenis">Jenis</label>
                        <input type="text" name="jenis" id="edit_jenis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="edit_bahan">Bahan</label>
                        <input type="text" name="bahan" id="edit_bahan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="edit_harga">Harga</label>
                        <input type="text" name="harga" id="edit_harga" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formEdit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hapusModalLabel">Konfirmasi Hapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/daftar-hijab/hapus') ?>" id="formHapus" method="POST">
                    <input type="hidden" name="id_hapus" id="hidden_id">
                </form>
                <p>Apakah anda yakin ingin menghapus data dengan id <span id="text_id">...</span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formHapus" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    const editModal = document.getElementById('editModal');
    if (editModal) {
        editModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-bs-id');
            const merk = button.getAttribute('data-bs-merk');
            const jenis = button.getAttribute('data-bs-jenis');
            const bahan = button.getAttribute('data-bs-bahan');
            const harga = button.getAttribute('data-bs-harga');

            const editId = editModal.querySelector('#edit_id');
            const editMerk = editModal.querySelector('#edit_merk');
            const editJenis = editModal.querySelector('#edit_jenis');
            const editBahan = editModal.querySelector('#edit_bahan');
            const editHarga = editModal.querySelector('#edit_harga');

            editId.value = id;
            editMerk.value = merk;
            editJenis.value = jenis;
            editBahan.value = bahan;
            editHarga.value = harga;
        });
    }

    const hapusModal = document.getElementById('hapusModal');
    if (hapusModal) {
        hapusModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-bs-id');

            const hiddenId = hapusModal.querySelector('#hidden_id');
            const textId = hapusModal.querySelector('#text_id');

            hiddenId.value = id;
            textId.textContent = id;
        });
    }
</script>

<?= $this->endSection() ?>
