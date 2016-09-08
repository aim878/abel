<?php

	////////////////////////////////////////////////////////////
	/// Model Containing Code for performing RL DB Operations///
	////////////////////////////////////////////////////////////

	class User_Rl_model extends CI_Model
	{	
		/////////////////////////////////
		///	User Registration Segment ///
		/////////////////////////////////
		
		/********************************/
		/*  Method User data Insertion  */
		/********************************/
		public function post_register($user_data)
		{
			
			echo $usrName       = $this->db->escape($user_data['usrName']);
			echo $usrEmail      = $this->db->escape($user_data['usrEmail']);
			echo $usrPassword   = $this->db->escape($user_data['usrPassword']);
			echo $usrGender     = $this->db->escape($user_data['usrGender']);
			echo $usrContact    = $this->db->escape($user_data['usrContact']);

			$this->db->query("INSERT INTO user(user_name, user_email, user_password, user_contact, user_gender, user_status, user_registered_date) VALUES ( $usrName, $usrEmail, $usrPassword, $usrContact, $usrGender, 1 , '".date('Y-m-d h:i:s')."')");
			return true;
		}

	}