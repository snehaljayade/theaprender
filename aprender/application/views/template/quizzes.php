<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('student_home/quizzes', $attributes);
?>
<html lang="en">
<body>
 <table class = "table">
 <tr><th>Link</th><th>Title</th><th>Created at</th></tr>
 
 
	<?php
	foreach($quizzes as $q){
		
		foreach($subjects as $s){
			if($q->subject_id==$s->subject_id){
				echo "<tr><td><a href=".site_url('student_home/view_quiz/'.$q->quiz_id).">{$q->title}</a></td>";
				echo "<td>".$s->subject_name."</td><td>".$q->generated_at."</td></tr>";
				}
		}
	}
	?>	
    
</table>
<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>
