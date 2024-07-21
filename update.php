<?php
include('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];

$update = mysqli_query($connect, "UPDATE siswa SET nama='$name', kelas_id='$class' WHERE id='$id' ");

if ($update) {
    header('Location: list.php');
} else {
    echo "Update data gagal";
}