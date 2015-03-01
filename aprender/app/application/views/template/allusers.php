<html>
<head>
<style>
table{
background-color:#ffc;

}



</style>
</head>
<body>
<table border = 2px width = 70%>
<tr><th>Username</th><th>Email Address</th><th>Club Name</th></tr></b>
<?php
foreach($users["user"] as $u){
echo "<tr><td>".$u->username."</td><td>".$u->email."</td><td>".$u->club_id	."</td><td><a href = changeuser/".$u->username.">Change</a></td><td><a href = deleteuser/".$u->username.">Delete</a></td></tr>";
}
?>

</table>
</body>
</html>