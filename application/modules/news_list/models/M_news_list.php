<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_news_list extends Parent_Model { 
   
  var $nama_tabel = 'm_news';
  var $daftar_field = array('id','title','content','published_date','foto');
  var $primary_key = 'id';

	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }

  public function data_sidebar(){
     
    return $query = $this->db->query("select * from m_news ORDER BY id DESC LIMIT 5")->result();   
  }
   

  function data($number,$offset){
    $this->db->order_by("id", "desc"); 
    return $query = $this->db->get($this->nama_tabel,$number,$offset)->result();   
  }
  
	 
 
}
