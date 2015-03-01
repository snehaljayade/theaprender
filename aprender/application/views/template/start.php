<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('coding_zone/start', $attributes);
	
?>

<span align="right" id="countdown" class="timer"></span><br>
<br>Select Language  &nbsp;&nbsp;<select id="language" name="language" class = "form-control">
                            <?php
                                foreach($langs as $lang){
                                    echo "<option value=\"{$lang->language_id}\">{$lang->language}</option>";
                                }
                            ?>
                </select>
<?php 
	foreach($comps as $c){
	    foreach($ques as $q){
			if($c->question_id==$q->question_id)
				$time=$q->duration;
		}
		
	}
	$t=$time*60*60;
	?>
	
<script>
var seconds = <?php echo $t;?>;
function secondPassed() {
	
    var minutes = Math.round((seconds - 30)/60);
	var hours = Math.round((minutes - 30)/60);
    var remainingSeconds = seconds % 60;
	var remainingMinutes = minutes % 60;
	if (remainingMinutes < 10) {
        remainingMinutes = "0" + remainingMinutes;  
    }
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = hours + ":" + remainingMinutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
<div id="compiler">Compiler</div>
<div id="input">Input Box</div>
<button type="button" value="" class = "btn btn-info">Run</button>
<div id="result">Result</div>


 <button type="submit" class = "btn btn-success" value="">Submit Solution</button>
</html></body>
