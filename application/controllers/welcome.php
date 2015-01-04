<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
	$this->load->helper('pdf_helper');
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
        $data="say my name";
        
    $this->load->view('pdfreport', $data);
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */