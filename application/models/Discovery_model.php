<?php
class Discovery_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function set_userdata()
        {
            $data = array(
                'name'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'password' => $this->input->post('pwd'),
                'username' => $this->input->post('usrname'),
                'contact'  => $this->input->post('mobile'),
                'address'  => $this->input->post('address')
            );

            return $this->db->insert('userdetails', $data);
        }
}
