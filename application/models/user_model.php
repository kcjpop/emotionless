<?php 
    class User_model extends CI_Model {
        function __construct()
        {
            parent::__construct();
        }
        public function insert(){
            $this->load->database();
            $username=$this->input->post('username', TRUE);
            $password=$this->input->post('password',TRUE);
            $password_retype=$this->input->post('password-retype', TRUE);
            $email=$this->input->post('email', TRUE);
            if ($username && $password && $password_retype && $email){
                if (strlen($username)>=5){
                    if (strlen($password)>=6){
                        if ($password==$password_retype){
                        $this->db->insert('users', array('username'=>$username, 'password'=>md5($password),'email'=>$email)) or die('cannot query!');
                        }
                    else echo 'pwd doesn\'t match';
                    }
                    else echo 'pwd too short!';
                }
                else echo 'username too short!';
            }
            else echo 'form fill in wrong';
        }
    }
?>