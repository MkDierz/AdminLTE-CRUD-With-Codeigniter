<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sensor extends AUTH_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_sensor');
  }

  public function index()
  {
    $data['userdata'] = $this->userdata;
    $data['dataSensor']    = $this->M_sensor->getdata();

    $data['page']      = "Sensor";
    $data['judul']     = "Data Sensor";
    $data['deskripsi'] = "Monitoring Suhu";

    $this->template->views('sensor/home', $data);
  }

  public function tampil()
  {
    $data['datasensor'] = $this->M_sensor->getdata();
    $this->load->view('sensor/list_data', $data);
  }
}
