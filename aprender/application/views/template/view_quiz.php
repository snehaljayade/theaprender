<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('student_home/quizzes', $attributes);
?>
<html lang="en">
<body>
<form class="pure-form pure-form-stacked">
    
        
	<?php
	$i=0;
	foreach($quiz_questions as $q){
		foreach($quiz_question_mapping as $m){
			if($q->quiz_qquestion_id == $m->quiz_question_id){
				echo $q->question;
				$i++;
				?>
				<table>
			<tr><td>
				<input class = "form-control" type="hidden" value="<?php echo $q->quiz_qquestion_id; ?>" name="question">
                <label for="answer">Answer</label></td>
                <td><input  class = "form-control" type="radio" name="<?php echo "ans".$i; ?>" value="<?php echo $q->opt1;?>"><?php echo $q->opt1; ?>
				<input class = "form-control" type="radio" name="<?php echo "ans".$i; ?>" value="<?php echo $q->opt2;?>"><?php echo $q->opt2;?>
				<input class = "form-control" type="radio" name="<?php echo "ans".$i; ?>" value="<?php echo $q->opt3;?>"><?php echo $q->opt3;?>
				<input class = "form-control" type="radio" name="<?php echo "ans".$i; ?>" value="<?php echo $q->opt4;?>"><?php echo $q->opt4;?></td></tr>
			<tr><td></table>
				<?php
				}
		}
	}?>
	<input type="hidden" value="<?php echo $i; ?>" name="count">
	<br />
	<button type="submit" class="btn btn-info">Submit</button>
    
</form>            
<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>
