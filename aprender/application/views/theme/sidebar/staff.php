<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    //echo form_open('staff_home/index', $attributes);
	

?>	

        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Content</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-send"></span>			<a href="<?php echo site_url('staff_home/profile'); ?>">Profile</a>

                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span>	<a href="<?php echo site_url('staff_home/notes'); ?>">Notes</a>
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                        <span class="glyphicon glyphicon-envelope"></span>
			<a href="<?php echo site_url('staff_home/videos'); ?>">Videos</a>
			
                                     <span class="badge">42</span>
                                   
									</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="<?php echo site_url('staff_home/discussion_forum'); ?>">Discussion Forum</a>
			
                                    </td>
                                </tr>
								
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-log-out"></span><a href="<?php echo site_url('staff_home/blogs'); ?>">Blogs</a>
			
                                        </td>
                                </tr>
									<tr>
                                    <td>
                                        <span class="glyphicon glyphicon-log-out"></span><a href="<?php echo site_url('activities/logout'); ?>">Logout</a>
			
                                        </td>
                                </tr>
            
								</table>
            
            </div>
                    </div>
                </div>
                </div>
        </div>






















