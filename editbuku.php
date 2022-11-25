
<head>
<style>
.btn{
          margin: auto;
        }
   </style>
</head>

<div>
        <br>
        <table>
        <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-3 col-md-2 col-lg-3">
        <form action="simpan-edit-buku.php" method="post">
        <h3><div class="d-flex justify-content-center link-light">Edit Buku</div></h3>
        <?php
            $nobuku = $_GET['editbuku'];
            $sql  = mysqli_query($connect, "select * from buku where nobuku='$nobuku'");
            $a = mysqli_fetch_array($sql);
        ?>
        <div class="form-floating mb-1" >
        <input type="hidden" class="form-control" name="nobuku" placeholder="No Buku" value="<?= $a['nobuku']?>">
  <label for="floatingInput">No Buku</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku" value="<?= $a['judul_buku']?>">
  <label for="floatingInput">Judul Buku</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="pengarang" placeholder="Pengarang" value="<?= $a['pengarang']?>">
  <label for="floatingInput">Pengarang</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="<?= $a['penerbit']?>">
  <label for="floatingInput">Penerbit</label>
</div>
<div class="form-floating mb-1">
  <input type="date" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit" value="<?= $a['tahun_terbit']?>">
  <label for="floatingInput">Tahun Terbit</label>
</div>
<br>
<div class="d-flex justify-content-center"> 
<!-- <button type="reset" class="submit" value="submit">reset</button> -->
<!--  -->

<!-- <a href="deletebuku.php?deletebuku=<?= $nobuku ?>"><button class="btn btn-danger"> Hapus</button></a> -->
<!-- <button type="submit" class="submit right" value="selesai">selesai</button> -->
<button type="submit" class="btn btn-primary" value="selesai">Selesai</button>
<!-- </div> -->
</form>
<form action="http://localhost/perpustakaan/deletebuku.php" method="POST">
  <input type="hidden" value="<?php echo $nobuku ?>" name="deletebuku">
  <button type="submit" value="hapus" class="btn btn-danger">Hapus</button>
</form>
</div>
</div>
</div>
</div>
<br>