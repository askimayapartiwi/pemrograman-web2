<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Transaksi</h2>

<div class="">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Aski Maya Partiwi</td>
                <td>27 Des 2024 19.00 WIB</td>
                <td>Rp.100.000</td>
                <td>
                    <span class="badge bg-warning">Pending</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn btn-success">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection();?>