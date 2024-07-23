<?php

namespace App\Controllers;

class anggotaController extends BaseController  //class
{
    private $anggotaModel; //variabel

    public function __construct()   //method
    {
        $this->anggotaModel = new \App\Models\anggotaModel();   //instansiasi model anggota
    }
    public function index()
    {

            $query = $this->anggotaModel->findAll(); //ambil data dari tabel anggota
            $data['anggota'] = $query; //simpan data ke dalam array

            return view('kelola_anggota/index', $data); //load view index.php di folder app->views kelola_anggota

    }

    public function insertanggota()
    {
        $data = $this->request->getPost();  //get inputan pengguna

        $this->anggotaModel->insert($data);    //insert ke tabel anggota

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('kelola-anggota'))->with('success', 'Data Berhasil Ditambah'); //jika berhasil maka akan ditampilkan notifikasi
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
        $this->anggotaModel->where(['id' => $id])->delete();       //hapus data di tabel anggota berdasarkan id
        return redirect()->to(site_url('kelola-anggota'))->with('success', 'Data Berhasil Dihapus');   //kembali ke halaman kelola anggota
    }
}
