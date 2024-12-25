<?= $this->extend('template')?>

<?= $this->section('main')?>

<div class="container">
    <h2 class="mb-3">Cart</h2>
    <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Buku</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url('images/buku.webp'); ?>" alt="" 
                        style="width: 50px; height:auto;">
                        <h6>Sebuah Seni Untuk Bersikap BodoAmat</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        Rp 150.000
                    </td>
                    <td>
                        Rp 150.000
                    </td>
                    <td>
                        <a href="<?= base_url('cart/delete')?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h4>Total : Rp 150.000</h4>
    <div class="mb-3">
        <a href="<?= base_url('checkout')?>" class="btn btn-primary">Checkout</a>
    </div>
</div>

<?= $this->endSection()?>