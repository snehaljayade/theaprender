<?php
class Notification_admin_home extends CI_Controller {
    var $data;
			function __construct()
		{
			parent::__construct();
			$id = $this->session->userdata('username');
			if(empty($id))
			redirect('../../index.php?msg=3#login');
		
			
			$this->template->set_template('nt');
			
			$this->template->write_view('navigation','theme/nav/adminnav2');
			$this->template->write_view('sidebar','theme/sidebar/adminsidebar');
			//$this->template->write_view('content','template/index.php');
			
		}
		function allclubs()
		{
			$this->load->model('admin_model');
			$data['clubs']=$this->admin_model->getallclubs();
			$this->template->write('title','All Clubs');
			$this->template->write_view('content','template/allclubs.php',$data);
			$this->template->render();
		}
		
		
		function createclub()
		{
			$this->template->write('title','Create New Club');
			$this->template->write_view('content','template/createclub.php');
			$this->template->render();
			$date = new datetime();
			$data =  array(
			'club_name' => $this->input->post('club_name'),
			'description' => $this->input->post('description'),
			'created_date' => $date->format('d:m:y')
			);
		//	echo $data;
		if($this->input->post('club_name')!="")
		if($this->db->insert('notification_clubs',$data)){
		redirect('notification_admin_home/allclubs');
		}
		}
		
		function createadmin($flag = 0){
			$msg="";
			if ($flag == 0)
			$msg = "";			
			else if($flag == 1)
			$msg = 	"Username Already exist....";
			else if ($flag == 2)
			$msg = 	"User Created Successfully....";
			
			else if ($flag == 3)
			$msg = 	"All fields are compulsory....";
			
			
			$this->load->model('admin_model');
			$data=$this->admin_model->getallclubs();
			$actualdata['info'] = array("clubdetail"=>$data,"msg"=>$msg);
			$this->template->write('title','Create New Admin');
			$this->template->write_view('content','template/createadmin.php',$actualdata);
			$this->template->render();
			}
			
	function processcreate(){
			
	$date = new datetime();
	$data =  array(
	'username' => $this->input->post('username'),
	'password' =>sha1( $this->input->post('password')),		
	'email' => $this->input->post('email'),
	'club_id' =>$this->input->post('club_id'));
	
		if (($this->input->post('username')=="" || $this->input->post('password')=="" || $this->input->post('email')=="" || $this->input->post('club_id')==""))
		redirect('notification_admin_home/createadmin/3'); //some field missing
	else
	
		$res = $this->db->get_where('notification_users',array('username'=>$this->input->post('username')));
		if($res->num_rows()==1)
			redirect('notification_admin_home/createadmin/1');
		if($this->db->insert('notification_users',$data))
		redirect('notification_admin_home/createadmin/2'); //data submitteds
	
		
	
	
		}
		
		function changeuser($username){
			$userdata = $this->db->get_where('notification_users',array('username' => $username))->result();
			$clubdata = $this->db->get('notification_clubs')->result();
			$data['userdetails'] = array("users"=>$userdata,"clubs"=>$clubdata);
			$this->template->write('title','Change User Details');
			$this->template->write_view('content','template/changeuser.php',$data);
			$this->template->render();
			
		}
		
		function changedetail(){
		
		}

		
		function allusers(){
			
			
			$this->load->model('admin_model');
			$clbs=$this->admin_model->getallclubs();
			$usr=$this->admin_model->getallusers();
			
			$data['users'] = array("user"=>$usr,"clubs"=>$clbs);
			
			$this->template->write('title','All Users');
			$this->template->write_view('content','template/allusers.php',$data);
			$this->template->render();
			}

		
}
	