<?php

$connect = mysqli_connect('localhost', 'root', '', 'mysql_latihan');

if (!$connect) {
    exit("Gagal koneksi database...");
}