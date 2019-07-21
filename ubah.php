<?php

include("connection.php");


if( !isset($_GET['id']) ){
    header('Location: member_page.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM apotiek WHERE id=$id";
$query = mysqli_query($db, $sql);
$g = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA</title>
    
    <style>
        body{
            background-color: chocolate;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $g['id'] ?>" />

            <p>
            <label for="nama">NAMA: </label>
            <input type="text" name="nama" placeholder="masukkan nama anda" 
            value="<?php echo $g['nama'] ?>" />
            </p>
            <p>
            <label for="penyakit">Penyakit: </label>
            <input type="text" name="penyakit" placeholder="penyakit" 
            value="<?php echo $g['penyakit'] ?>" />
            </p>
            <p>
            <label for="umur"> Umur: </label>
            <input  required type="number" name="umur" placeholder="Umur"
                         value="<?php echo $g['umur'] ?>"/>
            </p>
            <p>
            <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>