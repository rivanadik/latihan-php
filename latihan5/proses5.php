<?php
$username = $_POST['username'];
$password = $_POST['password'];

$namaBenar = "rivanadik";
$passwordBenar = "kiwkiwkiw";

if ($username === $namaBenar && $password === $passwordBenar) {
    echo"Login Berhasil";
} else {
    echo "Username atau password salah. Silakan coba lagi.";
}
?>