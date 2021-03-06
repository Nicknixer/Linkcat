<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function logout()
    {
        $this->load->model('admin');
        $this->admin->logout();
    }
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');

        $data = array('title' => 'Авторизация');

        $this->form_validation->set_rules('login', 'Логин', 'encode_php_tags|required|min_length[2]|max_length[60]|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Пароль', 'required|encode_php_tags|trim|xss_clean|min_length[2]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/login',$data);
        }
        else
        {
            $this->load->model('admin');
            if($this->admin->login_admin($this->input->post('login'),$this->input->post('password')))
            {
                redirect('/admin/panel'); //success auth
            }
            else
            {
                $this->load->view('admin/login',$data); //unsuccess
            }
        }
    }

    function is_admin()
    {
        $this->load->model('admin');
        echo $this->admin->get_usr();
    }


}
