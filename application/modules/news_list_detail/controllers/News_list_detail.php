<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class News_list_detail extends Parent_Controller {
 
  var $nama_tabel = 'm_news';
  var $daftar_field = array('id','title','content','published_date','foto');
  var $primary_key = 'id';
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_news_list_detail'); 
		 
 	}

 	public function index(){
		$data['judul'] = $this->data['judul'];
 		$this->load->view('news_list_detail/news_list_detail_view',$data);
   
	}

	public function get_news(){
		$id = $this->uri->segment(3);
		$data['judul'] = $this->data['judul'];
		$data['list'] = $this->db->query("select * from m_news where id = '".$id."' ")->row();
		$data['list_bar'] = $this->m_news_list_detail->data_sidebar();
		$this->load->view('news_list_detail/news_list_detail_view',$data);
		
	}
 
  	public function fetch_news_list_detail(){  
       $getdata = $this->m_news_list_detail->fetch_news_list_detail();
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
    

    $sqlhapus = $this->m_news_list_detail->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	
  
	public function simpan_data(){
     
    $data_form = $this->m_news_list_detail->array_from_post($this->daftar_field);

	$title =  $this->input->post('title');
	$id =  $this->input->post('id');
	$content =  $this->input->post('content');
	$tanggal_terbit =  $this->input->post('tanggal_terbit');
	 
	
    $simpan_data = $this->m_news_list_detail->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
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
