<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('student_home/notes', $attributes);
?>
<html>
<body>

<?php
$i=0;
foreach($notes as $note){
	
	echo "<br>".$note->title."<br>";
	echo "<br>".$note->subject."<br>";
	echo "<br>".$note->date_time."<br>";
	foreach($notes_by as $n){
		if($note->username==$n->username)
			echo "<br>".$n->fname." ".$n->lname."<br>";
	}
			
	
	echo "<a title='download' href=". base_url()."student_home/notes/".$note->file_location.">Download</a>";
	
	
	
}

?>
</form>
</body>
</html>