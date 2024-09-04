<?php

namespace App\Controllers;

class penanggungjawabController extends BaseController  //class
{
    private $penanggungjawabModel; //variabel

    public function __construct()   //method
    {
        $this->penanggungjawabModel = new \App\Models\penanggungjawabModel();   //instansiasi model penanggungjawab
    }
    public function index()
    {

            $query = $this->penanggungjawabModel->findAll(); //ambil data dari tabel penanggungjawab
            $data['penanggungjawab'] = $query; //simpan data ke dalam array

            return view('kelola_penanggungjawab/index', $data); //load view index.php di folder app->views kelola_penanggungjawab

    }

    public function insertpenanggungjawab()
    {
        $data = $this->request->getPost();  //get inputan pengguna

        $this->penanggungjawabModel->insert($data);    //insert ke tabel penanggungjawab

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('kelola-penanggungjawab'))->with('success', 'Data Berhasil Ditambah'); //jika berhasil maka akan ditampilkan notifikasi
        }
    }

    public function update($id)
    {
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),   //nama kelas = ambil dari inputan nama
        ];

        $this->db->table('kelas')->where(['id'  => $id])->update($data); //update data di tabel kelas berdasarkan id
        return redirect()->to(site_url('kelola-kelas'))->with('success', 'Data Berhasil Diubah');    //kembali ke halaman kelola kelas
    }

    public function destroy($id)
    {
        $this->anggotaModel->where(['id' => $id])->delete();       //hapus data di tabel penanggungjawab berdasarkan id
        return redirect()->to(site_url('kelola-penanggungjawab'))->with('success', 'Data Berhasil Dihapus');   //kembali ke halaman kelola penanggungjawab
    }
}
