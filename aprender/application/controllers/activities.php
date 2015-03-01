<?php
class Activities extends CI_Controller{
	var $data;
	function __construct(){
		parent::__construct();
		
	}
	
	function login(){
			//will load the login view from forms/login ccff99 99ff33
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|sha1');
				//if invalidated load same login form
			if ($this->form_validation->run() == FALSE){
			$this->data['message']='';
			$this->load->view('template/login.php', $this->data);
			}
			//check email and password combination
			else{
				$this->data['users'] = $this->db->get_where('users',array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					))->result();
				$this->data['clubs'] = $this->db->get_where('clubs',array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					))->result();
				$this->data['notification_users'] = $this->db->get_where('notification_users',array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					))->result();
				
				if(($this->data['users'])){
					$this->session->set_userdata('logged_in','TRUE');
					$this->session->set_userdata('username',$this->input->post('username'));
					
					//echo "Login successful";
					//echo $this->session->userdata('username');
					
					$this->data['members'] = $this->db->get_where('new_member',array(
					'username' => $this->input->post('username'),
					))->result();
					$this->session->set_userdata('role',$this->data['members'][0]->role_id);
					if($this->data['members'][0]->role_id==1)
						redirect('student_home/profile');
					else
						redirect('staff_home/profile');
									
				}
				else if(($this->data['clubs'])){
					$this->session->set_userdata('logged_in','TRUE');
					$this->session->set_userdata('username',$this->input->post('username'));
					
					//echo "Login successful";
					//echo $this->session->userdata('username');
					
					$this->data['clubs'] = $this->db->get_where('clubs',array(
					'username' => $this->input->post('username')))->result();
					$this->session->set_userdata('role',$this->data['clubs'][0]->role_id);
					$this->data['roles'] = $this->db->get_where('role',array(
					'role_id' => $this->data['clubs'][0]->role_id))->result();
					
						redirect('admin_home/index');
					
				}
				else if(($this->data['notification_users'])){
					$userdata = array(
					'username' =>$this->input->post('username'),
					'club_id' =>$this->data['notification_users'][0]->club_id,
					'logged_in' =>true
					);
					
					$this->session->set_userdata($userdata);
					if($this->data['notification_users'][0]->club_id==0)
					 redirect('notification_admin_home/allclubs');
					else
					 redirect('notification_user/history');
					
				}
				else{
				redirect('../../index.php?msg=1#login');
				}
			}
			
			}
	
	function logout(){
			//$this->load->library('Logs');
			//$this->logs->write_log( 'logs/session.txt','Logout_'.$this->session->userdata('user_id'));
			//log user out by clearing cookies
			$this->session->sess_destroy();
			$this->session->set_userdata('logged_in','FALSE');
			redirect('../../index.php?msg=2#login');
		}
		
	
	
}
?>