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
 <main class="container">

  <div class="grid">

   <div></div>
   <div>
    <h3>Profile</h3>
    <table>
     <tr>
      <th></th>
      <td><img src="img.jpg" alt="" style="width: 150px;height: 150px;object-fit: cover;"></td>

     </tr>
     <tr>
      <th>Username: </th>
      <td>John</td>
      <td></td>
     </tr>
     <tr>
      <th>Email: </th>
      <td>John@email.com</td>
      <td></td>
     </tr>

     <tr>
      <td></td>
      <td></td>
     </tr>
    </table>
    <hr>
    <form method="post">
     <textarea name="post" id="" cols="30" rows="10"></textarea>
     <button>Post</button>
    </form>
   </div>
   <div></div>
  </div>

 </main>

 <?php require_once "includes/footer.php" ?>
</body>


</html>