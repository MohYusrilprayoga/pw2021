<?php 
  require "124210006.php";
  if(isset($_POST['submit'])){
    $data = $_POST['faktor'];
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>124210006_KUIS_WEBSIA</title>
    <style>
      .navbar-expand-lg
      {
        background-color: darkgreen;
      }
      .footer
      {
      width: 100%;
        height: 50px;
        padding-left: 10px;
        line-height: 50px;
        text-align: center;
        font-family: courier new;
      }
      .input
      {
        margin-top: 150px;
      }
      .button
      {
        margin-top: 100px;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
    <a class="navbar-brand">124210006_KUIS_WEBSIA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perulangan.php">Perulangan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div>
    <center><h1 class="text-success mt-4">Program Faktorial</h1></center>
    <hr>
  </div>
      <div class="text-center mt-5">
      <p>
        Hasil Faktorial Bilangan <?php echo "$data";?> adalah :
    </p>

    <?php echo "$data! = ";?><?php echo " = ".faktorial($data);?>
    </div>
  </form>
   <div class="footer fixed-bottom bg-success text-white">
      ©Copyright Web SI 2022
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>