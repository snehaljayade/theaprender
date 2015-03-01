<html>
<head><title>History</title></head>
<body>

<table width = "100%" border = 1px>
<tr><th>Sr. No</th><th>Subject</th><th>Message</th><th>File Path</th><th>Date/Time</th></tr>
<?php
$i=0;
foreach($notices as $notice)
{
$i++;
echo "<tr><td>$i</td><td>$notice->subject</td><td>$notice->message</td><td>$notice->file_path</td><td>$notice->date</td></tr>";
}
?>
</table>
</body>
</html>