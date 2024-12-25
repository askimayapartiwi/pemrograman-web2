<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<div class="container">
      <h1>Daftar Buku</h1>
        <?php if(isset($_SESSION['berhasil'])):?>
        <div class="alert alert-success mb-3">
          <strong>Success!</strong> <?= $_SESSION['berhasil']?>
      </div>
        <?php
          unset($_SESSION['berhasil']); // menghapus session gagal
          endif;
        ?>

      <?php if(isset($_SESSION['eorr'])):?>
        <div class="alert alert-danger mb-3">
          <strong>Success!</strong> <?= $_SESSION['erorr']?>
      </div>
        <?php
          unset($_SESSION['eorr']); //menghapus session berhasil
          endif;
        ?>

        <div class="my-3">
            <button class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#tambahModal"><i class="bi-plus-circle-fill"></i>Tambah</button>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped ">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Harga</th>
                    </thead>
                    <tbody>
                        <?php foreach($books as $book):?>
                            <tr>
                                <th scope="row"><?= $book['id']?></th>
                                <td><?= $book['judul']?></td>
                                <td><?= $book['pengarang']?></td>
                                <td><?= $book['penerbit']?></td>
                                <td><?= $book['tahun']?></td>
                                <td>
                                    <img src="<?= base_url($book['cover'])?>" alt="" style="width: 150px; height: auto;">
                                </td>
                                <td><?= $book['harga']?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" 
aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/daftar-buku')?>" id="formTambah" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" 
                    class="form-control">
            </div>
            <div class="mb-3">
                <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" id="pengarang" 
                    class="form-control">
            </div>
            <div class="mb-3">
                <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" 
                    class="form-control">
            </div>
            <div class="mb-3">
                <label for="tahun">Tahun</label>
                    <input type="text" name="tahun" id="tahun" 
                    class="form-control">
            </div>
            <div class="mb-3">
                <label for="cover">Cover</label>
                <input type="file" name="cover" accept="image/*" class="form-control">
            </div>
            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Hapus-->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="hapusModalLabel">Konfirmasi Hapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/buku/hapus" id="formHapus" method="POST">
            <input type="hidden" name="id_hapus" id="hidden_id">
        </form>
        <p>Apakah anda yakin ingin menghapus data dengan id <span id="text_id">...</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const hapusModal = document.getElementById('hapusModal')
        if (hapusModal) {
        hapusModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
        const button = event.relatedTarget
    // Extract info from data-bs-* attributes
        const id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = hapusModal.querySelector('#hidden_id')
    const modalBodyInput = hapusModal.querySelector('#text_id')

    hidden_id.value = id;
    text_id.textContent = id;
  })
}
    </script>

<?= $this->endSection()?>