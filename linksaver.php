<?php
session_start();
require_once('connect.php');
 if(isset($_POST['username'])){
 	 $username = $_POST['username'];
     $link = $_POST['link'];
     $sql = "INSERT INTO links(username, link) VALUES ( '$username','$link');";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
        if($result){
            $smsg = "Link saved Successfully.";
            echo $smsg;
        }else{
            echo "Error saving link " . mysqli_error($conn);
        } 
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Linkbook</title>
</head>
<body>
<div class="container">
      <form class="form-signin" method="POST">
       <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputEmail" class="sr-only">Link</label>
        <input type="text" name="link" id="inputEmail" class="form-control" placeholder="link" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
        <a class="btn btn-lg btn-primary btn-block" href="display.php">Display</a>
      </form>
</div>
</body>
</html>
