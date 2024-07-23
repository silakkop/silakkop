<?php

namespace App\Controllers;

class koperasiController extends BaseController  //class
{
    private $koperasiModel; //variabel

    public function __construct()   //method
    {
        $this->koperasiModel = new \App\Models\koperasiModel();   //instansiasi model koperasi
    }
    public function index()
    {

            $query = $this->koperasiModel->findAll(); //ambil data dari tabel koperasi
            $data['koperasi'] = $query; //simpan data ke dalam array

            return view('kelola_koperasi/index', $data); //load view index.php di folder app->views kelola_koperasi

    }

    public function insertkoperasi()
    {
        $data = $this->request->getPost();  //get inputan pengguna

        $this->koperasiModel->insert($data);    //insert ke tabel koperasi

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('kelola-koperasi'))->with('success', 'Data Berhasil Ditambah'); //jika berhasil maka akan ditampilkan notifikasi
        }
    }

    public function update($id)
    {
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),   //nama kelas = ambil dari inputan nama
        ];

        $this->db->table('kelas')->where(['id'  => $id])->update($data); //update data di tabel kelas berdasarkan id
        return redirect()->to(site_url('kelola-koperasi'))->with('success', 'Data Berhasil Diubah');    //kembali ke halaman kelola koperasi
    }

    public function destroy($id)
    {
        $this->koperasiModel->where(['id' => $id])->delete();       //hapus data di tabel koperasi berdasarkan id
        return redirect()->to(site_url('kelola-koperasi'))->with('success', 'Data Berhasil Dihapus');   //kembali ke halaman kelola koperasi
    }
}
