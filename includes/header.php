<style>
* {
 padding: 0px;
 margin: 0px;
}

a {
 text-decoration: none;
}

body {
 background-color: #f7f7ed;
 font-family: tahoma;
}

header div {
 padding: 20px;
}

header a {
 color: white;
}

header {
 background-color: #766ecc;
 display: flex;
 color: white;
 justify-content: center;
 align-items: center;
}

footer {
 padding: 20px;
 text-align: center;
 background-color: #eee;
}
</style>

<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">


<header>
 <nav>
  <div><a href="index.php">Home</a></div>
  <div><a href="profile.php">Profile</a></div>

  <?php if (empty($_SESSION['info'])) : ?>
  <div><a href="login.php">Login</a></div>
  <div><a href="signup.php">Signup</a></div>
  <?php else : ?>
  <div><a href="logout.php">Logout</a></div>
  <?php endif; ?>

 </nav>
</header>