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

  public function getMahasiswaById($id)
  {
    return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
  }

  public function ubahDataMahasiswa()
  {
    $data = [
      'nama'      => $this->input->post('nama', true),
      'nim'       => $this->input->post('nim', true),
      'jurusan'   => $this->input->post('jurusan', true),
      'alamat'    => $this->input->post('alamat', true),
      'email'     => $this->input->post('email', true),
      'no_telp'   => $this->input->post('no_telp', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('mahasiswa', $data);
  }

  public function cariDataMahasiswa()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    $this->db->or_like('nim', $keyword);
    $this->db->or_like('jurusan', $keyword);
    $this->db->or_like('email', $keyword);
    $this->db->or_like('alamat', $keyword);
    $this->db->or_like('no_telp', $keyword);
    return $this->db->get('mahasiswa')->result_array();
  }
}
