<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['loged_in']) || $_SESSION['loged_in'] !== true){
  header('Location: login.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/prak%20pwd/LatihanKuis/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark"> <!--navbar-->
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Komunitas Kucing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="design.php">Design</a>
        </li>
      </ul>
    </div>
  </div>
</nav> <!--navbar-->

<div>
<h2 class="juduldesign">Design Laboratory</h2>
</div>

<div class = "imgdesign">
<img src="kucinghome.webp" alt="">
</div>

</body>
</html>