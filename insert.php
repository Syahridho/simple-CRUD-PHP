<?php 

include('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];

$insert = mysqli_query($connect, "INSERT INTO siswa SET id='$id', nama='$name', kelas_id='$class' ");

if ($insert) {
    header('Location: list.php');
} else {
    echo "Input data gagal";
}