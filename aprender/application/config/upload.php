<?php
$date = new DateTime();

			$config['upload_path'] ='E:\wamp\www\project2\assets\uploads';
			$config['allowed_types'] = 'gif|jpg|png|txt|pdf|pptx|docs|docx';
			$config['file_name'] = $date->format('d/m/y')."_".$this->session->userdata('username');
			$config['max_size']	= '200000';
			
			
?>