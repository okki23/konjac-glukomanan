<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class News_list extends Parent_Controller {
 
  var $nama_tabel = 'm_news';
  var $daftar_field = array('id','title','content','published_date','foto');
  var $primary_key = 'id';
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_news_list'); 
		 
 	}

 	public function index(){
		$data['judul'] = $this->data['judul']; 
		//$data['list'] = $this->db->get($this->nama_tabel)->result();
		$jumlah_data = $this->db->get($this->nama_tabel)->num_rows();
		$this->load->library('pagination');	

		$config['base_url'] = base_url().'news_list/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		 
		$config['full_tag_open'] = '<div align="center"><ul class = "pagination" text-decoration:none;">';
		$config['full_tag_close'] = '</div></ul>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['list'] = $this->m_news_list->data($config['per_page'],$from);

		$data['list_bar'] = $this->m_news_list->data_sidebar();
		$this->load->view('news_list/news_list_view',$data);
   
	}
 
  	public function fetch_news_list(){  
       $getdata = $this->m_news_list->fetch_news_list();
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
    

    $sqlhapus = $this->m_news_list->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	
  
	public function simpan_data(){
     
    $data_form = $this->m_news_list->array_from_post($this->daftar_field);

	$title =  $this->input->post('title');
	$id =  $this->input->post('id');
	$content =  $this->input->post('content');
	$tanggal_terbit =  $this->input->post('tanggal_terbit');
	 
	
    $simpan_data = $this->m_news_list->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
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
