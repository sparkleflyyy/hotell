<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login level</title>
  </head>
  <body>
 
    <?php
     include 'header.php'
    ?>
  
    <form style="display: grid; justify-content: center;"  method="POST" action="cek_login.php" >
    <img src="assets/letris2.png" style="width: 300px;">
    <h1 style="text-align: center;">Login</h1>

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" id="username">
  </div>

  <div class="form-group" >
    <label >Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="form-label" style="padding: 10px 0;" >
    <select class="form-select" name="level">
    <option value="Admin">Admin</option>
    <option value="Guru">Guru</option>
    <option value="Siswa">Siswa</option>
  </select>
</div>
  
  <button type="submit" class="btn btn-success">Submit</button>
  
</form>

 


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>