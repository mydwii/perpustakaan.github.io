<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "projek_perpustakaan";

// // Create connection
// $connect = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($connect->connect_error) {
//   die("Connection failed: " . $connect->connect_error);
// }
// echo "Connected successfully";

    $connect = mysqli_connect('localhost', 'root', '');
    $select = mysqli_select_db($connect, "projek_perpustakaan");

   function say($pesan, $lokasi=NULL){
        $a ="
            <script>
            window.alert('$pesan'),
            window.locatime='$lokasi';
            </script>
        ";
            return$a;

    }

?>