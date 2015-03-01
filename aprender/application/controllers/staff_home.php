<?php
class Staff_home extends CI_Controller {
    var $data;
	function __construct()
	{
		parent::__construct();
		
		$id = $this->session->userdata('username');
		$role = $this->session->userdata('role');
		if(empty($id)){
		redirect('../../index.php?msg=3#login' );
		//$this->load->view('template/login.php', $this->data);
		}
		$this->data['members'] = $this->db->get_where('new_member',array('username' => $id))->result();
		$this->data['students'] = $this->db->get_where('student_details', array('username' => $id))->result();
		$this->data['colleges'] = $this->db->get_where('college', array('college_id' => $this->data['members'][0]->college_id))->result();
		$this->data['brnches'] = $this->db->get_where('branch', array('branch_id' => $this->data['members'][0]->branch_id))->result();
		$this->data['notifications'] = $this->db->get('notifications')->result();
		$this->template->set_template('nt');
		$this->template->write_view('navigation','theme/nav/usernav2', $this->data);
		if($role==2)
		$this->template->write_view('sidebar','theme/sidebar/staff', $this->data);
		else if($role==1)
		$this->template->write_view('sidebar','theme/sidebar/student', $this->data);
	}
	public function index(){
		$this->template->write('title','Home');
		$this->template->render();
	}
	function profile(){
		$this->template->write('title','Profile');
		$this->template->write_view('content', 'template/staff_profile.php', $this->data);
		$this->template->render();
		
	}
	function notes(){
		$date = new DateTime();
		$this->data['branches'] = $this->db->get('branch')->result();
		$this->load->library('upload');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		if($this->form_validation->run() == FALSE){
		}
		else{
			$target_dir = realpath(APPPATH.'../uploads');
			$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
			//$uploadOk = 1;
			
			if ( ! $this->upload->do_upload()){
				$this->data['error'] = array('error' => $this->upload->display_errors());
				//$this->template->write_view('content', 'template/upload_notes', $this->data);
			}
			else{
				//array of shop name and logo to be updated
				$id=$this->session->userdata('username');
				$type = pathinfo($target_file,PATHINFO_EXTENSION);
				
				$notes = array(
					'title' => $this->input->post('title'),
					'username' => $id,
					'subject' => $this->input->post('subject'),
					'date_time' => $date->format('d/m/Y'),
					'file_location' => $date->format('dmyhms')."_".$this->session->userdata('username').".".$type
					);
				if($this->db->insert('notes', $notes)){
					$this->data['notes'] = $this->db->get_where('notes', array('title'=>$this->input->post('title')))->result();
					$branches = array(
						'branch_id' => $this->input->post('branch'),
						'notes_id' => $this->data['notes'][0]->notes_id
					);
					if($this->db->insert('branch_notes', $branches)){
					$this->data['message'] = "Data Updated";
					redirect("staff_home/index");
					}
				}
				else{
						echo "Some failure occured!";
						die();
				}	
			$this->data['error'] = $this->upload->data();
			}		
			$this->data['error'] = $this->upload->display_errors();
		}
		//$this->data['error'] = $this->upload->data();
		$this->template->write('title','Notes');
		$this->template->write_view('content','template/upload_notes.php', $this->data);
		$this->template->render();
	}
	function videos(){
	}
	function post(){ 
		$date = new DateTime();
		$id = $this->session->userdata('username');
		$this->data['topics'] = $this->db->get('topics')->result();
		$this->form_validation->set_rules('text', 'Text', 'required');
		if($this->form_validation->run() == FALSE){
		}
		else{
			$posts = array(
					'username' => $id,
					'date_time' => $date->format('d/m/Y'),
					'text' => $this->input->post('text'),
					'topic_id' => $this->input->post('topic')
					);
			if($this->db->insert('posts', $posts)){
				$this->data['message'] = "posted";
				redirect("staff_home/discussion_forum");
			}
			else{
				$this->data['message'] = "Some error occured";
				
				redirect("staff_home/index");
			}
		}
		$this->template->write('title','Posts');
		$this->template->write_view('content', 'template/post.php', $this->data);
		$this->template->render();
	}
	function discussion_forum(){
		$date = new DateTime();
		$this->data['posts'] = $this->db->get('posts')->result();
		$this->data['topics'] = $this->db->get('topics')->result();
		$this->data['likes'] = $this->db->get('likes')->result();
		$this->data['comments'] = $this->db->get('comments')->result();
		$id = $this->session->userdata('username');
		$com = array(
			'username' => $id,
			'date_time' => $date->format('d/m/Y h:m:s'),
			'comment' => $this->input->post('text'),
			'posts_id' => $this->input->post('pid')
		);

		//if($this->db->insert('comments', $com))
		   //redirect('staff_home/discussion_forum');
		//else
		   //redirect('staff_home/discussion_forum');
		$this->template->write('title','Discussion Forum');
		$this->template->write_view('content', 'template/discussion_forum.php', $this->data);
		$this->template->render();
	}
	function like($pid){
		$date = new DateTime();
		$id=$this->session->userdata('username');
		$likes = array(
			'username' => $id,
			'date_time' => $date->format('d/m/Y'),
			'posts_id' => $pid
		);
		if($this->db->insert('likes', $likes))
			redirect('staff_home/discussion_forum');
		
		//$this->template->write_view('content', 'template/discussion_forum.php', $this->data);
		$this->template->render();
	}
	function blogs(){
		$date = new DateTime();
		$id=$this->session->userdata('username');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('blog', 'Blog', 'required');
		if($this->form_validation->run() == FALSE){
		}
		else{
				$blogs = array(
					'title' => $this->input->post('title'),
					'username' => $id,
					'blog' =>  $this->input->post('blog'),
					'date_time' => $date->format('d/m/Y')
					);
				if($this->db->insert('blogs', $blogs)){
				redirect("staff_home/view_blog");
				
				}				
		}
		$this->template->write('title','Write Blogs');
		$this->template->write_view('content', 'template/blogs.php', $this->data);
		$this->template->render();
	}
	function view_blog(){
		$date = new DateTime();
		$id=$this->session->userdata('username');
		$this->data['blogs'] = $this->db->get('blogs')->result();
		
		$this->data['likes'] = $this->db->get('blog_likes')->result();
		$this->data['comments'] = $this->db->get('blog_comments')->result();
		$id = $this->session->userdata('username');
		$com = array(
			'username' => $id,
			'date_time' => $date->format('d/m/Y h:m:s'),
			'comment' => $this->input->post('comment'),
			'blogs_id' => $this->input->post('bid')
		);
		//print_r($com);
		//if($this->db->insert('comments', $com))
			//redirect('staff_home/discussion_forum');
		//else
			//redirect('staff_home/discussion_forum');
		
		$this->template->write('title','Blogs');
		$this->template->write_view('content', 'template/view_blogs.php', $this->data);
		$this->template->render();
	
	}
	function likes($bid){
		$date = new DateTime();
		$id=$this->session->userdata('username');
		$likes = array(
			'username' => $id,
			'date_time' => $date->format('d/m/Y'),
			'blogs_id' => $bid
		);
		if($this->db->insert('blog_likes', $likes))
			redirect('staff_home/view_blog');
		
		//$this->template->write_view('content', 'template/discussion_forum.php', $this->data);
		$this->template->render();
	}
}