                                                                                                                                                                                <?php

require_once "Model/DaftarBuku.php";

class BukuController{
    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function edit(){
        // index.php/edit?id=5

        // Menangkap Nilai Query String id dari View
        $id = $_GET['id'];

        // Membuat Objek Model Daftar Buku
        $daftar_buku = new DaftarBuku();

        // Mengambil dan Membuat Objek Model Buku berdasarkan id buku dari objek daftar_buku;
        $buku = $daftar_buku->getBukuById($id);

        // Jika buku ada atau ketemu
        if($buku){
            // Tampilkan View Edit Buku
            include_once "/view/EditBukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }
}