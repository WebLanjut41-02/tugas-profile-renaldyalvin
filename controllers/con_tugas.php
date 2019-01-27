<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class con_tugas extends CI_Controller {
    
        public function index($value='home')
        {
            $this->load->view('pages/'.$value);
        }

        public function komen()
        {
            $kom=$this->input->post('komen');
            $data['komentar'] = $kom;
            $this->load->view('pages/post', $data);
        }
    
    }
    
    /* End of file Controllername.php */
    
?>