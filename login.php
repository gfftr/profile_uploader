<?php

require "functions.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

 $email = addslashes($_POST['email']);
 $password = addslashes($_POST['password']);

 $query = "SELECT * FROM users WHERE email = '$email' && password = '$password' limit 1";

 $result = mysqli_query($con, $query);

 //print_r(mysqli_num_rows($result) > 0);
 if (mysqli_num_rows($result)) {
  $row = mysqli_fetch_assoc(); // fetches array change to associate array
  header("Location: profile.php");
  die;
 } else {
  // error
  $error = "Wrong email or password";
 }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
</head>

<body>
 <?php require_once "includes/header.php" ?>
 <main class="container">

  <div class="grid">

   <div></div>
   <div>
    <h3>Login</h3>
    <form method="post">
     <input type="text" name="email" placeholder="Email" require><br>
     <input type="text" name="password" placeholder="Password" require><br>
     <button>Signup</button>
    </form>
   </div>
   <div></div>
  </div>

 </main>

 <?php require_once "includes/footer.php" ?>
</body>


</html>