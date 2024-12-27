<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class=" container p-5 bg-warning-subtle rounded-bottom-4">
<h1 class="display 6">Toko Hijab Online Aski</h1>
<h5 class="text-muted">Berbagai Pilihan Hijab dari Merk yang Terkenal.</h5>
    <a href="<?= base_url()?>" class="btn btn-danger">Lihat Produk</a>
</div>

<div class="container mb-5">
    <h2 class="mt-5">Hijab Best Seller</h2>
    <div class="row gy-3">
    <div class="col-3">
    <div class="card" style="width: 18rem;">
  <img src="<?= base_url('images/gambar1.jpeg')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Elzatta</h5>
    <p class="card-text">Rp 100.000</p>
    <a href="#" class="btn btn-danger">Masukkan Keranjang</a>
  </div>
</div>
</div>

<div class="col-3">
    <div class="card" style="width: 18rem;">
  <img src="<?= base_url('images/gambar2.webp')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Zoya</h5>
    <p class="card-text">Rp 100.000</p>
    <a href="#" class="btn btn-danger">Masukkan Keranjang</a>
  </div>
</div>
</div>

<div class="col-3">
    <div class="card" style="width: 18rem;">
  <img src="<?= base_url('images/gambar3.jpg')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rabbani</h5>
    <p class="card-text">Rp 50.000</p>
    <a href="#" class="btn btn-danger">Masukkan Keranjang</a>
  </div>
</div>
</div>

<div class="col-3">
    <div class="card" style="width: 18rem;">
  <img src="<?= base_url('images/sattka.jpeg')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sattka</h5>
    <p class="card-text">Rp 70.000</p>
    <a href="#" class="btn btn-danger">Masukkan Keranjang</a>
  </div>
</div>
</div>

<div class="col-3">
    <div class="card" style="width: 18rem;">
  <img src="<?= base_url('images/gambar5.webp')?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ButtonScarves</h5>
    <p class="card-text">Rp 150.000</p>
    <a href="#" class="btn btn-danger">Masukkan Keranjang</a>
  </div>
</div>
</div>
</div>
<?= $this->endSection()?>
    
