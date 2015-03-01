<table class="table table-striped">
<tr><th>Sr. No</th><th>Username</th><th>Email Address</th><th>Club ID</th><th></th><th></th></tr></b>
<?php
$i=1;
foreach($users["user"] as $u){
echo "<tr><td>".$i++."</td><td>".$u->username."</td><td>".$u->email."</td><td>".$u->club_id	."</td><td><a href = changeuser/".$u->username.">Change</a></td><td><a href = deleteuser/".$u->username.">Delete</a></td></tr>";
}
?>

</table>
