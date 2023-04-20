<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="APPM - Aplikasi Pengaduan Masyarakat">
    <meta name="author" content="natainditam">
    <title>APPM - Aplikasi Pengaduan Masyarakat</title>
    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="./assets/vendor/jquery/jquery.min.js" defer></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js" defer></script>
    <!-- Custom scripts for all pages-->
    <script src="./assets/js/sb-admin-2.min.js" defer></script>

</head>

<body class="bg-gradient-primary">
    <?php
    $page = $_GET['page'] ?? "";

    switch ($page) {
        case 'login':
            include 'login.php';
            break;
        case 'registrasi':
            include 'registrasi.php';
            break;
        default:
            include 'login.php';
            break;
    }
    ?>
</body>

</html>