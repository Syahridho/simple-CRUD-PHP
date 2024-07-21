<?php 

include('connection.php');

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM siswa WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        
        <label for="id">ID</label>
        <input type="text" readonly name="id" value="<?php echo $result[0]['id'] ?>">
        <br>
        <label for="name">Nama</label>
        <input type="text" name="name" value="<?php echo $result[0]['nama'] ?>">
        <br>
        <label for="class">Kelas</label>
        <input type="text" name="class" value="<?php echo $result[0]['kelas_id'] ?>">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>