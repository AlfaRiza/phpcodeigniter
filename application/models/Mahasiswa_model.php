<?php
class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $query = $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            'nama'      => $this->input->post('nama', true),
            'nim'       => $this->input->post('nim', true),
            'jurusan'   => $this->input->post('jurusan', true),
            'alamat'    => $this->input->post('alamat', true),
            'email'     => $this->input->post('email', true),
            'no_telp'   => $this->input->post('no_telp', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}
