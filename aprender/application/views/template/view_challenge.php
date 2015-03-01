<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('staff_home/view_blogs', $attributes);
?>

<?php
$i=0;
foreach($comp as $c){
	foreach($maps as $m){
	if(($c->coding_competetion_id==$m->coding_competetion_id)&&($c->status==0))
		echo "<br><a href=". site_url('coding_zone/start/'.$c->coding_competetion_id).">".$c->name."</a></b>";
	}
	foreach($ques as $q){
	if(($c->question_id==$q->question_id)&&($c->status==0))
		echo "<br>".$q->question."<br><b>Maximum Implementation Time :</b> ".$q->duration."<br>";
	}
	}

?><br><br>
      
</form>
