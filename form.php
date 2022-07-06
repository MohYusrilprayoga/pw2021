<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
  body
  {
    background-color: white;
  }
  hr
  {
    color: black;
  }
  .navbar-expand-lg {
     background-color:green;
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
    .container
    {
      color: white;
    }

</style>
<title>124210006_KUIS_WEBSIA</title>
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
<h1 class="text-center text-success mt-4">Form Registrasi</h1>
<hr class="bg-cark">
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 ">
      <img width="640" height="570" src="tumbuhan.jpg" alt="Gambar tumbuhan">
    </div>
    <div class="col-md-6 bg-success">
      <div class="container">
    <form  class="row g-3 px-4 py-5" action="output.php" method="post">
        <div class="col-12">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
        </div>
        <div class="col-md-7">
          <input type="text" class="form-control" id="lahir" name="lahir"  placeholder="Tempat Lahir">
        </div>
        <div class="col-md-5">
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="col-12">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="col-12">
          <input type="password" class="form-control" id="email" name="password" placeholder="Password">
        </div>
        <div class="col-12">
          Jenis Kelamin
        </div>
        <div class="col-md-6">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="kuis" id="laki" value="Laki-Laki">
          <label class="form-check-label" for="laki">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="kuis" id="pr" value="Perempuan">
          <label class="form-check-label" for="pr">Perempuan</label>
        </div>
        </div>
        <div class="col-7">
          <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="kelas">
          <option selected>Pilih Kelas</option>
          <option >Pemrograman Web</option>
          </select>
          </div>
        </div>
        <div class="col-12 ms-5">
          Kuisnya Susah?
        </div>
        <br>
        <div class="col-md-6 ms-5">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="check" id="ya" value="Ya">
          <label class="form-check-label" for="ya">Ya</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="check" id="td" value="Tidak">
          <label class="form-check-label" for="td">Tidak</label>
        </div>
        </div>
        <div class="button">
        <div class="col">
          <button type="submit" class="btn btn-outline-light" style="margin-left: 250px;">Submit</button>
          <button type="reset" class="btn btn-outline-light" style="margin-left: 20px;">Reset</button>
        </div>
        </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br>
 
     <div class="footer bg-success text-light">
      ©Copyright Web SI 2022
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>