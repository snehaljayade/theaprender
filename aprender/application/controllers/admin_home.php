<?php
class Admin_home extends CI_Controller {
    var $data;
	var $id;
	function __construct()
	{
		parent::__construct();
		$this->id = $this->session->userdata('username');
		$role = $this->session->userdata('role');
		if(empty($this->id))
		redirect('activities/login');
		$this->data['members'] = $this->db->get_where('clubs',array('username' => $this->id))->result();
		$this->data['all_roles'] = $this->db->get_where('role')->result();
		$this->data['roles'] = $this->db->get_where('role',array('role_id' => $role))->result();
		$this->template->set_template('nt');
		$this->template->write_view('navigation','theme/nav/admin_navigation', $this->data);
		$this->template->write_view('sidebar','theme/sidebar/admin', $this->data);
	}
	
	 
    public function index() 
    {
	$this->template->write('title','Home');
	$this->template->render();
		
    }
	function profile(){
	//$this->template->write_view('content','template/index.php');
	
	}
	
	function create_clubs(){
	
		$this->form_validation->set_rules('username', 'Club Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|sha1');
		if($this->form_validation->run() == FALSE){
		}
		else{
			$clubs = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'role_id' => $this->input->post('role')
					);
			if($this->db->insert('clubs', $clubs)){
				$this->data['message'] = "Club Created";
				redirect("admin_home/view_clubs");
			}
			else{
				$this->data['message'] = "Some error occured";
				
				redirect("admin_home/index");
			}
		}
	
	$this->template->write_view('content','template/create_clubs.php', $this->data);
	$this->template->render();
	
	}
	function view_clubs(){
		$this->data['clubs'] = $this->db->get('clubs')->result();
		$this->data['roles'] = $this->db->get('role')->result();
		$this->template->write_view('content','template/view_clubs.php', $this->data);
		$this->template->render();
	}
	function create_roles(){
	
	}
	function gymkhana(){
	
	}
	function alumni(){
	
	}
	function videos(){
	}
	function quiz(){
		$date = new datetime();
		$this->data['subjects'] = $this->db->get('subject')->result();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('number_of_questions', 'Number of Questions', 'required');
		if($this->form_validation->run() == FALSE){
		}
		else{
			$quiz = array(
					'title' => $this->input->post('title'),
					'number_of_questions' => $this->input->post('number_of_questions'),
					'subject_id' => $this->input->post('subject_id'),
					'generated_at' => $date->format('yyyy/d/m h:m:s')
					);
			if($this->db->insert('quizzes', $quiz)){
				$this->data['quizzes'] = $this->db->get_where('quizzes',array('title' => $this->input->post('title')))->result();
				//redirect("admin_home/index");
			}
			else{
				$this->data['message'] = "Some error occured";
				
				redirect("admin_home/index");
			}
		}
		$this->template->write_view('content','template/quiz.php', $this->data);
		$this->template->render();
	}
	function coding_zone(){
		$date = new datetime();
		$this->form_validation->set_rules('question', 'Question', 'required');
		$this->form_validation->set_rules('duration', 'Duration', 'required');
		if($this->form_validation->run() == FALSE){
		}
		else{
			$que = array(
					'question' => $this->input->post('question'),
					'duration' => $this->input->post('duration'),
					'date_time' => $date->format('yyyy/m/d h:m:s')
					);
			if($this->db->insert('questions', $que)){
				$this->data['message'] = "Question added successfully!!!";
				
			}
			else{
				$this->data['message'] = "Some error occured";
				
			}
		}
		$this->template->write_view('content','template/coding_zone.php', $this->data);
		$this->template->render();
	
	
	}
	function create_event(){
		$date = new datetime();
		$this->data['questions'] = $this->db->get('questions')->result();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('end_time', 'End Time', 'required');
		if($this->form_validation->run() == FALSE){
		}
		else{
			$que = array(
					'name' => $this->input->post('name'),
					'end_time' => $this->input->post('end_time'),
					'question_id' => $this->input->post('question'),
					'status' => '0'
					);
			if($this->db->insert('coding_competetion', $que)){
				$this->data['message'] = "Event generated successfully!!!";
				
			}
			else{
				$this->data['message'] = "Some error occured";
				
			}
		}
		$this->template->write_view('content','template/create_event.php', $this->data);
		$this->template->render();
	
	
	}
	
}