<?php
class Mahasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->library('form_validation');
    //$this->load->helper('url');
  }
  public function index()
  {
    $data['judul'] = 'Daftar Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
    if ($this->input->post('keyword')) {
      $data['mahasiswa'] = $this->Mahasiswa_model->CariDataMahasiswa();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Mahasisa';
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('no_telp', 'No Telpon', 'required|numeric');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/tambah');
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->tambahDataMahasiswa();
      $this->session->set_flashdata('flash', 'ditambahkan');
      redirect('mahasiswa');
    }
  }

  public function hapus($id)
  {
    $this->Mahasiswa_model->hapusDataMahasiswa($id);
    $this->session->set_flashdata('flash', 'dihapus');
    redirect('mahasiswa');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/detail', $data);
    $this->load->view('templates/footer');
  }

  public function ubah($id)
  {
    $data['judul'] = 'Form Edit Data Mahasisa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    $data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Kimia', 'Sistem Informasi'];
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('no_telp', 'No Telpon', 'required|numeric');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->ubahDataMahasiswa();
      $this->session->set_flashdata('flash', 'diubah');
      redirect('mahasiswa');
    }
  }
}
