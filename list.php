<?php 

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM siswa");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Tambahkan Data</a>

    <br>

    <form action="search.php" method="get">
        <input type="text" name="keyword" id="keyword" placeholder="search">
        <button type="submit">Search</button>
    </form>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $result) :?>
                <tr>
                    <td><?php echo $result['id']?></td>
                    <td><?php echo $result['nama']?></td>
                    <td><?php echo $result['kelas_id']?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $result['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $result['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
