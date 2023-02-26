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

   </div>
   <div>
    <form method="post">
     <textarea name="post" id="" cols="30" rows="10"></textarea>
     <button>Post</button>
    </form>
   </div>

  </div>

 </main>

 <?php require_once "includes/footer.php" ?>
</body>


</html>