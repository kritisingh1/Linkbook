<?php
require_once('connect.php');
 if(isset($_POST['username']) & !empty($_POST['password'])){
     $fullname = $_POST['fullname'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $sql = "INSERT INTO `users`(fullname, username, password) VALUES ('$fullname', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
        if($result){
            $smsg = "User Created Successfully.";
            echo $smsg;
        }else{
            $fmsg ="User Registration Failed";
            echo "Error creating user: " . mysqli_error($conn);
        } 
 }

?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>

<div class="container">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputEmail" class="sr-only">Fullname</label>
        <input type="text" name="fullname" id="inputEmail" class="form-control" placeholder="Full name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
</body>
</html