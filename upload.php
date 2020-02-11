<?php
	
	//Mengambil data dari koneksi.php
	include 'koneksi.php';

	//Ambil data File
	$namaFile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];
	$sizeFile = $_FILES['berkas']['size'];
	$isFormat = false;
	$cekFormat = explode(".", $namaFile);

	//Algoritma cek format file
	if(strcmp("xls", $cekFormat[count($cekFormat)-1])==0){
			$isFormat = true;
		} else {
			$isFormat = false;
		}
	if ($isFormat) {
		echo "Ada file dengan ekstensi xls";
	}

	//Tentukan lokasi file 
	//$dirUpload = "terupload/"; //terupload = nama folder

	//MySQL
	//$tanggal = date('Y-m-d');
	//$sql = "INSERT into detail(No,Keterangan,Tanggal,Link) values ('','$namaFile','$tanggal','$dirUpload$namaFile')";

	//Memindahkan dan mentukan lokasi file 
	// if($sizeFile < 2000000) //size kurang dari 2mb
	// {
	// 	$terUpload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
	// 	if($terUpload){
	// 		if (mysqli_query($konek,$sql)) {
	// 			echo "Berhasil menginputkan ke db";
	// 		}
	// 		else {
	// 			echo "Gagal Input ke DB <br/>";
	// 			echo "Upload Berhasil! <br/>";
	// 			echo "Link : <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
	// 		}
	// 	}
	// }
	// else
	// {
	// 	echo "File terlalu besar <br>";
	// 	echo "Upload Gagal!";
	// }
?>