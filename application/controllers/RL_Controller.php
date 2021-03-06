<?php defined('BASEPATH') OR exit('No direct script access allowed');

	///////////////////////////////////////////////////////////////////////////////////////////
	////	Controller Containing Code for Front-end or back-end  Login Register System    ////
	///////////////////////////////////////////////////////////////////////////////////////////

	class RL_Controller extends CI_Controller {

		/********************************/
		/*          Constructor         */
		/********************************/
		function __construct()
		{
			parent::__construct();

			## ---- LOAD MODEL ---- ## 
			$this->load->model("RL_model");

			## ---- LIBERARIES ---- ##
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library('upload');
			
			$this->form_validation->set_error_delimiters(' <div class="alert alert-error "><button class="close" data-dismiss="alert"></button><span></span>', '</div>');

			$this->no_cache();
			$this->load->helper(array('form', 'url'));
			
		}

		/********************************/
		/*      Remove Brower Cache     */
		/********************************/
		public function no_cache()
		{
			
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');
		
		}

		/********************************/
		/* RL_controller's entry Point  */
		/********************************/
		public function index()
		{

			$this->load->view('frontend/index');
		
		}
 
		public function admin()
		{
			if($this->RL_model->is_user_logged_in())
			{

				$user_count = $this->RL_model->get_user_count();
				$this->load->view('backend/dash_board', array('user_count' => $user_count));
			}
			else
			{
				$this->load->view('backend/login');
			
			}
			
		}

		/////////////////////////////////
		/// User Registration Segment ///
		/////////////////////////////////
		
		/********************************/
		/* Method for User Registration */
		/********************************/
		public function post_register()
		{

			$admin_data = array(
					'usrName' => "admin878",
					'usrPassword' => password_hash('password', PASSWORD_DEFAULT)
				);

			$this->RL_model->usr_register($admin_data);
			return "okey";
		}
		


		/////////////////////////////////
		///		User Login Segment 	  ///
		/////////////////////////////////
		public function post_login()
		{
			/********************************/
			/*   Difining Validation Rules  */
			/********************************/
			$config = array(
					array(
							'field'  => 'username'
							,'label' => 'User Name'
							,'rules' => 'trim|required|callback_username_check'
					),
					array(
							'field'  => 'password'
							,'label' => 'Password'
							,'rules' => 'trim|required|callback_password_check'
					)
			);
			
			$this->form_validation->set_rules($config);
			
			/********************************/
			/*    Form Validation Check     */
			/********************************/		
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('backend/login');
			}
            else{
                $usr_data = array(
                    'usr_email' => $this->input->post('username'),
                    'usr_pass' => $this->input->post('password')
                );
                
                $recordCheck = $this->RL_model->usr_login($usr_data);
                
                if($recordCheck){
                    
                    /*******************************/
                    /*Defining a session array data*/ 
                    /*******************************/
                    $sess_data = array(
                        'usr_email' => $usr_data['usr_email'],
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($sess_data);
                    redirect('admin');
                }
                else
                {
                	$this->form_validation->set_message('incorrect userName or Password');
                    $this->admin();
                }
            }
		
		}


		/********************************/
		/*    Logout And Unset Data     */
		/********************************/
		public function logout()
		{
			$array_items = array(
				'usr_email' => '',
				'usr_pass' => '',
				'logged_in' => FALSE
			);
			$this->session->unset_userdata($array_items);
			$this->session->sess_destroy();
			redirect('admin');
		}

		/********************************/
		/*  userName Custom Validation  */
		/********************************/
		public function username_check($str = "")
        {
        	$usrName = $this->RL_model->get_userName($str);
            if ($str !== $usrName)
            {
                    $this->form_validation->set_message('username_check', 'Invalid Username');
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
        }

        /********************************/
		/*  Password Custom Validation  */
		/********************************/
        public function password_check($str = "")
		{
            $password = $this->RL_model->get_password($str);
            if ($str !== $password)
            {
                    $this->form_validation->set_message('password_check', 'Invalid Password');
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
        }


		//////////////////////////////////
		///	   Data Tables Segments   ////
		//////////////////////////////////
		/********************************/
		/*    Get All software Orders   */
		/********************************/

		public  function get_software_order()
		{
			$software_order= $this->RL_model->get_software_order_data();
			$this->load->view('backend/software_order', array('oftware_order' => $software_order));
		}


		/********************************/
		/*      Get All User Details    */
		/********************************/
		public  function get_user_details()
		{
			$user_detail = $this->RL_model->get_user_details();
			$this->load->view('backend/register_user', array('users' => $user_detail));
		}
		

		/********************************/
		/*      Get All User Details    */
		/********************************/
		public  function get_cd_order()
		{
			$cd_order = $this->RL_model->get_cd_order_data();
			$this->load->view('backend/cd_order', array('cd_order' => $cd_order));
		}
	
}


