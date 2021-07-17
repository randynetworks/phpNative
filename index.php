<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM `students` ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="add.php">Tambah Mahasiswa</a>
    <table border="1">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($student = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $student["name"] . "</td>";
            echo "<td>" . $student["email"] . "</td>";
            echo "<td>" . $student["mobile"] . "</td>";
            echo '<td><a href="edit.php?id=' . $student["id"] . '">Edit</a>|
                    <a href="delete.php?id=' . $student["id"] . '">Delete</a></td>';
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>