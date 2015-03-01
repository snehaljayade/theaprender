<?php
	class Test extends CI_Controller{
		var $data;
    function __construct()
    {			
		parent::__construct();
        //$this->load->model('test');
		$this->template->set_template('nt');
		$this->template->write('title','Home');
	}
	function index(){
		
		$this->data['message']="Please activate your account for proceeding further....
			Follow the link sent you on your mail....";
		$this->template->write_view('content','template/activate.php', $this->data);
		$this->template->render();
	}
	
	function validate($unm='', $val=''){
			$this->template->write('title','Email Verification');
			$this->data['validation'] = $this->db->get_where('member',array('username'=>$unm, 'validation_code' =>$val))->result();
			
			if(empty($this->data['validation'])){
				$this->data['message'] = "Invalid link!";
				
			}
			else{
				/* this part can add one more security constraint
				
				$date_of_birth = $this->input->post('dob');
				$data['validate'] = $this->db->get_where('member',array('username'=>$unm, 'dob' =>$date_of_birth))->result();*/
				
				if($this->data['validation']){
					$user = array('status' => 1);
					//$this->db->where('username', $unm);
					$ok = $this->db->update('users', $user, array('username' => $unm));
					if($ok){
						echo "Congrats! Your Email is verified.";
						
						$delete = $this->db->delete('member', array('username' => $unm));
						if($delete)
						$this->data['message']="Congratulations! Your mail is verified..";
						$this->template->write_view('content','template/validate',$this->data);
					}
					else{
						$this->data['message'] = "Invalid Credentials!";
						$this->template->write_view('content','register_user/info',$this->data);
					}
				}	
			}
			
			$this->template->render();

		}
	
	}
?>