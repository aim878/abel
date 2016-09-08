<?php defined('BASEPATH') OR exit('No direct script access allowed');

	///////////////////////////////////////////////////////////////////////////////////////////
	////	User_Rl_Controller Containing Code for Front-end User Login Register System    ////
	///////////////////////////////////////////////////////////////////////////////////////////

	class User_Rl_Controller extends CI_Controller {

		/*************************************/
		/*             Constructor           */
		/*************************************/
		function __construct()
		{
			parent::__construct();

			## ---- LOAD MODEL ---- ## 
			$this->load->model("User_Rl_model");

			## ---- LIBERARIES ---- ##
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library('upload');
			
			$this->form_validation->set_error_delimiters(' <div class="alert alert-error "><button class="close" data-dismiss="alert"></button><span></span>', '</div>');

			$this->no_cache();
			$this->load->helper(array('form', 'url', 'security'));
			
		}


		/*************************************/
		/*         Remove Brower Cache       */
		/*************************************/
		public function no_cache()
		{
			
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');
		
		}

		///////////////////////////////////////
		/// User Registration/Login Segment ///
		///////////////////////////////////////
		/*************************************/
		/* User_RL_controller's entry Point  */
		/*************************************/
		public function get_login()
		{
			
			$this->load->view('frontend/login');
		
		}

		/*************************************/
		/*    Method to Show Register Form   */
		/*************************************/
		public function get_register()
		{
			$this->load->view('frontend/register');
		}


		
		/*************************************/
		/*   Method for User Registration    */
		/*************************************/
		public function post_register()
		{
			/********************************/
			/*   Difining Validation Rules  */
			/********************************/
			$config = array(
					array(
							'field'  => 'name'
							,'label' => 'name'
							,'rules' => 'trim|required'
					),
					array(
							'field'  => 'password'
							,'label' => 'password'
							,'rules' => 'trim|required|min_length[6]|max_length[25]|callback_is_password_strong'
					),
					array(
							'field'  => 'email'
							,'label' => 'email'
							,'rules' => 'trim|required|is_unique[user.user_email]'
					),
					array(
							'field'  => 'contact'
							,'label' => 'contact'
							,'rules' => 'trim|required|numeric'
					),
			);
			
			$this->form_validation->set_rules($config);

			/********************************/
			/*    Form Validation Check     */
			/********************************/		
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('frontend/register');
			}
            else
            {
            	$user_register_data = array(
					'usrName' 	  => $this->input->post('name'),
					'usrEmail' 	  => $this->input->post('email'),
					'usrPassword' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'usrGender'   => $this->input->post('gender'),
					'usrContact'  => $this->input->post('contact')
				);

			$this->User_Rl_model->post_register($user_register_data);
			return "okey";
                
            }

		}

		/*************************************/
		/*      More Password Validtiaon     */
		/*************************************/
		public function is_password_strong($password)
		{
		   
		   if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))
		   {
		   	 $this->form_validation->set_message('is_password_strong', 'Must Capital latter or digits');
		     return FALSE;
		   }

		   return True;
		}

	}



	/*


    May contain letter and numbers
    Must contain at least 1 number and 1 letter
    May contain any of these characters: !@#$%
    Must be 8-12 characters

*/