<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->model('Siswa_model');
    }
    public function index()
    {

        $data['daftar_siswa'] = $this->Siswa_model->tampil();
        $this->load->view('index', $data);
    }

    function edit($id)
    {

        $data['daftar_siswa'] = $this->Siswa_model->tampil_by_id($id);
        $this->load->view('edit_siswa', $data);
    }

    function update_data()
    {
        $this->Siswa_model->update_data_siswa();
        return redirect('index');
    }

    function hapus_data()
    {
        $this->Siswa_model->hapus_data_siswa();
        return redirect('siswa');
    }


    function tambah()
    {
        $this->load->view('tambah_siswa');
    }

    function simpan()
    {
        $this->Siswa_model->simpan_data();
        return redirect('siswa');
    }
}