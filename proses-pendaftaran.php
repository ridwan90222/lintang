<?php

include("connection.php");

if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $penyakit = $_POST['penyakit'];
    $umur = $_POST['umur'];


    $sql = "INSERT INTO apotiek ( id ,nama, penyakit, umur) 
    VALUE ('$id','$nama', '$penyakit', '$umur')";

    $query = mysqli_query($db, $sql);

    
    if( $query ) {
    
        header('Location: form_pendaftaran.php?status=sukses');
    } else {
        header('Location: form_pendaftaran.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>