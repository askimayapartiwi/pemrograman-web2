<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{

    public function showError($message = 'Terjadi kesalahan yang tidak diketahui.')
    {
        // Tampilkan error dengan template default
        return view('errors/error_general', ['message' => $message]);
    }


    public function editHijab()
    {
        $id = $this->request->getPost('id'); // Ambil ID dari form
        $data = $this->request->getPost(); // Ambil data dari form
        unset($data['id']); // Hilangkan ID dari array data

        $filecontoh = $this->request->getFile('contoh'); // Ambil file gambar baru (jika ada)

        if ($filecontoh && !$filecontoh->hasMoved()) {
            // Simpan file gambar baru dan update path
            $path = $filecontoh->store('images');
            $data['contoh'] = $path;
        }

        $hijabModel = model('HijabModel'); // Load model

        if ($hijabModel->update($id, $data)) { // Coba update data
            return redirect()->to('admin/daftar-hijab')->with('berhasil', 'Data berhasil diperbarui');
        } else {
            return redirect()->to('admin/daftar-hijab')->with('error', 'Data gagal diperbarui');
        }
    }

    public function index()
    {
        //
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function daftarHijab()
    {
        $hijabModel = model('HijabModel');
        $data['hijabs'] = $hijabModel->findAll();

        return view('admin/daftar-hijab', $data);
    }

    public function createHijab()
    {
        $data = $this->request->getPost();
        $filecontoh = $this->request->getFile('contoh');

        if (!$filecontoh->hasMoved()) {
            $path = $filecontoh->store('images');
            $data['contoh'] = $path;
        }

        $hijabModel = model('HijabModel');

        if ($hijabModel->insert($data, false)) {
            return redirect()->to('admin/daftar-hijab')->with('berhasil', 'Data berhasil disimpan');
        } else {
            return redirect()->to('admin/daftar-hijab')->with('error', 'Data gagal disimpan');
        }
    }

    public function hapusHijab()
    {
        $id = $this->request->getPost('id_hapus'); // Ambil ID dari form
        $hijabModel = model('HijabModel'); // Load model

        if ($hijabModel->delete($id)) { // Coba hapus data berdasarkan ID
            return redirect()->to('admin/daftar-hijab')->with('berhasil', 'Data berhasil dihapus');
        } else {
            return redirect()->to('admin/daftar-hijab')->with('error', 'Data gagal dihapus. Pastikan ID valid.');
        }
    }

    public function transaksi()
    {
        return view('admin/transaksi');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }
}