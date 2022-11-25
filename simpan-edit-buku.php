<?php
    session_start();
    include "db.php";
    
    $sql = mysqli_query($connect, "SELECT * FROM buku");
    while($a=mysqli_fetch_array($sql))

    $nobuku = $_POST['nobuku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];


    $query = mysqli_query($connect, "UPDATE `buku` SET `judul_buku` = '$judul_buku', `pengarang` = '$pengarang', `penerbit` = '$penerbit', `tahun_terbit` = '$tahun_terbit'WHERE `buku`.`nobuku` = '$nobuku' ");

    // if ($connect->query($mysql_query_statement) === TRUE) {
    //     echo "Record updated successfully.";
    // }
    // else {
    //     echo "Error updating record: " . $conn->error;
    // }

    // $query = mysqli_query($connect, "update buku set nobuku, judul_buku, pengarang, penerbit, tahun_terbit VALUES ('$nobuku', '$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit')");
    
    if($query){
        echo say("Berhasil diedit");
        echo "<script> document.location.href = 'index.php?act=buku'</script>";
        // header("location: index.php?act=buku");
    }
    // if (isset($_GET['deletebuku'])) {
    //     $nobuku = $_GET['deletebuku'];
    //     $query = mysqli_query($connect, "DELETE  FROM buku WHERE $nobuku=nobuku");
    //     if($query){
    //         echo say("Berhasil dimasukkan");
    //         // header( "location:index.php?act=buku");
    //     } else
    //         die(mysqli_error($connect));
        
    // }
?>