<!DOCTYPE html>
<html>
<head>
	<title>Output</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="datatables/lib/css/dataTables.bootstrap.min.css"/>
</head>
<body>
	<!-- Mengambil data dari Database -->
	<?php
		include 'koneksibpk.php';
		$sql = "SELECT * FROM santunan ORDER BY status ASC, tglcair DESC";
		$hasil = mysqli_query($konek,$sql);
	?>
	<div class="container">
		<h3>Santunan</h3>
	</div>
		<div class="table-responsive">
		<table id="employee_data" class="table table-condensed table-bordered table-hover">
			<thead>
				<tr align="center"> 	
					<th>Nama Almarhum</th>
					<th>Alamat</th>
					<th>Kelurahan</th>
					<th>Kecamatan</th>
					<th>Tgl Wafat</th>
					<th>Nama Pemohon</th>
					<th>Alamat</th>
					<th>Status</th>
					<th>Tgl Transfer</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
		</div>

	<!-- Load Jquery & Datatable JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
    <script type="text/javascript" src="datatables/lib/js/dataTables.bootstrap.min.js"></script>
    <script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#employee_data').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "http://localhost/uploadBootstrap/view.php", // URL file untuk proses select datanya
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                { "data": "namaalm" }, // Tampilkan nama
                { "data": "alamatalm" },  // Tampilkan alamat
                { "data": "kelalm" }, // Tampilkan telepon
                { "data": "kecalm" }, // Tampilkan alamat
                { "data": "tglalm" },
                { "data": "namapmohon" },
                { "data": "alamatpmohon" },
                { "data": "status" },
                { "data": "tglcair" },
            ],
        });
    });
    </script>
</body>
</html>
