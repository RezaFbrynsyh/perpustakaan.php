<?php
    // memulai interaksi dengan session 
    session_start();

    // menghilangkan session
    session_destroy();
    session_unset();

    // pindah ke halaman login
    header("Location: login.php");