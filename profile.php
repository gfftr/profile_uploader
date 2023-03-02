<?php
require "functions.php";

check_login();

print_r($_GET);
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Profile</title>
</head>

<body>
 <?php require_once "includes/header.php" ?>
 <main class="container" style="max-width: 40%;">

  <div class="grid">


   <div>


    <?php if (!empty($_GET['action']) && $_GET['action'] == 'edit') : ?>
    <h3>Edit Profile</h3>
    <form method="post">
     <input type="text" name="username" placeholder="Username"><br>
     <input type="text" name="email" placeholder="Email"><br>
     <input type="text" name="password" placeholder="Password"><br>
     <button>Save</button>
     <a href="profile.php">
      <button type="button">Cancel</button>
     </a>
    </form>
    <?php else : ?>


    <h3>Profile</h3>
    <table>
     <tr>
      <th>Photo</th>
      <td><img
        src="https://lh4.googleusercontent.com/Y-Gu9KftZAVYuxyoAiyWIqbKOuRK_mFrPx4cBA5SZb7XmYfhRQW5gONJAUIQ8xUmb-toQW1X7Cp3MSQnCumYZrbGWnSvd0ST25SCEp6muGUclD_7GeQ-Rxdnzva-Oiz85JNl_uZW"
        alt="" style="width: 150px;height: 150px;object-fit: cover;"></td>
     </tr>
     <tr>
      <th>Username: </th>
      <td><?php echo $_SESSION['info']['username'] ?></td>
      <td></td>
     </tr>
     <tr>
      <th>Email: </th>
      <td><?php echo $_SESSION['info']['email'] ?></td>
      <td></td>
     </tr>
     <tr>
      <th></th>
      <td><a href="profile.php?action=edit"><button>Edit Profile</button></a></td>
      <td></td>
     </tr>
     <tr>
      <td></td>
      <td></td>
     </tr>
    </table>
    <hr>

   </div>


   <div>
    <form method="post">
     <textarea name="post" id="" cols="30" rows="10"></textarea>
     <button>Post</button>
    </form>
   </div>
   <?php endif; ?>


  </div>

 </main>

 <?php require_once "includes/footer.php" ?>
</body>


</html>