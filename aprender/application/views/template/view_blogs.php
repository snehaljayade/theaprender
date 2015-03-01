<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('staff_home/view_blogs', $attributes);
?>

<?php
$i=0;
foreach($blogs as $blog){
	foreach($likes as $like){
		if($like->blogs_id==$blog->blogs_id)
			$i++;
		}
	if($i==0){
		echo "<br>".$blog->title."<br>";
		echo "<table  bgcolor='#f5f5f5'><tr><td>".$blog->blog."</td></tr></table>";
	}
	else
		echo "<table  bgcolor='#f5f5f5'><tr><td>".$blog->blog."</td></tr></table>".$i." likes";
	echo "<a href=".site_url('staff_home/likes/'.$blog->blogs_id)."><img src=".base_url() .'assets/img/like.jpg'." height='30px' width='60px'></a><img src=".base_url() .'assets/img/comment.png'." height='25px' width='25px'><br>";
	
	echo "<form action=".site_url('staff_home/view_blog')." method='POST' >";
	echo "<tr><td><input type='text' name='comment' value=".set_value('comment')."></td></tr>";
	echo "<input type='hidden' name='bid' value=".$blog->blogs_id." ></table>";
	?><button type='submit' onclick = stop()>Comment</button><br><br>
<?php	
	
	}

?>
</form>
