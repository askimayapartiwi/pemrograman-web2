                                                                                                                                                                                <?php

require_once "Model/DaftarBuku.php";

class BukuController{
    public function jalankan(){ 
        $theme_value = "light";

        //mengambil nilai GET
         if(isset($_GET['theme'])){
            $theme_value = $_GET['theme']; 
        }  

        //set cookie
        if(!isset($_COOKIE['theme']) || isset($_GET['theme'])){
            setcookie('theme', $theme_value, time()+3600*24);
        }else{
            $theme_value = $_COOKIE['theme'];
        }

        // hapus cookie
        if(isset($_COOKIE['theme']) && isset($_GET['hapus_theme'])){
            setcookie('theme');
        }

        //mengakses model
        $data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        session_start();
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();

        $status = $daftar_buku->simpan($buku);

        if($status){
            $_SESSION['berhasil'] = 'Data Berhasil Disimpan';
        }else{
            $_SESSION['gagal'] = 'Data Gagal Disimpan';
        }
        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        session_start();
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();

        $status = $daftar_buku->hapus($id);

        if($status){
            $_SESSION['berhasil'] = 'Data Berhasil Dihapus';
        }else{
            $_SESSION['gagal'] = 'Data Gagal Dihapus';
        }

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
            include_once "view/EditBukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }

    public function update(){
        session_start();
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);
        $buku->setId($_POST['id']);

        //var_dump($buku);
        //die();

        $daftar_buku = new DaftarBuku();

        $status = $daftar_buku->update($buku);

        if($status){
            // membuat session berhasil
            $_SESSION['berhasil'] = 'Data Berhasil Diupdate';
        }else{
            // membuat session gagal
            $_SESSION['gagal'] = 'Data Gagal Diupdate';
        }

        header('Location: http://localhost/index.php');
        exit;
    }
}