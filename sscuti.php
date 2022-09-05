<?php
ob_start();

include "koneksi.php";


    




    $nip = $_POST['nip']; 
    $nama = $_POST['nama'];
    $masakerja = $_POST['masakerja'];
    $alasan = $_POST['alasan'];
    $tanggal = $_POST['tanggal'];
    $kodecuti = $tanggal.'-'.$nip;
    $jabatan = $_POST['jabatan'];
    $lamacuti = $_POST['lamacuti'];
    $tglawal = $_POST['tanggal1'];
    $tglakhir = $_POST['tanggal2'];
    $alct = $_POST['alct'];
    $notelp = $_POST['notelp'];
    $nama_penyetuju = $_POST['nama_penyetuju'];
    $nip_penyetuju =  $_POST['nip_penyetuju'];
    $nama_ketua = $_POST['nama_ketua'];
    $nip_ketua = $_POST['nip_ketua'];

    // variabel surat

//Bila Kode Cuti Belum Ada

// cek kode cuti sudah ada atau blm 
    $sql = mysqli_query($koneksi, "select * from cuti where kodecuti ='$kodecuti'");
    $cek = mysqli_num_rows($sql);

    if($cek == 0){
    // database
    mysqli_query($koneksi, "insert into cuti set
    nip = '$nip',
    nama = '$nama',
    masakerja = '$masakerja',
    alasan = '$alasan',
    tanggal = '$tanggal',
    kodecuti = '$kodecuti',
    jabatan = '$jabatan',
    lamacuti = '$lamacuti',
    daritgl = '$tglawal',
    sampaitgl = '$tglakhir',
    alct = '$alct',
    notelp = '$notelp',
    nama_penyetuju = '$nama_penyetuju',
    nip_penyetuju =  '$nip_penyetuju',
    nama_ketua = '$nama_ketua',
    nip_ketua = '$nip_ketua'
    ");
    }
        
    else
    {
        echo "data sudah ada";
    }
?>