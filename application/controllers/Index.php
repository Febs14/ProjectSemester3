<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/header");
    $this->load->view("index");
    $this->load->view("layout/footer");
  }

}


/* End of file Index.php */
/* Location: ./application/controllers/Index.php */