<!doctype html>
<html lang="en">
  <head>
    <title>Login Sisfo SMA Negeri 4 Padang</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
    <style type="text/css">
    .kotak
    {
      width: 400px;
      height: 430px;
      margin:50px auto;
      text-align: center;
    }

    .font
    {
      font-family: "Courier New", Courier, monospace;
    }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="alert alert-secondary kotak">
      <h1>Sistem Informasi</h1>
      <h3 class="font">SMA Negeri 4 Padang</h3><hr/>
        <form action ="<?=base_url().'index.php/sisfo/login'; ?>" method="POST">
          <div class="row">
            <div class="col-md-12">
              <label for="inputusername">Username</label>
              <input type="text" class="form-control" name="username" id="inputusername" placeholder="Username" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="inputpassword">Password</label>
              <input type="password" name="password" class="form-control" id="inputpassword" placeholder="Password" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="inputState">Account</label>
              <select id="inputState" name="account" class="form-control">
                <option value="siswa" selected>Siswa</option>
                <option value="guru">Guru</option>
                <option value="operator">Operator</option>
              </select>
            </div>
          </div>
          <br>
          <div class="row">
          <div class="col-md-12">
          <!--<button type="submit" name="tomlogin" value="login" bclass="btn btn-secondary btn-lg btn-block">Login</button> -->
           <button type="submit" name="tomlogin" class="btn btn-secondary btn-lg btn-block">login</button>
          </div>
          </div>
        </form>
 
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>