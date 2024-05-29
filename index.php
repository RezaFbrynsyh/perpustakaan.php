<?php
    // memulai interaksi SESSION
    session_start();

    // cek apakah ada SESSION["email"]
    // ! : not (tidak)
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-3">Aplikasi Perpustakaan</h1>

    <a class="btn btn-primary" href="./buku.php">Lihat daftar buku</a>
    
    <a class="btn btn-primary" href="./staff.php">Lihat daftar staff</a>
    <br>
    <form class="mt-3" action="logout-proccess.php" method="POST">
        <button class="btn btn-danger" type="submit">LOGOUT</button>
    </form>
    </div>
</body>
</html>