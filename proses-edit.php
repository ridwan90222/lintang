
<?php

include("connection.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $penyakit = $_POST['penyakit'];
    $umur= $_POST['umur'];
    
    $sql = "UPDATE apotiek SET id='$id',nama='$nama',penyakit='$penyakit',umur='$umur'WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
          header('Location: member_page.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
?>
