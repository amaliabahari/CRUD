<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$genre = $_POST['genre_bk'];
$penerbit = $_POST['terbit_bk'];


//query

$query =  "INSERT INTO buku(judul_buku  , genre_buku , penerbit_buku) VALUES('$judul' , '$genre' , '$penerbit' , '$genre')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:index.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>