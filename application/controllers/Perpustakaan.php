<?php
defined('BASEPATH') or exit('No direct script access allowed');


class perpustakaan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Perpustakaan_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Perpustakaan";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['perpustakaan'] = $this->Perpustakaan_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("perpustakaan/vw_perpustakaan.php", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Perpustakaan";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("perpustakaan/vw_tambah_perpustakaan", $data);
    $this->load->view("layout/footer");
  }
  public function upload()
  {
    $data = [
      'nama_buku' => $this->input->post('nama_buku'),
      'genre_buku' => $this->input->post('genre_buku'),
      'tgl_pinjam' => $this->input->post('tgl_pinjam'),
      'tgl_kembali' => $this->input->post('tgl_kembali'),
      'no_anggota' => $this->input->post('no_anggota'),
      'nama_peminjam' => $this->input->post('nama_peminjam')

    ];
    $this->Perpustakaan_model->insert($data);
    redirect('Perpustakaan');
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Data Peminjam";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['perpustakaan'] = $this->Perpustakaan_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("perpustakaan/vw_ubah_perpustakaan", $data);
    $this->load->view("layout/footer");
  }

  public function update()
  {
    $data = [
      'nama_buku' => $this->input->post('nama_buku'),
      'genre_buku' => $this->input->post('genre_buku'),
      'tgl_pinjam' => $this->input->post('tgl_pinjam'),
      'tgl_kembali' => $this->input->post('tgl_kembali'),
      'no_anggota' => $this->input->post('no_anggota'),
      'nama_peminjam' => $this->input->post('nama_peminjam')

    ];
    $id = $this->input->post('id');
    $this->Perpustakaan_model->update(['id' => $id], $data);
    redirect('Perpustakaan');
  }
  public function hapus($id)
  {
      $this->Perpustakaan_model->delete($id);
      redirect('Perpustakaan');
  }

}