<?PHP
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat izin Cuti</title>
    <link rel="stylesheet" href="css/style4.css">
</head>

<?php
$tahun3sisa = date('Y');
$tahun2sisa = $tahun3sisa - 1;
$tahun1sisa = $tahun3sisa - 2;


    $tglpengajuan = $_POST['tanggal'];
    $tahun=substr($tglpengajuan,0,4);
    $bulan=substr($tglpengajuan,5,2);
    $hari=substr($tglpengajuan,8,2);

    $tglawal = $_POST['tanggal1'];
    $tahun1=substr($tglawal,0,4);
    $bulan1=substr($tglawal,5,2);
    $hari1=substr($tglawal,8,2);

    $tglakhir = $_POST['tanggal2'];
    $tahun2=substr($tglakhir,0,4);
    $bulan2=substr($tglakhir,5,2);
    $hari2=substr($tglakhir,8,2);

    // switch tanggal pengajuan
    switch (date('m',strtotime($tglpengajuan))) {
        case '01':
            $bulan = 'Januari';
            break;

            case '02':
                $bulan = 'Februari';
                break;

                case '03':
                    $bulan = 'Maret';
                    break;

                    case '04':
                        $bulan = 'April';
                        break;

                        case '05':
                            $bulan = 'Mei';
                            break;

                            case '06':
                                $bulan = 'Juni';
                                break;

                                case '07':
                                    $bulan = 'Juli';
                                    break;

                                    case '08':
                                        $bulan = 'Agustus';
                                        break;

                                        case '09':
                                            $bulan = 'September';
                                            break;

                                            case '10':
                                                $bulan = 'Oktober';
                                                break;

                                                case '11':
                                                    $bulan = 'November';
                                                    break;

                                                    case '12':
                                                        $bulan = 'Desember';
                                                        break;
        
        default:
            $bulan = 'tidak diketahui';
            break;
    }

    // switch tanggal awal
    switch (date('m',strtotime($tglawal))) {
        case '01':
            $bulan1 = 'Januari';
            break;

            case '02':
                $bulan1 = 'Februari';
                break;

                case '03':
                    $bulan1 = 'Maret';
                    break;

                    case '04':
                        $bulan1 = 'April';
                        break;

                        case '05':
                            $bulan1 = 'Mei';
                            break;

                            case '06':
                                $bulan1 = 'Juni';
                                break;

                                case '07':
                                    $bulan1 = 'Juli';
                                    break;

                                    case '08':
                                        $bulan1 = 'Agustus';
                                        break;

                                        case '09':
                                            $bulan1 = 'September';
                                            break;

                                            case '10':
                                                $bulan1 = 'Oktober';
                                                break;

                                                case '11':
                                                    $bulan1 = 'November';
                                                    break;

                                                    case '12':
                                                        $bulan1 = 'Desember';
                                                        break;
        
        default:
            $bulan1 = 'tidak diketahui';
            break;
    }

    //switch tanggal akhir 
    switch (date('m',strtotime($tglakhir))) {
        case '01':
            $bulan2 = 'Januari';
            break;

            case '02':
                $bulan2 = 'Februari';
                break;

                case '03':
                    $bulan2 = 'Maret';
                    break;

                    case '04':
                        $bulan2 = 'April';
                        break;

                        case '05':
                            $bulan2 = 'Mei';
                            break;

                            case '06':
                                $bulan2 = 'Juni';
                                break;

                                case '07':
                                    $bulan2 = 'Juli';
                                    break;

                                    case '08':
                                        $bulan2 = 'Agustus';
                                        break;

                                        case '09':
                                            $bulan2 = 'September';
                                            break;

                                            case '10':
                                                $bulan2 = 'Oktober';
                                                break;

                                                case '11':
                                                    $bulan2 = 'November';
                                                    break;

                                                    case '12':
                                                        $bulan2 = 'Desember';
                                                        break;
        
        default:
            $bulan2 = 'tidak diketahui';
            break;
    }

    
    //Deklarasi tanggal pengajuan Indonesia
    $tglind=$hari.' - '.$bulan.' - '.$tahun;

    // deklarasi tanggal awal cuti
    $tglind1=$hari1.' - '.$bulan1.' - '.$tahun1;

    // deklarasi tanggal akhir cut
    $tglind2=$hari2.' - '.$bulan2.' - '.$tahun2;
    
?>

<div class="div1">
    <table class="lampiran">
        <tr>
            <td>LAMPIRAN</td>
            <td>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>SEKRETARIS MAHKAMAH AGUNG RI</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>NOMOR 13 TAHUN 2019</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Martapura,&nbsp;<?php echo $tglind; ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Kepada</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>KETUA PENGADILAN NEGERI MARTAPURA</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Di -</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>&nbsp;&nbsp;&nbsp;MARTAPURA</td>
        </tr>
    </table>
</div>

<!-- SELESAI -->

<div class="formulir">
    <header>
        <h3>FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</h3>
        <h4>Nomor : W15.U3/....../KP.05.2/........./<?php echo $tahun=date('Y') ?> </h4>
    </header>
    <br><br>
</div>

<!-- SELESAI -->

<table class="data_pegawai">
    <tr>
        <td style="padding-bottom: 10px;" colspan="4"><b>&nbsp;I. DATA PEGAWAI</b></td>
    </tr>

    <tr>
        <td style="width: 15%;">&nbsp;NAMA</td>
        <td style="width: 45%;">&nbsp;<?php echo $_POST['nama']; ?></td>
        <td style="width: 15%;">&nbsp;NIP</td>
        <td style="width: 25%;">&nbsp; <?php echo $_POST['nip']; ?></td>
    </tr>

    <tr>
        <td>&nbsp;JABATAN</td>
        <td>&nbsp;<?php echo $_POST['jabatan']; ?></td>
        <td>&nbsp;MASA KERJA</td>
        <td>&nbsp;<?php echo $_POST['masakerja']; ?></td>
    </tr>

    <tr>
        <td>&nbsp;UNIT KERJA</td>
        <td colspan="3">&nbsp;Pengadilan Negeri Martapura</td>
        
    </tr>
</table>
<br>

<!-- SELESAI -->


<table class="jenis_cuti">
    <tr>
        <td style="padding-bottom: 10px;" colspan="4"><b>&nbsp;II. JENIS CUTI YANG DIAMBIL&#42;&#42;</b></td>
    </tr>

    <div class="div_jc">
        <tr>
            <td style="width: 40%;">&nbsp;1. CUTI TAHUNAN</td>
            <td style="text-align: center; width: 10%;">&#10004;</td>
            <td style="width: 40%;">&nbsp;2. CUTI BESAR</td>
            <td style="text-align: center; width: 10%;"></td>
        </tr>
    </div>

    <tr>
        <td>&nbsp;3. CUTI SAKIT</td>
        <td style="text-align: center;"></td>
        <td>&nbsp;4. CUTI MELAHIRKAN</td>
        <td style="text-align: center;"></td>
    </tr>

    <tr>
        <td>&nbsp;5. CUTI KARENA ALASAN PENTING</td>
        <td style="text-align: center;"></td>
        <td>&nbsp;6. CUTI DILUAR TANGGUNGAN NEGARA</td>
        <td style="text-align: center;"></td>
    </tr>
</table>
<br>

<!-- SELESAI -->


<table class="alasan_cuti">
    <tr>
        <td style="padding-bottom: 10px;" colspan="1"><b>&nbsp;III. ALASAN CUTI</b></td>
    </tr>

    <tr>
        <td class="ac_td"><?php echo $_POST['alasan']; ?></td>
    </tr>
</table>
<br>

<!-- SELESAI -->

<table class="lama_cuti">
    <tr>
        <td style="padding-bottom: 10px;" colspan="6"><b>&nbsp;IV. LAMANYA CUTI</b> </td>
    </tr>

    <tr>
        <td style="width: 10%;">&nbsp;Selama</td>
        <td style="text-align: center; width: 20%;"><?php echo $_POST['lamacuti']; ?>(Hari<del>/Bulan/Tahun</del>)&#42;</td>
        <td style="width: 15%;">&nbsp;Mulai Tanggal</td>
        <td style="width: 20%;">&nbsp; <?php echo $tglind1; ?></td>
        <td style=" text-align: center; width: 5%;"> <b>S/D</b> </td>
        <td style="width: 20%;">&nbsp; <?php echo $tglind2; ?></td>
    </tr>
</table>
<br>

<!-- SELESAI -->

<table class="ca_cuti">
    <tr>
        <td style="padding-bottom: 10px;" colspan="6"><b>&nbsp;V. CATATAN CUTI&#42;&#42;&#42;</b></td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;1. CUTI TAHUNAN</td>
        <td style="text-align: center; width: 20%;" rowspan="2">PARAF <br> PETUGAS CUTI</td>
        <td style="width: 45%;">&nbsp;2. CUTI BESAR</td>
        <td style="text-align: center; width: 10%;"></td>
    </tr>

    <tr>
        <td style="text-align: center; width: 10%;">TAHUN</td>
        <td style="text-align: center; width: 10%;">SISA</td>
        <td style="text-align: center; width: 5%;">KETERANGAN</td>
        <td>&nbsp;3. CUTI SAKIT</td>
        <td></td>
    </tr>

    <tr>
        <td style="text-align: center;"><?php echo $_POST['thn1']; ?></td>
        <td style="text-align: center;"></td>
        <td>&nbsp;</td>
        <td rowspan="3"></td>
        <td>&nbsp;4. CUTI MELAHIRKAN</td>
        <td></td>
    </tr>

    <tr>
        <td style="text-align: center;"><?php echo $_POST['thn2']; ?></td>
        <td style="text-align: center;"></td>
        <td>&nbsp;</td>
        <td>&nbsp;5. CUTI KARENA ALASAN PENTING</td>
        <td></td>
    </tr>

    <tr>
        <td style="text-align: center;"><?php echo $_POST['thn3']; ?></td>
        <td style="text-align: center;"></td>
        <td>&nbsp;</td>
        <td>&nbsp;6. CUTI DILUAR TANGGUNGAN NEGARA</td>
        <td></td>
    </tr>

</table>
<br>

<!-- SELESAI -->




<table class="alamat_cuti">

    <tr>
        <td style="padding-bottom: 10px;" colspan="6"><b>&nbsp;VI. ALAMAT SELAMA MENJALANKAN CUTI</b></td>
    </tr>

    <tr>
        <td style="width: 50%;" rowspan="2"><?php echo $_POST['alct']; ?></td>
        <td style="text-align: center; width: 10%;">Telp.</td>
        <td style="width: 40%;">&nbsp;<?php echo $_POST['notelp']; ?></td>
    </tr>

    <tr>
        <td style="text-align: center;" colspan="2">Hormat saya, <br> <br> <br> <br> <?php echo $_POST['nama']; ?> <br> <?php echo $_POST['nip']; ?> </td>
    </tr>

</table>
<br>

<!-- SELESAI -->



<table class="atasan_langsung">
    <tr>
        <td style="padding-bottom: 10px;" colspan="4"><b>&nbsp;VII. PERTIMBANGAN ATASAN LANGSUNG&#42;&#42;</b></td>
    </tr>

    <tr style="text-align: center;">
        <td style="width: 20%;">DISETUJUI</td>
        <td style="width: 20%;">PERUBAHAN&#42;&#42;&#42;&#42;</td>
        <td style="width: 20%;">DITANGGUHKAN&#42;&#42;&#42;&#42;</td>
        <td style="width: 40%;">DISETUJUI&#42;&#42;&#42;&#42;</td>
    </tr>

    <tr>
        <td style="padding-bottom: 20px;"></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td class="al1"></td>
        <td class="al1"></td>
        <td class="al2"></td>
        <td style="text-align: center;  "> <br> <br> <br> <br> Kasubag Bagian <br> <?php echo $_POST['nama_penyetuju']; ?></td>
    </tr>

    <tr>
        <td class="al1"></td>
        <td class="al1"></td>
        <td class="al2"></td>
        <td style="text-align: center; border-top: hidden; "><?php echo $_POST['nip_penyetuju']; ?></td>
    </tr>


</table>
<br>

<!-- SELESAI -->

<table class="keputusan_pejabat">
    <tr>
        <td style="padding-bottom: 10px;" colspan="4"><b>&nbsp;VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN
                CUTI</b></td>
    </tr>

    <tr style="text-align: center;">
        <td style="width: 20%;">DISETUJUI</td>
        <td style="width: 20%;">PERUBAHAN&#42;&#42;&#42;&#42;</td>
        <td style="width: 20%;">DITANGGUHKAN&#42;&#42;&#42;&#42;</td>
        <td style="width: 40%;">DISETUJUI&#42;&#42;&#42;&#42;</td>
    </tr>

    <tr>
        <td style="padding-bottom: 20px;"></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td class="al1"></td>
        <td class="al1"></td>
        <td class="al2"></td>
        <td style="padding-bottom: 10px; text-align: center;  ">KETUA PENGADILAN MARTAPURA<br> <br> <br> <br> <br> Ketua <br> <?php echo $_POST['nama_ketua']; ?>
             <br><?php echo $_POST['nip_ketua']; ?></td>
    </tr>
</table>

<!-- SELESAI -->

<!-- Simpan Ke Database (Belakang Layar) -->

<?php 

    // $nip = $_POST['nip']; 
    // $nama = $_POST['nama'];
    // $tanggal = $_POST['tanggal'];
    // $kodecuti = $tanggal.'-'.$nip;
    // $jabatan = $_POST['jabatan'];
    // $lamacuti = $_POST['lama_cuti'];
    // $daritgl = $_post['tanggal1'];
    // $sampaitgl = $_POST['tanggal2'];

    include "sscuti.php";


?>

<!-- <script> -->
  <!-- window.print(); -->
<!-- </script> -->

<body class="" style="padding-top: 5mm;">

</body>

</html>