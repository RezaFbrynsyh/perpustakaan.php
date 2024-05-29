<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telphone = $_POST["telphone"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "UPDATE staff SET 
            nama='$nama', telphone='$telphone', email='$email' WHERE id=$id");
            
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Staff</title>
</head>
<body>
    <h1>Form Edit Data Staff</h1>

    <form action="" methode="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama'] ?>" type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="telphone">Telephone</label>
        <input value="<?php echo $staff['telphone'] ?>" type="text" id="telphone" name="telphone">

        <br>
        <br>

        <label for="email">Email</label>
        <input value="<?php echo $staff['email'] ?>" type="email" id="email" name="email">

        <br>
        <br>

        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./staff.php">Kembali ke halaman staff</a>
</body>
</html>