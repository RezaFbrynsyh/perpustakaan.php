<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $isbn = $_POST["telphone"];
        $unit = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES (
            NULL, '$nama', '$telphone', '$email'
        )");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
</head>
<body>
    <h1>Form Tambah Data Staff</h1>

    <form action="" methode="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="telphone">Telephone</label>
        <input type="text" id="telphone" name="telphone">

        <br>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <br>
        <br>

        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./staff.php">Kembali ke halaman staff</a>
</body>
</html>