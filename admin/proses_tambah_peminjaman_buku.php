<?php
    if($_POST){
       
        $tanggalpinjam=$_POST["tanggal_pinjam"];
        $tanggalkembali=$_POST["tanggal_kembali"];
        $id_siswa=$_POST["id_siswa"];

        include "koneksi.php";
        $input=mysqli_query($koneksi, "INSERT INTO peminjaman_buku ( tanggal_pinjam, tanggal_kembali, id_siswa)
         value ('".$tanggalpinjam."','".$tanggalkembali."','".$id_siswa."')");
        if($input){
        echo "<script>alert('Sukses Menambahkan Data Peminjaman');location.href='tambah_peminjaman_buku.php';</script>";
        } else {
        echo "<script>alert('Gagal');location.href='tambah_peminjaman_buku.php';</script>";
        }
        }
  ?>
        