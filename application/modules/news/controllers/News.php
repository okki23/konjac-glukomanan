<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class News extends Parent_Controller {
 
  var $nama_tabel = 'm_news';
  var $daftar_field = array('id','title','content','published_date','foto');
  var $primary_key = 'id';
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_news'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('front') . "';
				 </script>";
		}
 	}

 	public function index(){
		$data['judul'] = $this->data['judul']; 
	
		$data['konten'] = 'news/news_view';
		$this->load->view('template_view',$data);
   
	}
 
  	public function fetch_news(){  
       $getdata = $this->m_news->fetch_news();
       echo json_encode($getdata);   
  	}  
	
   
	public function get_data_edit(){
		$id = $this->uri->segment(3); 
		$get = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row();
		echo json_encode($get,TRUE);
	}
	
  //method atau fungsi yang digunakan untuk menghapus data 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
    		$cek_foto = $this->db->where($this->primary_key,$id)->get($this->nama_tabel)->row(); 
   
		if($cek_foto->foto != '' || $cek_foto->foto != NULL){
          //apabila foto ada maka dihapus,apabila sebaliknya maka tidak dihapus
          unlink("upload/".str_replace(" ","_",$cek_foto->foto));
		}   


    $sqlhapus = $this->m_news->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	
  
	public function simpan_data(){
     
 //    $data_form = $this->m_news->array_from_post($this->daftar_field);

	// $title =  $this->input->post('title');
	// $id =  $this->input->post('id');
	// $content =  $this->input->post('content');
	// $published_date = date("Y-m-d H:i:s");
	 
	
 //    $simpan_data = $this->m_news->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
   
	
	// 	if($simpan_data){
	// 		$result = array("response"=>array('message'=>'success'));
	// 	}else{
	// 		$result = array("response"=>array('message'=>'failed'));
	// 	}
		
	// 	echo json_encode($result,TRUE); 



	$data_form = $this->m_news->array_from_post($this->daftar_field);

    $id = isset($data_form['id']) ? $data_form['id'] : NULL; 
 

    $simpan_data = $this->m_news->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
    $simpan_foto = $this->upload_foto();
  
 
	
		if($simpan_data && $simpan_foto){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);


	}

	function upload_foto(){  
    	if(isset($_FILES["user_image"])){  
        	$extension = explode('.', $_FILES['user_image']['name']);   
        	$destination = './upload/' . $_FILES['user_image']['name'];  
        	return move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
         
    	}  
  }  
 
       


}
