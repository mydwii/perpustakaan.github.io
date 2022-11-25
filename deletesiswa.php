<?php
    session_start();
    include "db.php";
    
    if (isset($_POST['deletesiswa'])) {
        $NIS = $_POST['deletesiswa'];
        $sql = "DELETE FROM siswa where NIS=$NIS";
        var_dump($sql);
        $query = mysqli_query($connect,$sql);
        // $query = mysqli_query($connect, "DELETE  FROM siswa where NIS =$NIS");
    if($query){
        echo say("Berhasil dihapus");
        // header( "location:index.php?act=siswa");
        echo "<script> document.location.href = 'index.php?act=siswa'</script>";
    } else
        die(mysqli_error($connect));
    
}
?>