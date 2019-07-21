<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran pasien</title>

    <style>
        body{
            background-color: chocolate;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran pasien Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
            <p>
            <label for="id">id </label>
            <input type="number" name="id" placeholder="masukkan angka 1-5" min="1" max="5" required />
        </p>
        <p>
            <label for="nama">NAMA: </label>
            <input type="text" name="nama" placeholder="nama anda" required />
        </p>
        <p>
            <label for="penyakit">Penyakit: </label>
            <input type="text" name="penyakit" placeholder="Penyakit yang dialami" required />
        </p>
        <p>
            <label for="umur">Umur: </label>
            <input type="number" name="umur" placeholder="Umur" required />
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        <p><a href="member_page.php"> kembali </a></p>

        </fieldset>

    </form>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Pasien baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>


