<?php
session_start();
if (isset($_POST['submit'])) {
  $nik        = $_POST['nik'];
  $password   = $_POST['password'];

  include "koneksi.php";

  $sql    = "SELECT * FROM `masyarakat` WHERE `nik`='$nik' AND `password`='$password'";
  $query  = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    $_SESSION['nik'] = $nik;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];
    header("location: masyarakat/index.php");
  } else {
    echo "<script>alert('Maaf anda gagal login'); window.location.assign('index.php');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php require_once __DIR__ . "./template-part/meta.php" ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Aplikasi Pengaduan Masyarakat!</h1>
                  </div>
                  <form class="user" method="post" action="">
                    <div class="form-group">
                      <input name="nik" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan NIK..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password..." required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    <a href="register.php" class="btn btn-success btn-user btn-block">
                      Belum punya akun...? Silahkan daftar
                    </a>
                    <a href="login.php" class="btn btn-success btn-user btn-block">
                      Login sebagai akun...? Petugas
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  </div>

</body>

</html>