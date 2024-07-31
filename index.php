<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_siswa;";
	$sql = mysqli_query($conn, $query); 
	$no = 0; 

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	 <script src="js/bootstrap.bundle.min.js"></script>

	 <!-- Font Awesome -->
	 <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

	<title>sekolah</title>
</head>
<body>
	<!-- Judul -->
	<div class="container-fluid">
		<h1 class="mt-4"> DATA SISWA </h1>
	<a href="tambah.php" type="button" class="btn btn-primary mb-3">
		<i class="fa fa-plus"></i> Tambah Data</a>
		<div class="table-responsive">
		  <table class="table align-middle table-bordered table-hover">
		    <thead>
		      <tr>
		        <th><Center>No.</Center></th>
		        <th>NISN</th>
		        <th>Nama Siswa</th>
		        <th>Jenis Kelamin</th>
		        <th>Foto Siswa</th>
		        <th>Alamat</th>
		        <th>Aksi</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    	while($result = mysqli_fetch_assoc($sql)){
		    ?>
				   	<tr>
				        <td><Center>
				        	<?php echo ++$no ?>. 
				        </Center></td>
				        <td>
				        	<?php echo $result['nisn']; ?>
				        </td>
				        <td>
				        	<?php echo $result['nama_siswa']; ?>
				        </td>
				        <td>
				        	<?php echo $result['jenis_kelamin']; ?>
				        </td>
				        <td>
				        	<img src="img/<?php echo $result['foto_siswa']; ?>" style="width: 150px;">
				        </td>
				        <td><?php echo $result['alamat']; ?></td>
				        <td>
				        	<a href="tambah.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-warning btn-sm">
				        		<i class="fa fa-pencil-square-o"></i>
				        	</a>
				        	<a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda ingin menghapus data tersebut???')">
				        		<i class="fa fa-trash-o"></i>
				        	</a>
				        </td>
				    </tr>
			<?php
				}
			?>
		  	</tbody>
		  </table>
		</div>
	</div>
</body>
</html>