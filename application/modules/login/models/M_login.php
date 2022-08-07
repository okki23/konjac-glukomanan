<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
author     : Karlina
email      : karlinamaksum19@gmail.com
copyright  : 2018 
deskripsi  : Class M_login berisi rincian method atau fungsi logic yang digunakan untuk melakukan transaksi data master login, dimana method yang terdaftar mengadopsi dari Parent Model
*/
class M_login extends Parent_Model { 
  
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
	public function autentikasi_superadmin($username,$password){
        $sql = $this->db->get_where($this->nama_tabel_superadmin,array('username'=>$username,'password'=>$password));
		return $sql;
	}
 
 
}
