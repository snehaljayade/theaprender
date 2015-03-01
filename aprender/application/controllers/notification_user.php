
<?php
class Notification_user extends CI_Controller {
 			function __construct()
		{
			parent::__construct();

			$id = $this->session->userdata('username');
			if(empty($id))
			redirect('../../index.php?msg=3#login');			
			$this->template->set_template('nt');
			$this->template->write_view('navigation','theme/nav/usernav2');
			$this->template->write_view('sidebar','theme/sidebar/usersidebar2');

		}

 function index(){
			$this->template->render();
 
 }
 function history(){
$data["notices"]  = $this->db->get_where('notifications',array("username"=>$this->session->userdata('username')))->result();
 			$this->template->write('title','History');
			$this->template->write_view('content','template/user/history.php',$data);
			$this->template->render();
 }
 function sendnotification($msg=0){
			if($msg==0)
			$data['msg'] = "";
			else
			if($msg == 1 )
			$data['msg'] = "Notification Sent Successfully";
			if($msg == 2 )
			$data['msg'] = "Subject is Compulsory";
			
			if($msg == 3 )
			$data['msg'] = "Write a Message or Select a valid PDF or Image file";
			
			
						
 			$this->template->write('title','Send Notification');
			$this->template->write_view('content','template/user/sendnotification.php',$data);
			$this->template->render();
}

function sendnotif(){
	
	$this->form_validation->set_rules('subject', 'subject', 'required');
	
	if($this->form_validation->run() == FALSE)
		redirect('notification_user/sendnotification/2');

	
	$date = new DateTime();
	$uploadpath = realpath(APPPATH.'../notices');
	$config = array(
	'allowed_types'=>'pdf|png|jpg',
	'upload_path' =>$uploadpath
	);
	$this->load->library('upload',$config);

	if (!($this->upload->do_upload()))
	{
	if(($this->input->post('message') == " ") || ($this->input->post('message') == ""))
		redirect('notification_user/sendnotification/3');
	$filestatus="";
	}
	else
		$filestatus= $date->format('U')."_".$this->session->userdata('username');

	$notification = array(
					'subject' => $this->input->post('subject'),
					'username' => $this->session->userdata('username'),
					'message' => $this->input->post('message'),
					'date' => $date->format('d/m/Y'),
					'file_path' => $filestatus
					);
	if($this->db->insert('notifications', $notification))
		redirect('notification_user/sendnotification/1');
	else
		echo "Failure Occured..";
 
 }
 }
