<?php
$date = new DateTime();

			$config['upload_path'] =realpath(APPPATH.'../uploads');
			$config['allowed_types'] = 'gif|jpg|png|txt|pdf|pptx|docs|docx';
			$config['file_name'] = $date->format('d/m/yhms')."_".$this->session->userdata('username');
			$config['max_size']	= '200000';
			
			
?>