
<?php
class File_model extends CI_Model{
var $uploadpath;
	function File_model(){
	parent::Model();
	$this->gallary_path = realpath(APPPATH.'../assets/uploads');
	
	}
	function index(){
		
	}
	function do_upload(){
			$config = array(
			'allowed_types' => 'jpg|png|pdf',
			'upload_path' => $this->upload_path;
	$this->load->library('upload',$config)		);
	$this->upload->do_upload();
	}
}
?>