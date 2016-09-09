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
			
			$usrName       = $this->db->escape($user_data['usrName']);
			$usrEmail      = $this->db->escape($user_data['usrEmail']);
			$usrPassword   = $this->db->escape($user_data['usrPassword']);
			$usrGender     = $this->db->escape($user_data['usrGender']);
			$usrContact    = $this->db->escape($user_data['usrContact']);

			$this->db->query("INSERT INTO user(user_name, user_email, user_password, user_contact, user_gender, user_status, user_registered_date) VALUES ( $usrName, $usrEmail, $usrPassword, $usrContact, $usrGender, 1 , '".date('Y-m-d h:i:s')."')");
			return true;
		}


		/////////////////////////////////
		///		User Login Segment 	  ///
		/////////////////////////////////
		
        function post_login($usr_data){
        	
        	$usr_data['usr_email'];
        	$usr_data['usr_pass'];

            $recordCheck = $this->db->query("SELECT * FROM user WHERE user_email = '".$usr_data['usr_email']."'"); 
            if($recordCheck->num_rows() == 1){ 
                foreach ($recordCheck->result() as $record){
                    if(password_verify($usr_data['usr_pass'], $record->user_password)){
                        return TRUE;
                    }
                    else{
                        return false;
                    }
                }
            }
            else{
                
                return false;
            }
        }// ->


        /********************************/
		/*  User Authentication Check   */
		/********************************/        
		public function is_user_logged_in()

		{

			if( $this->session->userdata('logged_in') == true)
			{

				return true;

			}else{

				return false;

			}

		}

	}