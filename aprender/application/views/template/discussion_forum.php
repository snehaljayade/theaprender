<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('staff_home/discussion_forum', $attributes);
?>
<script>
function stop(){
break;
}</script>
<a href="<?php echo site_url('staff_home/post'); ?>">Add Post</a><br><br>

<?php
$i=0;
foreach($posts as $post){
	//echo $i;
	foreach($topics as $topic){
		if($post->topic_id==$topic->topic_id)
			echo $topic->topic;
	}
	foreach($likes as $like){
		if($like->posts_id==$post->posts_id)
			$i++;
		}
	if($i==0)
	echo "<table  bgcolor='#f5f5f5'><tr><td><span>".$post->text."</span></td></tr></table>";
	else
	echo "<span><table  bgcolor='#f5f5f5'><tr><td>".$post->text."</td></tr></table></span>".$i." likes  ";
	echo "<a href=".site_url('staff_home/like/'.$post->posts_id)."><img src=".base_url() .'assets/img/like.jpg'." height='30px' width='60px'></a><img src=".base_url() .'assets/img/comment.png'." height='25px' width='25px'><br><table>";
	
	foreach($comments as $comment){
		if($comment->posts_id==$post->posts_id)
		echo "<tr><td>".$comment->comment."  ".$comment->date_time."</td></tr><br>";
		echo "<form action=".site_url('template/discussion_forum/')." method='POST' >";
		echo "<input type='hidden' name='pid' value=".$post->posts_id." ></table>";
	}
	
	echo "<tr><td><input type='text' name='text' value=".set_value('comment')."></td>";
	
	?><td><button type='submit' onclick = stop()>Comment</button></td></tr></table><br><br>
<?php	

}

?>
</form>
