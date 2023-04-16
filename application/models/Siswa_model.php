<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public function tampil()
    {

        $query = $this->db->get('siswa');
        return $query->result();
    }

    public function simpan_data()
    {

        $data = [
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas')
        ];

        $this->db->insert('siswa', $data);
        redirect('siswa');
    }

    public function tampil_by_id($id)
    {
        $query = $this->db->get_where('siswa', ['id' => $id]);
        return $query->row();
    }

    public function update_data_siswa()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas')
        ];

        // $this->db->insert('siswa', $data);

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa', $data);
    }

    public function hapus_data_siswa()
    {
        $this->db->delete('siswa', ['id' => $this->input->post('id')]);
    }
}