<?php
    session_start();
    include "db.php";
    
    if (isset($_GET['deletepeminjaman'])) {
        $id_peminjam = $_GET['deletepeminjaman'];
        $sql = "DELETE FROM peminjaman where id_peminjam=$id_peminjam";
    
        var_dump($sql);
        

        $query = mysqli_query($connect,$sql);
        //  $query = mysqli_query($connect, "DELETE  FROM peminjaman  WHERE id_peminjam = $id_peminjam");
    if($query){
        echo say("Berhasil dihapus");
        // header( "location:index.php?act=peminjaman");
        echo "<script> document.location.href = 'index.php?act=peminjaman'</script>";
    } 
    else
        die(mysqli_error($connect));
    
}
?>