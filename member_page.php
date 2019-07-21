<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Pasien</title>

<style>
    body{
        background-color: chocolate;
    }

</style>
</head>

<body>
    <header>
        <h3 style="text-align: center;">List Pasien Yang Sudah Terdaftar</h3>
    </header>

    <p style="font-size: 30px;"> Mendaftar klik <a href="form_pendaftaran.php">disini</a></p>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NAMA</th>
            <th>PENYAKIT</th>
            <th>UMUR</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM apotiek";
        $query = mysqli_query($db, $sql);

        while($g = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$g['id']."</td>";
            echo "<td>".$g['nama']."</td>";
            echo "<td>".$g['penyakit']."</td>";
            echo "<td>".$g['umur']."</td>";
            
            echo "<td>";
            echo "<a href='ubah.php?id=".$g['id']."'>Ubah</a>  ";
            echo "</td>";
            echo "<td>";
            echo "<a href='hapus.php?id=".$g['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>