<?php
class Discovery extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('discovery_model');
    }

    public function view($page = 'index')
    {
        if ( ! file_exists(APPPATH.'/views/discovery/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title']      = ucfirst($page); // Capitalize the first letter
        $data['site_name']  = $this->config->item( 'site_name' );
        $data['page_title'] = 'Discovery';
        $this->load->view('header', $data);
        $this->load->view('sidebar_a', '');
        $this->load->view('discovery/'.$page, $data);
        $this->load->view('sidebar_b', '');
        $this->load->view('footer', $data);
    }

    public function signup($data = null)
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules( 'usrname', 'usrname', 'required' );
        $this->form_validation->set_rules( 'pwd', 'pwd', 'required' );
        if($this->form_validation->run() == FALSE)
        {
            $data['title']      = ucfirst('Sign Up'); // Capitalize the first letter
            $data['site_name']  = $this->config->item( 'site_name' );
            $data['page_title'] = 'Discovery';
            $this->load->view('header', $data);
            $this->load->view('sidebar_a', '');
            $this->load->view('discovery/signup', $data);
            $this->load->view('sidebar_b', '');
            $this->load->view('footer', $data);
        }
        else
        {
            $this->discovery_model->set_userdata();
            redirect( 'discovery' );

        }
        /*if($this->input->post('name') != NULL)
        {
            if($this->discovery_model->set_userdata())
            {
                $data['title']      = ucfirst('Home'); // Capitalize the first letter
                $data['site_name']  = $this->config->item( 'site_name' );
                $data['page_title'] = 'Discovery';
                $this->load->view('header', $data);
                $this->load->view('sidebar_a', '');
                $this->load->view('discovery/index', $data);
                $this->load->view('sidebar_b', '');
                $this->load->view('footer', $data);
            }
        }
        else
        {
            $data['title']      = ucfirst('Sign Up'); // Capitalize the first letter
            $data['site_name']  = $this->config->item( 'site_name' );
            $data['page_title'] = 'Discovery';
            $this->load->view('header', $data);
            $this->load->view('sidebar_a', '');
            $this->load->view('discovery/signup', $data);
            $this->load->view('sidebar_b', '');
            $this->load->view('footer', $data);
        }*/
    }

    public function index()
    {
        $this->load->view('index');
    }

}