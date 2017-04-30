<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('store_view');
    }

    public function add_user()
    {
        if (isset($_POST['add'])) {
            $data['user_name'] = $_POST['user_name'];
            $password = $_POST['password'];
            $data['hash_password'] = md5($password);
            $data['mail'] = $_POST['mail'];

            $this->load->model('rules_model');
            //$this->form_validation->set_rules($this->rules_model->config);
            $this->form_validation->set_rules('user_name','Имя пользователя','required');
            $this->form_validation->set_rules('password','Пароль','required');
            $this->form_validation->set_rules('mail','Почта','required');
            $chek = $this->form_validation->run();

            if ($chek == TRUE) {
                $this->load->model('store_model');
                $this->store_model->add_user($data);
                $this->load->view('success_view');
            } else {
                echo "форма не прошла проверку";
                $this->load->view('store_view');
            }

        } else {
            $this->load->view('store_view');
        }
    }

    public function login()
    {
        if (isset($_POST['send']))
        {
            $data['user_name'] = $_POST['user_name'];
            $password = $_POST['password'];
            $data['hash_password'] = md5($password);
            $this->load->model('store_model');
            $select = $this->store_model->check($data);
            if (empty($select)) {
                $this->load->view('authorization_view');
            } else {
                $this->session->user_name = 'venik';
                $this->session->authorization = true;
                $this->load->view('success_view');
                echo "Привет ".$this->session->user_name;
            }
        }
        else{
            $this->load->view('authorization_view');
        }
        //$data['mail'] = $_POST['mail'];
        //<?php foreach ($articles as $item): >
        // $item['title'];
        //<p><?php echo $item['text'];
        //  echo $item['data'];
        //<?php endforeach;
    }
    public function shop(){
        $this->load->view('shop_view');
    }
}
