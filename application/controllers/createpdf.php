<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function index()
{
    $this->load->helper('pdf_helper');
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
       

    $this->load->view('pdfreport');
}
?>