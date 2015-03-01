<form method="post" action="<?php echo site_url('staff_home/blogs'); ?>">
<a href="<?php echo site_url('staff_home/view_blog'); ?>">View Blogs</a>
<br><br>
Title <input class="form-control" type="text" name="title"><br>
Blog <textarea class="form-control" rows="10" columns="10" name="blog">
</textarea><br><br>
<input class="btn btn-info" type="submit" name="submit">
	
</form>
