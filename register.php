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
 
   <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">Hotel</a></div>
          <div class="col-6 col-lg-8">

            <nav class="navbar navbar-expand-lg ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="reservation.html">reservasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="rooms.html">rooms</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">login</a>
                  </li>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
  
    <form style="display: grid; justify-content: center;"  method="POST" action="cek_login.php" >
    <img src="assets/letris2.png" style="width: 300px;">
    <h1 style="text-align: center;">register</h1>

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" id="username">
  </div>

  <div class="form-group" >
    <label >Password</label>
    <input type="text" class="form-control" name="password" id="password">
  </div>
  <div class="form-group">
    <label>nomer telpon</label>
    <input type="text" class="form-control" name="username" id="no_telp">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
  
</form>

 


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>