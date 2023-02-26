<?php

require "functions.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
 $username = addslashes($_POST['username']);
 $email = addslashes($_POST['email']);
 $password = addslashes($_POST['password']);
 $date = date('Y-m-d H:i:s');

 $query = "INSERT into users (	username,	email,	password,	date	) 
 VALUES ('$username',	'$email',	'$password',	'$date')";

 $result = mysqli_query($con, $query);

 header("Location: login.php");
 die;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>My Site</title>
</head>

<body>
 <?php require_once "includes/header.php" ?>

 <main class="container">

  <div class="grid">

   <div>
   </div>
   <div>
    <h3>Signup</h3>
    <form method="post">
     <input type="text" name="username" placeholder="Username"><br>
     <input type="text" name="email" placeholder="Email"><br>
     <input type="text" name="password" placeholder="Password"><br>
     <button>Signup</button>
    </form>
   </div>
   <div></div>
  </div>

 </main>

 <?php require_once "includes/footer.php" ?>
</body>


</html>