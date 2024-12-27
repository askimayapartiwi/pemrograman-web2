<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td scope="row">Aski Maya Partiwi</td>
                <td scope="row">0895622796138</td>
                <td scope="row">Jl.Kol.M.Kukuh RT.11 PaalLima Kota Baru</td>
                <td scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection();?>