<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		$id = $_GET['id'];

		$query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa='$id'");
		$row = mysqli_fetch_array($query);

	}else{
		header("location:index.php");
	}
}else{
	header("location:index.php");
}

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
	
	<title>Informasi Data Peserta Bansos</title>
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
      <a href="home.php" class="btn btn-warning">Kembali Ke Beranda</a>
    </div>
  </nav>
</header>

	<div class="container mt-5 ">
		<center class="mb-5" ><h2>Informasi Data Penerima Bansos Covid 19</h2></center>
		<hr>
		<form action="edit_act.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Nama Lengkap Siswa *</label>
				<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $row['siswa_nama']; ?>" >
				<input type="hidden" name="id" class="form-control" value="<?php echo $row['id_siswa']; ?>" >
			</div>
			<div class="mb-3">
				<label class="form-label">NIK *</label>
				<input type="text" name="nik" class="form-control" value="<?php echo $row['nik']; ?>">
			</div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin *</label>
				<input type="text" name="jk" class="form-control" value="<?php echo $row['jk']; ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Alamat *</label>
				<textarea class="form-control" name="alamat" rows="3"><?php echo $row['siswa_alamat']; ?></textarea>
			</div>
			<div class="mb-3">
				<label name="pas_foto" class="form-label">Foto KTP dan KK</label>
				<br>
				<?php 
				if ($row['siswa_foto'] == "") { ?>
					<img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
				<?php }else{ ?>
					<img src="foto/<?php echo $row['siswa_foto']; ?>" style="width:100px;height:100px;">
				<?php } ?>
			</div>
            <div class="mb-3">
				<label class="form-label">No. KK *</label>
				<input type="text" name="nokk" class="form-control" value="<?php echo $row['nokk']; ?>">
			</div>
             <div class="mb-3">
				<label class="form-label">Umur *</label>
				<input type="text" name="umur" class="form-control" value="<?php echo $row['umur']; ?>">
			</div>
             <div class="mb-3">
				<label class="form-label">Provinsi *</label>
				<input type="text" name="provinsi" class="form-control" value="<?php echo $row['provinsi']; ?>">
			</div>
             <div class="mb-3">
				<label class="form-label">Kabupaten / Kota *</label>
				<input type="text" name="kabkota" class="form-control" value="<?php echo $row['kabkota']; ?>">
			</div>
              <div class="mb-3">
				<label class="form-label">Kecamatan *</label>
				<input type="text" name="kecamatan" class="form-control" value="<?php echo $row['kecamatan']; ?>">
			</div>
              <div class="mb-3">
				<label class="form-label">Kelurahan / Desa *</label>
				<input type="text" name="keldesa" class="form-control" value="<?php echo $row['keldesa']; ?>">
			</div>
             <div class="mb-3">
				<label class="form-label">RT *</label>
				<input type="text" name="rt" class="form-control" value="<?php echo $row['rt']; ?>">
			</div>
             <div class="mb-3">
				<label class="form-label">RW *</label>
				<input type="text" name="rw" class="form-control" value="<?php echo $row['rw']; ?>">
			</div>
             <div class="mb-3">
				<label class="form-label">Penghasilan Sebelum *</label>
				<input type="text" name="penghasilansebelum" class="form-control" value="<?php echo $row['penghasilansebelum']; ?>">
			</div>
            <div class="mb-3">
				<label class="form-label">Penghasilan Setelah *</label>
				<input type="text" name="penghasilansetelah" class="form-control" value="<?php echo $row['penghasilansetelah']; ?>">
			</div>
            <div class="mb-3">
                <label class="form-label">Alasan Membutuhkan Bantuan *</label>
				<input type="text" name="alasan" class="form-control" value="<?php echo $row['alasan']; ?>">
			</div>
             <div class="mb-3">
				<label class="form-label">Alasan Lainnya (Hanya diisi jika anda memiliki alasan lain)</label>
				<input type="text" name="lainnya" class="form-control" value="<?php echo $row['lainnya']; ?>">
			</div>
            </br>
       
			<div class="mb-3">
				<a href="home.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
		
	</div>
         <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <script> AOS.init(); </script>

</body>
</html>