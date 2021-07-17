<?php

include_once("config.php");

if(isset($_POST['update'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];


    $result = mysqli_query($mysqli, 
    "UPDATE `students` SET name='$name', email='$email',mobile='$mobile' WHERE id='$id'");

    header("Location: index.php");
}

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM `students` WHERE id=$id");

while ($student = mysqli_fetch_array($result)) {
    $name = $student["name"];
    $email = $student["email"];
    $mobile = $student["mobile"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <a href="index.php">Kembali</a>
    <h1>Edit mahasiswa <?= $name ?></h1>
    <br>

    <form action="edit.php" method="post">
        <div>
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="name" value="<?= $name?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="<?= $email ?>">
        </div>
        <div>
            <label for="">Mobile</label>
            <input type="text" name="mobile" value="<?= $mobile ?>">
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit" name="update" value="Edit Mahasiswa">
    </form>
</body>

</html>