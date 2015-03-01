<?php
class Coding_zone extends CI_Controller {
    var $data;
	function __construct()
	{
		parent::__construct();
		$id = $this->session->userdata('username');
		$role = $this->session->userdata('role');
		if(empty($id))
		redirect('activities/login');
		$this->data['members'] = $this->db->get_where('clubs',array('username' => $id))->result();
		$this->data['all_roles'] = $this->db->get_where('role')->result();
		$this->data['roles'] = $this->db->get_where('role',array('role_id' => $role))->result();
		$this->template->set_template('nt');
		$this->template->write_view('navigation','theme/nav/navigation', $this->data);
		$this->template->write_view('sidebar','theme/sidebar/student', $this->data);
		
	}
	function index(){
	$this->data['challenges'] = $this->db->get('coding_competetion')->result();
	$this->template->write_view('content','template/code_index.php', $this->data);
	$this->template->render();
	
	}
	function register(){
		$this->data['challenges'] = $this->db->get('coding_competetion')->result();
		$id = $this->session->userdata('username');
		
				$reg = array(
						'username' => $id,
						'coding_competetion_id' => $this->input->post('coding_competetion')				
						);
				print_r($reg);
				
				/*if($this->db->insert('event_registered', $reg))
				{
				$this->data['message'] = "Registered";
				redirect("coding_zone/register");
				die('QUERY SUCCESFULL');
				}*/
				//else
				//{
				//	die('QUERY FAILED');
				//}
		$this->template->write_view('content','template/register_competetion.php', $this->data);
		$this->template->render();
		}

	function view_challenge(){
		$id = $this->session->userdata('username');
		$this->data['maps'] = $this->db->get_where('event_registered', array('username' => $id))->result();
		$this->data['comp'] = $this->db->get('coding_competetion')->result();
		$this->data['ques'] = $this->db->get('questions')->result();
		$this->template->write_view('content','template/view_challenge.php', $this->data);
		$this->template->render();
	}
	function start($cid){
		$this->data['langs'] = $this->db->get('language')->result();
		
		$this->data['comps'] = $this->db->get('coding_competetion', array('competetion_id' => $cid))->result();
		$this->data['ques'] = $this->db->get('questions')->result();
		$this->template->write_view('content','template/start.php', $this->data);
		$this->template->render();
	
	}
}