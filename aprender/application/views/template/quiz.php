<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('admin_home/quiz', $attributes); ?>
<html lang="en">
<body>


<script>
function showHint(str) {
     if (str == 0) { 
         document.getElementById("str").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("str").innerHTML = xmlhttp.responseText;
             }
         }
         xmlhttp.open("GET", "admin_home/quiz.php?q="+str, true);
         xmlhttp.send();
     }
}
</script>
<table><tr>
    
			<td>
                <label for="title">Title</label></td>
                <td><input id="title" name="title" type="text" placeholder="" value="<?php echo set_value('title'); ?>"></td></tr>
			<tr><td>
                <label for="subject_id">Subject</label></td><td>
                <select id="subject_id" name="subject_id" class="pure-input-1-2">
                            <?php
                                foreach($subjects as $sc){
                                    echo "<option value=\"{$sc->subject_id}\">{$sc->subject_name}</option>";
                                }
                            ?>
                </select></td></tr>
			<tr><td>
                <label for="number_of_questions">Number of Questions</label></td><td>
                <input id="number_of_questions" name="number_of_questions" type="text" placeholder="" value="<?php echo set_value('number_of_questions'); ?>" onkeyup="showHint(this.value)"></td>
			</tr></table>
			<div id="txtHint">
			<?php
			if(!empty($quizzes))
			foreach($quizzes as $q)
			for($i=0; $i<$q->number_of_questions; $i++){
			?><table>
			<tr><td>
                <label for="question">Question</label></td>
                <td><input id="question" name="question" type="text" placeholder="" value="<?php echo set_value('question'); ?>" width="50px"></td></tr>
			<tr><td></table>
				<table><tr>
                <td><label for="opt1">Option 1</label></td>
                <td><input id="opt1" name="opt1" type="text" placeholder="" value="<?php echo set_value('opt1'); ?>"></td>
			
                <td><label for="opt2">Option 2</label></td>
                <td><input id="opt2" name="opt2" type="text" placeholder="" value="<?php echo set_value('opt2'); ?>"></td>
			
                <td><label for="opt3">Option 3</label></td>
                <td><input id="opt3" name="opt3" type="text" placeholder="" value="<?php echo set_value('opt3'); ?>"></td>
			
                <td><label for="opt4">Option 4</label></td>
                <td><input id="opt4" name="opt4" type="text" placeholder="" value="<?php echo set_value('opt4'); ?>"></td></tr>
				<tr><td>
                <label for="answer">Answer</label></td>
                <td><input id="answer" name="answer" type="text" placeholder="" value="<?php echo set_value('answer'); ?>"></td></tr></table>
			<br><br>
			<?php } ?>
			</div>
			
           	<button type="submit" class="pure-button pure-button-primary">Create</button>

 <p><?php echo validation_errors(); ?></p></body></html>

