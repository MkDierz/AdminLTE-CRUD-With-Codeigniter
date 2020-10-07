<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sensor extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  function save($datasensor)
	{
		$this->db->insert('sensor', $datasensor);
		return TRUE;
  }
  
  public function getdata()
  {
    $this->db->select('*');
    $this->db->from('union');
    $this->db->order_by('TIME', 'desc');
    $query = $this->db->get();
    if ($query->num_rows()>0) {
      return $query->result();
    }
  }
  public function getlatest()
  {
    $this->db->select('*');
    $this->db->from('union');
    $this->db->order_by('TIME', 'desc');
    $this->db->limit(200);
    $query = $this->db->get();
    if ($query->num_rows()>0) {
      return $query->result();
    }
  }
}

/* End of file M_sensor_model.php */
/* Location: ./application/models/M_sensor_model.php */