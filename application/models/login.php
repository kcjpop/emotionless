<?php 
	Class Login extends CI_Controller{
		function login($username,$password){
			$this->db->select('id, username, password');
			$this->db->from('users');
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$query=$this->db->get();
			if ($query->num_rows()==1){
				return $query->result();
			}
			else{
				return false;
			}
		}
	}