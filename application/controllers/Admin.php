<?php
class Admin extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->helper('html');
            $this->load->database();
    }

    public function index()
    {
        $this->load->library('form_validation');
            //get the posted values
          $username = $this->input->post("login_uname");
          $password = $this->input->post("login_pwd");

          //set validations
          $this->form_validation->set_rules("login_uname", "Username", "trim|required");
          $this->form_validation->set_rules("login_pwd", "Password", "trim|required");
        //echo "<pre/>";print_r($);exit;

        // field name, error message, validation rules
        $this->form_validation->set_rules( 'login_uname', 'login_uname', 'required' );
        $this->form_validation->set_rules( 'login_pwd', 'login_pwd', 'required' );

        if($this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Admin Login';
            $data['page_title'] = 'Admin Panel';
            $data['site_name']  = 'Codeigniter 3';
            $this->load->view('admin/templates/header_admin', $data);
            /*$this->load->view('admin/templates/sidebar_a_admin', '');*/
            $this->load->view('admin/index', $data);
            /*$this->load->view('admin/templates/sidebar_b_admin', '');*/
            $this->load->view('admin/templates/footer_admin');
        }
        else
        {
            if ($this->input->post('btn_login') == "Login")
            {
                //check if username and password is correct
                $usr_result = $this->admin_model->check_userdata($username, $password);
                if ($usr_result > 0) //active user record is present
                {
                    //set the session variables
                    $sessiondata = array(
                          'login_uname' => $username,
                          'login_pwd' => TRUE
                    );
                    $this->session->set_userdata($sessiondata);
                    $data['title']      = 'Welcome to Admin panel';
                    $data['page_title'] = 'Admin Panel';
                    $data['site_name']  = 'Codeigniter 3';
                    $this->load->view('admin/frontpage', $data);
                }
                else
                {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                    redirect('admin/index');
                }
            }
            else
            {
                redirect( 'admin/index' );
            }
        }
    }
}