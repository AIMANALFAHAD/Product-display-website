<!DOCTYPE html>
<html>
<head>
<title> Login:A&N accessorise</title>
<link rel ="stylesheet"href="asmm.css">
</head>
<body style= "background:url(9.jpg);background-repeat:no-repeat;background-size:100%">
<div class="split left">
  <div class="centered">
  <center>
  <form method="post" action="update.php" enctype="multipart/form-data">

  <input type="text" name="user_name_old" placeholder="old_username"><br>
  <h1><input type="text" name="user_name" placeholder="new username"><br></h1>
  <h1><input type="text" name="email" placeholder="new email"><br></h1>
  <h1><input type="password" name="password" placeholder="new password"></h1>
  <h1>
  <button type="submit">UPDATE</button>
  </h1>

  </form>
  </center>

  </div>
</div>

<div class="split right">
  <div class="centered">
  <center>
  <form method="post" action="dlet.php" enctype="multipart/form-data">
  <input type="text" name="user_name" placeholder="username"><br>
  <h1><input type="text" name="email" placeholder="email"><br></h1>
  <h1><input type="password" name="password" placeholder="password"></h1>
  <h1>
  <button type="submit">DLETE</button>
  </h1>
  </form>
  </center>

  </div>
</div>

<div class="centre">
  <div class="centered">
  <center>
  <form method="post" action="add.php" enctype="multipart/form-data">
  <input type="text" name="user_name" placeholder="username"><br>
  <h1><input type="text" name="email" placeholder="email"><br></h1>
  <h1><input type="password" name="password" placeholder="password"></h1>
  <h1>
  <button type="submit">ADD</button>
  </h1>
  </form>
  </center>

  </div>
</div>



</body>
</html>