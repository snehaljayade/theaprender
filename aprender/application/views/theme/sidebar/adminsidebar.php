<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>

			
			
			        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Activities</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-send"></span><a href="<?php echo site_url('notification_admin_home/allclubs'); ?>"> All Clubs</a>
                                              <span class="badge">24</span>

                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="<?php echo site_url('notification_admin_home/allusers'); ?>"> All Users</a>
                                             <span class="badge">12</span>

                                    </td>
                                </tr>
								<tr>
                                    <td>
                                        <span class="glyphicon glyphicon-envelope"></span><a href="<?php echo site_url('notification_admin_home/createadmin'); ?>"> Create User</a>
                                   
                                   
									</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="<?php echo site_url('notification_admin_home/createclub'); ?>"> Create Club</a>
                                    </td>
                                </tr>
								
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-log-out"></span><a href="../activities/logout">Logout</a>
                                        </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
        </div>
