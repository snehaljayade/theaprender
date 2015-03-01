<?php
class Student_home extends CI_Controller {
    var $data;
			function __construct()
		{
			parent::__construct();

			$id = $this->session->userdata('username');
			$role= $this->session->userdata('role');
			if(empty($id))
			redirect('../../index.php?msg=3#login');
			$this->data['members'] = $this->db->get_where('new_member',array('username' => $id))->result();
			$this->data['students'] = $this->db->get_where('student_details', array('username' => $id))->result();
			$this->data['colleges'] = $this->db->get_where('college', 
			array('college_id' => $this->data['members'][0]->college_id))->result();
			
			$this->data['brnches'] = $this->db->get_where('branch', array('branch_id' => $this->data['members'][0]->branch_id))->result();
			$this->data['notifications'] = $this->db->get('notifications')->result();
			$this->template->set_template('nt');
			
			$this->template->write_view('navigation','theme/nav/usernav2', $this->data);
			if($role==2)
			$this->template->write_view('sidebar','theme/sidebar/staff', $this->data);
			else if($role==1)
			$this->template->write_view('sidebar','theme/sidebar/student', $this->data);
			//$this->template->write_view('content','template/index.php');
			
			
			
	}
	
	 
    public function index() 
    {
	$this->template->write('title','Home');
	$this->template->render();
		
    }
	function profile(){
	$this->template->write('title','Profile Information');
	$this->template->write_view('content','template/profile.php', $this->data);
	$this->template->render();
	
	}
	
	function notes(){
	$this->data['notes'] = $this->db->get('notes')->result();
	$this->data['notes_by'] = $this->db->get('new_member')->result();
	for($i=0; $i<count($this->data['notes']); $i++){
	$this->load->helper('download');
    $data = file_get_contents(realpath(APPPATH.'../uploads').'/'.$this->data['notes'][$i]->file_location); 
    $name = "";//$this->data['notes'][$i]->file_location;
    force_download( $data);
	}
	
	$this->template->write('title','Notes');
	$this->template->write_view('content','template/notes.php', $this->data);
	$this->template->render();
	}
	function videos(){
	}
	function discussion_forrum(){
		redirect('staff_home/discussion_forum');
	}
	function clubs(){
	$this->load->model('admin_model');
			$data['clubs']=$this->admin_model->getallclubs();
			$this->template->write('title','All Clubs');
			$this->template->write_view('content','template/studentclubs.php',$data);
			$this->template->render();

	}
	function blogs(){
	redirect('staff_home/blogs');
	}
	function quizzes(){
	$this->data['quizzes'] = $this->db->get('quizzes')->result();
	$this->data['subjects'] = $this->db->get('subject')->result();
	$this->template->write('title','Quizzes');
	$this->template->write_view('content','template/quizzes.php', $this->data);
	$this->template->render();
	}
	function view_quiz($qid){
		$counter=0;
		$this->data['quiz_question_mapping'] = $this->db->get_where('quiz_question_mapping', array('quiz_id' => $qid))->result();
		$this->data['quiz_questions'] = $this->db->get('quiz_questions')->result();	
		$c=$this->data['quiz_question_mapping'][0]->quiz_question_id;
		//echo $c;
		for($i=$c; $i<=($this->input->post('count')+$c); $i++){
			if(($this->input->post('ans')==$this->data['quiz_questions'][$i]->answer)&&(($this->input->post('question')==$this->data['quiz_questions'][$i]->quiz_qquestion_id)))
			$counter++;
					
		}
		if($counter>0){
		$this->data['message']="You have given ".$counter." correct answers";
		$this->template->write_view('content','template/view_quiz.php', $this->data);
		}
		$this->template->write('title','Quiz');
		$this->template->write_view('content','template/view_quiz.php', $this->data);
		$this->template->render();
	
	}
	function coding_zone(){
	}
}