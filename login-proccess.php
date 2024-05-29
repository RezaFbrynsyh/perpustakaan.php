<?php
    // session_start() artinya memulai interaksi dengan session
    session_start();

    include_once("./connect.php");

    // isset: "apakah ada?"
    // apakah ada kiriman data email dan password dari form?
    if(isset($_POST['email']) && isset($_POST['password'])) {
        // simpen data email ke variabel email
        $email = $_POST['email'];
        
        // simpan data password di variabel password
        $password = $_POST['password'];

        // cek ke db
        // ambil semuda data user yang emailnya sesuai dengan input di form
        $sql = "SELECT * FROM user WHERE email = '$email' ";
        $result = mysqli_query($db, $sql);

        // jika email ditemukan
        if (mysqli_num_rows ($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // kita cek kecocokan password dengan hash password di database
            // password_verirfy()
            if(password_verify($password, $row['password'])) {
                // kalau password bener, kasih SESSION['email']
                $_SESSION['email'] = $email;

                //pindah ke halaman index.php
                header("Location: index.php");
                exit;
            } else {
                // kalau password salah
                echo "Password Salah";
            }
        } else {
           // jika email tidak ditemukan
           echo "Email tidak ditemukan";
        }
    }
