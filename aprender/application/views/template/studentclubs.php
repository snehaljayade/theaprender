<table class="table table-striped" >
<tr><th>Club ID</th><th>Club Name</th><th>Created Date</th></tr></b>
<?php
foreach($clubs as $club){
echo "<tr><td>".$club->club_id."</td><td>".$club->club_name."</td><td>".$club->created_date	."</tr>";
}
?>

</table>
