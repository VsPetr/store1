<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('store_view');
        }
        else
        {
            $this->load->view('success_view');
        }
    }
}
