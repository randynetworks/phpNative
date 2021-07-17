<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Mahasiswa</title>
</head>

<body>
    <a href="index.php">Kembali</a>
    <h1>Tambah data mahasiswa</h1>
    <br>

    <form action="add.php" method="post">
        <div>
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Mobile</label>
            <input type="text" name="mobile">
        </div>
        <input type="submit" name="submit" value="Tambah Mahasiswa">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO 
            students(name, email, mobile) 
            VALUES ('$name', '$email', '$mobile')");

        header("Location: index.php");
    }
    ?>


</body>

</html>