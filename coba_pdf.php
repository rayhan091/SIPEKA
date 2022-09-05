<?php ob_start(); ?>

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
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Martapura,<?php echo $_POST['tanggal']; ?></td>
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
        <td>&nbsp;GOL. RUANG</td>
        <td>&nbsp;</td>
    </tr>

    <tr>
        <td>&nbsp;UNIT KERJA</td>
        <td>&nbsp;Pengadilan Negeri Martapura</td>
        <td>&nbsp;MASA KERJA</td>
        <td>&nbsp;<?php echo $_POST['masa_kerja']; ?></td>
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
        <td style="text-align: center; width: 20%;"><?php echo $_POST['lama_cuti']; ?>(Hari<del>/Bulan/Tahun</del>)&#42;</td>
        <td style="width: 15%;">&nbsp;Mulai Tanggal</td>
        <td style="width: 20%;">&nbsp; <?php echo $tglawal; ?></td>
        <td style=" text-align: center; width: 5%;"> <b>S/D</b> </td>
        <td style="width: 20%;">&nbsp; <?php echo $tglakhir; ?></td>
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



<?php
	$html = ob_get_contents();
	ob_end_clean();

	require 'plugin/html2pdf/autoload.php';

	$pdf = new Spipu\Html2Pdf\Html2Pdf('P','L','fr', true, 'UTF-8', array(23, 5, 
        15, 15), false);
	$pdf->WriteHTML($html);
	$pdf->output();
	// $pdf->Output('Data Sales.pdf', 'D');
?>