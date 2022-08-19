<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script>
	$(document).ready(function(){
	$(".preloader").fadeOut();
	})
	</script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="logowebsite.png"
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
    
    

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
     <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
		
		
      }
    </style>
	
	<title>Laman Preview Data</title>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" data-aos="fade-down" data-aos-duration="1000"><img src="LogoKemensos.png" width="35" height="35">Kementerian Sosial Republik Indonesia |</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse" data-aos="fade-right"  data-aos-duration="1000">
		 <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Back to Top</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#about" onClick="return confirm('Aplikasi ini merupakan demonstrasi pengumpulan dana penerima covid 19, untuk lebih jelasnya silahkan hubungi author pada bagian hubungi kami')">Tentang</a>
          </li>
           <li class="nav-item">
            <a class="nav-link active" href="#about" onClick="return confirm('Untuk informasi lebih lanjut dapat menghubungi author melalui kontak dibawah ini, Whatsapp : 082179034476, Gmail : m.naufalbaskara395@gmail.com')">Hubungi Kami</a>
          </li>
          </li>
        </ul>
      </div>
      <span><font color="#FFFFFF"></font></span>
      &nbsp;
      &nbsp;
     <a href="logout.php" onClick="return confirm('Apakah Anda Ingin Keluar Dari App Ini ?')" class="btn btn-warning">Logout</a>
    
    </div>
    
  </nav>
</header>

<main class="flex-shrink-0">

	<div class="container mt-5 ">
		<center class="mb-5" ><h2>Laman Data Peserta Penerima Bansos Covid 19</h2></center>
		<hr>
		<?php if (isset($_GET['pesan'])) { ?>
			<?php if ($_GET['pesan'] == "berhasil") { ?>
				<div class="alert alert-primary" role="alert">
					Berhasil Mengubah Data Pesrta Bansos
				</div>
			<?php }elseif ($_GET['pesan'] == "gagal") { ?>
				<div class="alert alert-danger" role="alert">
					Gagal Mengubah Data Pesrta Bansos
				</div>
			<?php }elseif ($_GET['pesan'] == "ekstensi") { ?>
				<div class="alert alert-warning" role="alert">
					Ekstensi File Harus PNG, BMP Dan JPG
				</div>
			<?php }elseif ($_GET['pesan'] == "size") { ?>
				<div class="alert alert-warning" role="alert">
					Size File Tidak Boleh Lebih Dari 2 MB
				</div>
			<?php }elseif ($_GET['pesan'] == "hapus") { ?>
				<div class="alert alert-primary" role="alert">
					Berhasil Menghapus Data Peserta Bansos
				</div>
			<?php }elseif ($_GET['pesan'] == "gagalhapus") { ?>
				<div class="alert alert-danger" role="alert">
					Gagal Menghapus Data Peserta Bansos
				</div>
			<?php } ?>
		<?php } ?>
		<br>
      
      <p><form class="d-flex">
          <input class="form-control me-2" name="cari" type="search" placeholder="Cari Nama Peserta Bansos" aria-label="Search">
          <button class="btn btn-success" value="Cari" type="submit">Cari</button>
        </form></p>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<br><b>Hasil pencarian : ".$cari."</b></br>";
}
?>
        </br>
		<a href="insert.php" class="btn btn-primary mb-2">Tambah Data</a>
		<table class="table table-striped mt-4" id="myTable">
			<thead class="thead-dark">
				<tr>
					<th scope="col" width="1%">NO</th>
					<th scope="col">Nama Peserta</th>
					<th scope="col">NIK</th>
					<th scope="col">Alamat</th>
					<th scope="col" width="20%">Foto KTP & KK</th>
					<th scope="col" width="20%">Proses</th>
				</tr>
			</thead>

			<tbody>
				<?php 
				if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $get_data = mysqli_query($koneksi,"select * from siswa where siswa_nama like '%".$cari."%'");    
 }else{
  $get_data = mysqli_query($koneksi,"select * from siswa");  
 }
		
				$no = 1;
				
				while ($data = mysqli_fetch_array($get_data)) {
					

					?>
					<tr>
                   
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['siswa_nama']; ?></td>
						<td><?php echo $data['nik']; ?></td>
						<td><?php echo $data['siswa_alamat']; ?></td>
						<td>
							<?php 
							if ($data['siswa_foto'] == "") { ?>
								<img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
							<?php }else{ ?>
								<img src="foto/<?php echo $data['siswa_foto']; ?>" style="width:100px;height:100px;">
							<?php } ?>
						</td>
            
						<td>
							<a href="edit.php?id=<?php echo $data['id_siswa'] ?>" class="btn btn-warning text-white">Edit</a>
							<a href="delete.php?id=<?php echo $data['id_siswa'] ?>" onClick="return confirm('Apakah Anda Ingin Menghapus History Data Ini')" class="btn btn-danger">Hapus</a>
                            <a href="info.php?id=<?php echo $data['id_siswa'] ?>" class="btn btn-success">Info</a>
						</td>
					</tr>
                    
                    
                 
				
                 <?php }  ?>
			</tbody>
           
		</table>
       
       
	</div>
     
    </main>
  
    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <script> AOS.init(); </script>
  
</body>

</html>
