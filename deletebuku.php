<?php
    session_start();
    include "db.php";
    if (isset($_POST['deletebuku'])) {
        $nobuku = $_POST['deletebuku'];
        $sql = "DELETE FROM buku where nobuku=$nobuku";
    
        var_dump($sql);
        

        $query = mysqli_query($connect,$sql);
        // $query = mysqli_query($connect, "DELETE  FROM buku where deletebuku=$_GET['nobuku']");
        if($query){
            // /echo say("Berhasil dihapus");
            echo say("Berhasil dihapus");
            echo "<script> document.location.href = 'index.php?act=buku'</script>";
            // header( "location:index.php?act=buku");
        } else{
            
        }
            die(mysqli_error($connect));
        
    }
?>