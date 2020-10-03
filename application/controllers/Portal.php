<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_sensor');
  }
  
  public function index()
  {
    $time = time();
    if (
      isset($_GET['s1']) &&
      isset($_GET['s2']) &&
      isset($_GET['s3']) &&
      isset($_GET['s4']) 
    ) {
      foreach ($_GET as $data => $value) {
        $datasensor = array(
          'sensor_serial' => $data,
          'sensor_value'  => $value,
          'time'          => $time
        );
        if (
        $this->M_sensor->save($datasensor)
        ){
          echo $data , " OK.";
        }
        else {
          echo "400 ERROR.";
        }
      }
    } else {
      echo "ERROR : EXPECTED PARAM NOT EXIST";
    }
  }
}