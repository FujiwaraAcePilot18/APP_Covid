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
	
	
	<title>Input Data Baru</title>
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
		<center class="mb-5" ><h2>Masukan Data Peserta Penerima Bansos Covid 19</h2></center>
		<hr>
		<?php if (isset($_GET['pesan'])) { ?>
			<?php if ($_GET['pesan'] == "berhasil") { ?>
				<div class="alert alert-primary" role="alert">
					Berhasil Menambahkan Data Baru Peserta Penerima Bansos
				</div>
			<?php }elseif ($_GET['pesan'] == "gagal") { ?>
				<div class="alert alert-danger" role="alert">
					Data Peserta Bansos Gagal Di Input
				</div>
			<?php }elseif ($_GET['pesan'] == "ekstensi") { ?>
				<div class="alert alert-warning" role="alert">
					Ekstensi File Harus PNG, BMP, Dan JPG
				</div>
			<?php }elseif ($_GET['pesan'] == "size") { ?>
				<div class="alert alert-warning" role="alert">
					Size File Tidak Boleh Lebih Dari 2 MB
				</div>
			<?php } ?>
		<?php } ?>
		<br>

		<form action="insert_act.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="validationDefault01" class="form-label">Nama Lengkap Peserta Bansos *</label>
				<input type="text" name="nama_lengkap" class="form-control" id="validationDefault01" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
			<div class="mb-3">
				<label for="validationDefault02" class="form-label">NIK *</label>
				<input type="text" name="nik" class="form-control" id="validationDefault02" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            	<div class="mb-3">
                <label for="validationDefault03" class="form-label">Jenis Kelamin *</label>
				<select class="form-select" aria-label="Default select example" name="jk" id="validationDefault03" required oninvalid="this.setCustomValidity('Silahkan Pilih Data Ini Terlebih Dahulu')" oninput="setCustomValidity('')">
  <option selected disabled value="">Jenis Kelamin</option>
  <option value="Laki - Laki">Laki - Laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
			</div>
			<div class="mb-3">
				<label for="validationDefault04" class="form-label">Alamat *</label>
				<textarea class="form-control" name="alamat" rows="3" id="validationDefault04" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
			</div>
			<div class="mb-3">
				<label for="validationDefault05" class="form-label">Upload Foto KTP & KK (Upload dalam satu frame) *</label>&nbsp;<a href="formats.html">Lihat Format</a>
				<input type="file" name="pas_foto" class="form-control" id="validationDefault05" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                <label for="validationDefault05" class="form-label">Ekstensi Foto : JPG, JPEG, BMP</label>
			</div>
           <div class="mb-3">
           <label for="validationDefault06" class="form-label">Nomor KK *</label>
             <input type="text" name="nokk" class="form-control" id="validationDefault06" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            <div class="mb-3">
             <label for="validationDefault07" class="form-label">Umur *</label>
             <input type="text" name="umur" class="form-control" placeholder="Umur Tidak Lebih Dari 25 Tahun" id="validationDefault07" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            <div class="mb-3">
            <label for="validationDefault08" class="form-label">Provinsi *</label>
             <input type="text" name="provinsi" placeholder="Contoh : Sumatera Selatan" class="form-control" id="validationDefault08" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            <div class="mb-3">
            <label for="validationDefault09" class="form-label">Kabupaten / Kota *</label>
             <input type="text" name="kabkota" placeholder="Contoh : Kabupaten Musi Banyuasin / Kota Palembang" class="form-control" id="validationDefault09" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
             <label for="validationDefault10" class="form-label">Kecamatan *</label>
             <input type="text" name="kecamatan" class="form-control"  id="validationDefault10" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
             <label for="validationDefault11" class="form-label">Kelurahan / Desa *</label>
             <input type="text" name="keldesa" class="form-control" id="validationDefault11" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
               <label for="validationDefault12" class="form-label">RT *</label>
             <input type="text" name="rt" class="form-control" id="validationDefault12" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
              <div class="mb-3">
              <label for="validationDefault13" class="form-label">RW *</label>
             <input type="text" name="rw" class="form-control" id="validationDefault13" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
              <div class="mb-3">
              <label for="validationDefault14" class="form-label">Penghasilan Sebelum *</label>
             <input type="text" name="penghasilansebelum" class="form-control" id="validationDefault14" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
             <label for="validationDefault15" class="form-label">Penghasilan Setelah *</label>
             <input type="text" name="penghasilansetelah" class="form-control" id="validationDefault15" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            <div class="mb-3">
                <label for="validationDefault16" class="form-label">Alasan Membutuhkan Bantuan *</label>
				<select class="form-select" aria-label="Default select example" name="alasan" id="validationDefault16" required oninvalid="this.setCustomValidity('Silahkan Pilih Data Ini Terlebih Dahulu')" oninput="setCustomValidity('')">
  <option selected disabled value="">Pilih Alasan</option>
  <option value=" Kehilangan pekerjaan">Kehilangan pekerjaan</option>
  <option value="Kepala keluarga terdampak atau korban Covid-19">Kepala keluarga terdampak atau korban Covid-19</option>
  <option value="Tergolong fakir/miskin semenjak sebelum Covid-19">Tergolong fakir/miskin semenjak sebelum Covid-19</option>
  <option value="Lainnya">Lainnya</option>
</select>
			</div>
             <div class="mb-3">Alasan Lainnya (Hanya diisi jika anda memiliki alasan lain)
             <input type="text" name="lainnya" class="form-control">
			</div>
            </br>
             <div class="mb-3">
             <label class="form-label">Keterangan : * Wajib Diisi</label>
			</div>
            <div class="form-check">
     							 <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required oninvalid="this.setCustomValidity('Silahkan Centang Untuk Melanjutkan Proses Input Data')" oninput="setCustomValidity('')">
     							 <label class="form-check-label" for="invalidCheck">
        							Saya menyatakan bahwa data yang diisikan adalah benar dan siap mempertanggungjawabkan apabila ditemukan ketidaksesuaian dalam data tersebut.
      							</label>
     							 <div class="invalid-feedback">
        							You must agree before submitting.
      							</div>
                                </div>
<br>
			<div class="mb-3">
				<button class="btn btn-success" type="submit" onClick="return confirm('Apakah Anda Yakin Ingin Mengunggah Data Ini ?, Pastikan semua data sudah terisi dengan benar')">Submit</button>
				<a href="home.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
		
	</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <script> AOS.init(); </script>
</body>
</html>