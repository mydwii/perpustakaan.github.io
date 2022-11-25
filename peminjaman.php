
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a43f61d4b2.js" crossorigin="anonymous"></script>
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <style>
    form{
        margin: auto;
    }
        .btn{
          margin: 15px;
        }

   </style>
</head>
<body>
    <div>
        <br>
        <h1><p class="text-center link-light">Administrasi Peminjaman</p></h1>
        <table>
        <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-3 col-md-2 col-lg-3">
<form action="simpan-pinjam.php" method="post">
        <h3><div class="d-flex justify-content-center link-light">Tambah Peminjaman</div></h3>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
  <label for="floatingInput">Nama Siswa</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="kelas" placeholder="Kelas">
  <label for="floatingInput">Kelas</label>
</div>
<div class="form-floating mb-1">
  <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku">
  <label for="floatingInput">Judul Buku</label>
</div>
<br>
<div class="d-flex justify-content-center"> 
<!-- <button type="reset" class="submit" value="submit">reset</button>  -->
<button type="reset" class="btn btn-primary" value="submit">Reset</button>
<!-- <button type="submit" class="submit right" value="tambah">tambah</button> -->
<button type="submit" class="btn btn-primary" name="submit" value="tambah">Tambah</button>
</div>
</form>
</div>
</div>
</div>
<br>
<br>
<br>
        </table>
    </div>
    <div class="tabel">
    <table class="table table-striped table-hover link-light" id="table">
    <div class="row"><div class="d-flex justify-content-center">
    <div class="col-sm-6 col-md-5 col-lg-6">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Tanggal Kembali</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
        <?php
          $sql = mysqli_query($connect, "SELECT * FROM peminjaman");
          while($a=mysqli_fetch_array($sql)){
        ?>
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            <tbody>
              <th scope="row" class="text-white">#</th>
              <td class="text-white"><?=$a['nama_siswa'];?></td>
              <td class="text-white"><?=$a['kelas'];?></td>
              <td class="text-white"><?=$a['judul_buku'];?></td>
              <td class="text-white"><?=$a['tanggal_pinjam'];?></td>
              <td class="text-white"><?=$a['tanggal_kembali'];?></td>
              <?php $test = $a['id_peminjam'];?>
              <td><a href='simpan-pinjam.php?konfirmasi=<?php echo $test?>'><button type="button" class="btn btn-success">Konfirmasi</button></a></td>
              <td><form action="http://localhost/perpustakaan/deletepeminjaman.php" method="GET">
  <input type="hidden" value="<?php echo $test ?>" name="deletepeminjaman">
                <button type="submit" class="btn btn-danger"></a> Hapus</button></form></td>
              <?php
                }
              ?>
            </tbody>
          </div> 
          <div class="col-1"></div>
        </div>
        </div>
        </div>
              </div>
              </table>
</body>
</html>
<?php 
// include "db.php";

//     if(isset($_GET['kon'])){
//     $query = mysqli_query($connect, ("UPDATE peminjaman SET tanggal_kembali = NOW() WHERE id_peminjam = '$id_peminjam'"));
//     if($query)
//         echo say("Berhasil diubah", "index.php?act=peminjaman");
//     }
// if(isset($_GET['konfirmasi'])){
//   $id = $_GET['konfirmasi'];
//   $query = mysqli_query($connect, ("UPDATE peminjaman SET tanggal_kembali = NOW() WHERE id_peminjam = $id"));
// if($query)
//   echo say("Berhasil diubah", "index.php?act=peminjaman");
//   header('Location:index.php?act=peminjaman');
//   echo say("Berhasil diubah");
// }

?>