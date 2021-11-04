<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $Nim = $_POST['Nim'];
        $Nama = $_POST['Nama'];
        $Jenis_kelamin = $_POST['Jenis_kelamin'];
        $Agama = $_POST['Prodi'];
        $NoHP = $_POST['Angkatan'];
        $Alamat = $_POST['Alamat'];

        $query = mysqli_query($koneksi, "INSERT INTO Mahasiswa(Nim, Nama, Jenis_kelamin, Prodi, Angkatan, Alamat) VALUES('$Nim','$Nama', '$Jenis_kelamin','$Prodi', '$Angkatan', '$Alamat')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $Id = $_POST['Id'];
        $Nim = $_POST['Nim'];
        $Nama = $_POST['Nama'];
        $Jenis_kelamin = $_POST['Jenis_kelamin'];
        $Agama = $_POST['Prodi'];
        $NoHP = $_POST['Angkatan'];
        $Alamat = $_POST['Alamat'];

        $query = mysqli_query($koneksi, "UPDATE Mahasiswa SET Nama='$Nim' Nama='$Nama', Jenis_kelamin='$Jenis_kelamin',Prodi='$Prodi', Angkatan='$Angkatan', Alamat='$Alamat' WHERE Id='$Id'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $IdMhsw = $_POST['Id'];
        $query = mysqli_query($koneksi, "DELETE FROM Mahasiswa WHERE Id='$Id'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>
