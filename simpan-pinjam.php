<?php
    session_start();
    include "db.php";
    if (isset($_POST["submit"])) {
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $judul_buku = $_POST['judul_buku'];
    
        $query = mysqli_query($connect,("INSERT INTO peminjaman VALUES (NULL, '$nama_siswa', '$kelas', '$judul_buku', NOW(),'')"));
        // $query = mysqli_query($connect, $q);
        // $query = mysqli_query($connect, "INSERT INTO `buku` (`nobuku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES ('$nobuku', '$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit')");
        if($query){
            echo say("Berhasil dimasukkan");
            // header("location: index.php?act=peminjaman");
            echo "<script> document.location.href = 'index.php?act=peminjaman'</script>";
        }    
    }

    if(isset($_GET['konfirmasi'])){
        $id = $_GET['konfirmasi'];
        $query = mysqli_query($connect, ("UPDATE peminjaman SET tanggal_kembali = NOW() WHERE id_peminjam = $id"));
    if($query)
        echo say("Berhasil di konfirmasi, buku telah dikembalikan");
        // header('Location:index.php?act=peminjaman');
        echo "<script> document.location.href = 'index.php?act=peminjaman'</script>";
        // echo say("Berhasil diubah");
     }
     
?>