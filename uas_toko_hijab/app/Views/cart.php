<?= $this->extend('template')?>

<?= $this->section('main')?>

<div class="container">
    <h2 class="mb-3">Keranjang</h2>
    <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Hijab</th>
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
                        <img src="<?= base_url('images/gambar1.jpeg'); ?>" alt="" 
                        style="width: 50px; height:auto;">
                        <h6>Elzatta</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        Rp 100.000
                    </td>
                    <td>
                        Rp 100.000
                    </td>
                    <td>
                        <a href="<?= base_url('cart/delete')?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h4>Total : Rp 100.000</h4>
    <div class="mb-3">
        <a href="<?= base_url('checkout')?>" class="btn btn-primary">Checkout</a>
    </div>
</div>

<?= $this->endSection()?>