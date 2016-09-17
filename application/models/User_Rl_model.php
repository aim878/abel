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
        	echo $usr_data['usr_pass'];

            $recordCheck = $this->db->query("SELECT * FROM user WHERE user_email = '".$usr_data['usr_email']."'"); 
            if($recordCheck->num_rows() == 1){ 
                foreach ($recordCheck->result() as $record)
                {
                	echo $record->user_password.'</br>';
                	

                    if(password_verify($usr_data['usr_pass'], $record->user_password))
                    { 
                    	echo "fit";
                        return TRUE;
                    }
                    else{
                    	echo "not fit"; exit;
                        return false;
                        
                    }
                }
            }
            else{
                echo "fazul"; exit;
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

			//something is really fuzzy
		public function is_email_exits($email)
		{
			$recordCheck = $this->db->query("SELECT * FROM user WHERE user_email = '$email' ");
			if($recordCheck->num_rows() == 1)
			{

			 	echo $pass = random_string('numeric', 8);
			 	echo $pass = password_hash($pass, PASSWORD_DEFAULT);
			 	$recordCheck = $this->db->query("UPDATE user SET user_password = '$pass' WHERE user_email = '$email' ");
			 	return true;
			
			}
			else
			{

			 	echo "not okey";exit;
			 	return false;
			
			}

		}

	}