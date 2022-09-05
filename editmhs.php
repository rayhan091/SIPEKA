<?php
//include('dbconnected.php');
include('koneksi.php');

// if you use GET
// $id = $_GET['id'];
// $sql= "select * from cuti where id=$id";
// $hasil = mysqli_query($koneksi,$sql);
//$data=mysqli_fetch_array($sql);
// $tampil = mysqli_fetch_array($hasil);

$id = $_POST['id'];

$lamacuti = $_POST['lamacuti'];
$daritgl = $_POST['daritgl'];
$sampaitgl = $_POST['sampaitgl'];

//query update
$query = "UPDATE cuti SET lamacuti='$lamacuti' , daritgl='$daritgl', sampaitgl='$sampaitgl'  WHERE id='$id' ";

if (mysqli_query($koneksi, $query)) {
	# credirect ke page index
	// echo "Data Berhasil di Ubah";
	header("location:pagemhs.php");
}else{
	//echo "ERROR, data gagal diupdate". mysqli_error();
	echo "ERROR, data gagal diupdate";
}

//mysql_close($host);
?>