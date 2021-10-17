<?php
    if($_POST){
       
        $tanggalpengembali=$_POST["tanggal_pengembalian"];
        $denda=$_POST["denda"];
        $id_peminjaman_buku=$_POST["id_peminjaman_buku"];

        include "koneksi.php";
        $input=mysqli_query($koneksi, "INSERT INTO pengembalian_buku (  tanggal_pengembalian, denda, id_peminjaman_buku)
         value ('".$tanggalpengembali."','".$id_peminjaman_buku."','".$denda."')");
        if($input){
        echo "<script>alert('Sukses Menambahkan Data Pengembalian');location.href='tambah_pengembalian_buku.php';</script>";
        } else {
        echo "<script>alert('Gagal');location.href='tambah_pengembalian_buku.php';</script>";
        }
        }
  ?>
        