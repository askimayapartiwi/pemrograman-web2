<?= $this->extend('template')?>

<?= $this->section('main')?>
    <div class="container">
        <h2 class="mb-5">Checkout</h2>
        <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Hijab</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
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
                </tr>
            </tbody>
        </table>
        </div>
        <h2 class="mb-3">Total: Rp 100.000</h2>
        <h2 class="mb-3">Data Pembeli</h2>
        <div class="mb-5">
            Aski Maya Partiwi <br />
            0895622796138 <br />
            askimayapartiwi@gmail.com 
        </div>
        <h2 class="mb-3">Alamat Pengiriman</h2>
        <div class="mb-5">
            <span>Jl. Kol.M.Kukuh RT.11 PaalLima Kota Baru</span>
        </div>
        <h2 class="mb-3">Metode Bayar</h2>
        <div class="mb-5">
            Transfer Bank <br />
            BCA, Aski Maya Partiwi <br />
            11122233344
        </div>
        <div class="mb-5">
            <a href="<?= base_url('submit')?>" class="btn btn-primary">Submit</a>
        </div>
    </div>

<?= $this->endSection()?>