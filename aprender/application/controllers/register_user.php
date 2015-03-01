<?php
class Register_user extends CI_Controller{
	var $data;
	function __construct(){
		parent::__construct();
			
			$this->data['colleges'] =  $this->db->get('college')->result();
			if(empty($this->data['colleges'])){
			redirect('register_user/info');
			}
			$this->data['roles'] = $this->db->get('role')->result();
			if(empty($this->data['roles'])){
			redirect('register_user/info');
			}
			$this->data['security_questions'] = $this->db->get('security_question')->result();
			if(empty($this->data['security_questions'])){
			redirect('register_user/info');
			}
			$this->data['branches'] = $this->db->get('branch')->result();
			if(empty($this->data['branches'])){
			redirect('register_user/info');
			}
			
			$this->data['degrees'] = $this->db->get('degree')->result();
			if(empty($this->data['degrees'])){
			redirect('register_user/info');
			}
			
			$this->data['positions'] = $this->db->get('position')->result();
			if(empty($this->data['positions'])){
			redirect('register_user/info');
			}
			//$this->template->set_template('nt');
			//$this->template->write('title','Home');
			
			
	}
	
	function info(){
		//$this->load->view('template/index.php', $this->data);
		//$this->load->view('title','User Registration');
		
		$this->form_validation->set_rules('college','College', 'required|integer');
		$this->form_validation->set_rules('branch','Branch', 'required|integer');
		$this->form_validation->set_rules('fname','First Name', 'required');
		$this->form_validation->set_rules('lname','Last Name', 'required');
		$this->form_validation->set_rules('gender','Gender', 'required|integer');
		$this->form_validation->set_rules('dob','Date of Birth', 'required');
		$this->form_validation->set_rules('member_address','Address', 'required');
		$this->form_validation->set_rules('contact_number','Contact Number', 'required|xss_clean');
		$this->form_validation->set_rules('member_email_id','Email','required|valid_email|is_unique[member.member_email_id]');
		$this->form_validation->set_rules('username','Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|sha1');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]|sha1');	
		$this->form_validation->set_rules('question','Security Question', 'required|integer');
		$this->form_validation->set_rules('answer','Answer', 'required');
		
			/*if(empty($_SESSION['6_letters_code'] ) ||
				  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
				{
				//Note: the captcha code is compared case insensitively.
				//if you want case sensitive match, update the check above to
				// strcmp()
					$this->data['message'] = "\n The captcha code does not match!";
				}*/
		
		
		if ($this->form_validation->run() == FALSE){
			//$this->data['message']='validation errors';
			$this->template->write_view('content','index.php', $this->data);
			//$this->load->view('template/index.php', $this->data);
		}
		else{
            $code= sha1(rand(9,9999));
			$mail= $this->input->post('member_email_id');
			$unm= $this->input->post('username');
            $member = array(
				'college_id' =>$this->input->post('college'),
				'branch_id' =>$this->input->post('branch'),
				'username' => $unm,
                'fname' => $this->input->post('fname'),
                'mname' => $this->input->post('mname'),
                'lname' => $this->input->post('lname'),
                'gender' => $this->input->post('gender'),
                'dob' => $this->input->post('dob'),
				'member_address' => $this->input->post('member_address'),
				'member_email_id' => $mail,
				'contact_number' => $this->input->post('contact_number'),
				'security_question_id' => $this->input->post('question'),
				'answer' => $this->input->post('answer'),
				'role_id' => 1,
				'validation_code' => $code,
                );
			$users = array(
			'username' => $unm,
			'password' => $this->input->post('password'),
			'status' => 0
			);
            if(($this->db->insert('users',$users))&&($this->db->insert('member',$member))){
               
                //Will be changed if email verification is required
				$this->session->set_userdata('logged_in','TRUE');
				$this->session->set_userdata('username',$unm);
                //$this->session->set_userdata('username',$this->db->insert_id());
				
			$this->load->library('email');
			$this->email->set_newline("\r\n");
		  	$this->email->from('theaprender@gmail.com', 'The Aprender');
			$this->email->to($mail);  
			$this->email->subject('Email Verification');  
			$this->email->message('Thank you for registering on our website.
			 You are requested to complete the email verification. For any kind of failure you can contact us at theaprender@gmail.com. Get many more benefits of registering at our website. For email verification visit the link given below
			Link : http://localhost/project2/index.php/test/validate/'.$this->session->userdata('username').'/'.$code);
			$result = $this->email->send();	
			//echo $this->email->print_debugger();
				//if($result)
               redirect('../../index.php?msg=5#info');
				
            }
            else{
               redirect('../../index.php?msg=4#info');
                
            }
		
		}
	//$this->template->render();	
	}

}
?>