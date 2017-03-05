<?php
session_start();
$user=$_SESSION['username'];
//echo $user;
require_once('connect.php');
echo "<br />";
echo "Saved links are: ";
echo "<br />";
$query = "SELECT `link` from `links` where `username` = '$user';";
/*if($conn->query($query))
	//echo "successfull";
else 
	echo "fail";	*/
$results=$conn->query($query);
if($results->num_rows>0)
{
	while($row=$results->fetch_assoc())
	{
		echo $row['link'];
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>

</body>
</html>