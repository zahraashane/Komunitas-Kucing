<?php
session_start()
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



<div class="contain form-container">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4">Pendaftaran Komunitas Kucing</h3>

        <?php
         if (isset($_SESSION['login_error'])){
        echo '<div class = "error-message show">';
        echo htmlspecialchars($_SESSION['login_error']);
        echo'</div>';
        unset($_SESSION['login_error']); 
         }
        ?>

        <form method="post" action="proses_login.php">

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="ttl" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Kelompok Umur</label>
                <select name="umur" class="form-select" required>
                    <option value="">-- Pilih Kelompok Umur --</option>
                    <option>Anak-anak</option>
                    <option>Remaja</option>
                    <option>Dewasa</option>
                </select>
            </div>

            <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label><br>
               <input type="radio" id="gender1" name="jk" value="laki-laki">
               <label for="gender1"> Laki-laki</label><br>
               <input type="radio" id="gender2" name="jk" value="perempuan">
               <label for="gender2"> Perempuan</label><br>
            </label>
            </div>
            
            <div class="mb-3">
            <label class="form-label">Hobi</label><br>
               <input type="checkbox" id="hobi1" name="hobi[]" value="main-game">
               <label for="hobi1"> Main Game</label><br>
               <input type="checkbox" id="hobi2" name="hobi[]" value="ngoding">
               <label for="hobi2"> Ngoding</label><br>
               <input type="checkbox" id="hobi3" name="hobi[]" value="bermain-kucing">
               <label for="hobi3"> Bermain dengan kucing</label><br>
            </label>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Asal Daerah</label>
                <input type="text" name="asal" class="form-control" placeholder="Masukkan asal daerah" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alasan Ingin Bergabung</label>
                <textarea class="form-control" name="alasan" rows="3" placeholder="Masukkan alasan ingin bergabung" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">
                    Kirim Pendaftaran
                </button>
            </div>

        </form>
    </div>
</div>

</body>
</html>