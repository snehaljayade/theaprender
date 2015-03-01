<?php
	class Alumni_info extends CI_Model{
		function __construct(){
		parent::__construct();
        if( ! isset($this->db)) $this->load->database();
        var_dump($this->db);
        //exit;
		}
	}
?>