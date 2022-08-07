<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_front extends Parent_Model { 
  
  /*variabel global yang digunakan untuk instance di masing masing method agar dapat
  digunakan sewaktu waktu tanpa harus menulis ulang
  */

  var $nama_tabel_sales = 'm_akun_sales';
  var $daftar_field_sales = array( 'id', 'username', 'password', 'id_sales', 'user_insert', 'date_insert', 'user_update', 'date_update');
  
  var $nama_tabel_admin_pppu = 'm_akun_admin_pppu';
  var $daftar_field_admin_pppu = array('id', 'username', 'password', 'id_admin_pppu', 'user_insert', 'date_insert', 'user_update', 'date_update');
  
  var $nama_tabel_superadmin = 'm_akun_superadmin';
  var $daftar_field_superadmin = array('id', 'username', 'password', 'user_insert', 'date_insert', 'user_update', 'date_update');
  
  var $primary_key = 'id';

	  
	public function __construct(){
        parent::__construct();
        $this->load->database();
	}

	public function autentikasi_sales($username,$password){
        $sql = $this->db->get_where($this->nama_tabel_sales,array('username'=>$username,'password'=>$password));
		return $sql;
	}
	public function autentikasi_admin_pppu($username,$password){
        $sql = $this->db->get_where($this->nama_tabel_admin_pppu,array('username'=>$username,'password'=>$password));
		return $sql;
	}


 public function fetch_price_list_item_front(){
       $sql = "select a.*,b.deskripsi as kategori from m_pricelist_item a left join m_cat_pricelist b on b.id = a.id_kategori";   
       $getdata = $this->db->query($sql)->result();
       $data = array();  
       $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array();   
                $sub_array[] = $row->kategori;   
                $sub_array[] = $row->item;   
                $sub_array[] = $row->satuan;  
                $sub_array[] = "Rp. ".number_format($row->harga_satuan,0);  
        
         
          $sub_array[] = '<a href="javascript:void(0)" class="btn btn-primary btn-xs" id="detail" onclick="Show_Detail('.$row->id.');" >  Detail </a>';  
               
                $data[] = $sub_array;  
                 $no++;
           }  
          
       return $output = array("data"=>$data);
        
    }

	public function autentikasi_superadmin($username,$password){
        $sql = $this->db->get_where($this->nama_tabel_superadmin,array('username'=>$username,'password'=>$password));
		return $sql;
	}
 
 
}
