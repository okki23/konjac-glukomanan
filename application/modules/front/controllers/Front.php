<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Front extends Parent_Controller {
 
  	var $nama_tabel = 'm_user';
  	var $daftar_field = array('id','id_user','username','password','user_insert','date_insert','user_update','date_update');
  	var $primary_key = 'id';

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_front');
		// $this->load->library('MyPHPMailer'); // load library
 	}
	public function index(){
		$data['judul'] = $this->data['judul']; 
		$data['client'] = $this->db->get('m_client')->row();
		$data['about'] = $this->db->get('m_about')->row();
		$data['maps'] = $this->db->get('m_googlemaps')->row();
    $data['price_package'] = $this->db->get('m_pricelist_package')->result();
    $data['cat_foto'] = $this->db->get('m_cat_foto')->result();
    $data['list_foto'] = $this->db->get('m_foto')->result();
    $data['slideshow'] = $this->db->get('m_slideshow')->result();
		$this->load->view('front/front_view',$data);
	}

  public function get_detail_pricelist(){
    $id = $this->uri->segment(3); 
    $sql = "select a.*,b.deskripsi as kategori from m_pricelist_item a left join m_cat_pricelist b on b.id = a.id_kategori where a.id = '".$id."' "; 
    $get = $this->db->query($sql)->row();
    echo json_encode($get,TRUE);
  }

  public function fetch_price_list_item_front(){  
       $getdata = $this->m_front->fetch_price_list_item_front();
       echo json_encode($getdata);   
    }  

	public function save_contact_form(){
		 /*
		var_dump($this->input->post());
	
	 array(4) {
  ["name"]=>
  string(4) "Okki"
  ["email"]=>
  string(22) "okkisetyawan@gmail.com"
  ["subject"]=>
  string(11) "Testing cuy"
  ["messagemessage"]=>
  string(5) "chgjh"
}
*/
		$data = $this->m_front->array_from_post(array('id','name','subject','email','message'));
        $id = isset($data['id']) ? $data['id'] : NULL;
        //$exe = $this->mh->save($data,$this->tablenamex,$this->pk, $id);
        //var_dump($data);
		//$fromEmail = $data['email'];
		///echo $fromEmail;
		//exit();
		
        $isiEmail = "Pelanggan ingin berkomunikasi via contact box atas nama ".$data['name']." dengan email aktif : ".$data['email'] ."<br> 
		Pesan : <br>".$data['message']." ";
        $mail = new PHPMailer();
        $mail->IsHTML(true);    // set email format to HTML
        $mail->IsSMTP();   // we are going to use SMTP
		$mail->SMTPDebug = 2;
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        //$mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
		$mail->Host       = "mail.rantypesta.com";      // setting GMail as our SMTP server
		 	 
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "info@rantypesta.com";  // alamat email kamu
        $mail->Password   = "RantyOke2018";            // password GMail
        $mail->SetFrom('info@1980media.com', 'noreply');  //Siapa yg mengirim email
        $mail->Subject    = $data['subject'];
        $mail->Body       = $isiEmail;
        $toEmail = "info@rantypesta.com"; // siapa yg menerima email ini
        $mail->AddAddress($toEmail);
		 
		 
        if(!$mail->Send()) {
            echo json_encode(array("message"=>"failed"));
        } else {
            echo json_encode(array("message"=>"success"));
        }
        
	}
	 
}
