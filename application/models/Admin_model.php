<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function check_userdata($username, $password)
        {

            $sql = "select * from userdetails where username = '" . $username . "' and password = '" . $password . "'";
            $query = $this->db->query($sql);
            return $query->num_rows();
        }
}
