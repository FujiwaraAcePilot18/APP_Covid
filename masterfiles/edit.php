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
	
	<title>Ubah Data</title>
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
		<center class="mb-5" ><h2>Laman Edit Data Peserta Bansos Covid 19</h2></center>
		<hr>
		<form action="edit_act.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="validationDefault01" class="form-label">Nama Lengkap Siswa *</label>
				<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $row['siswa_nama']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')" >
				<input type="hidden" name="id" class="form-control" value="<?php echo $row['id_siswa']; ?>" >
			</div>
			<div class="mb-3">
				<label for="validationDefault02" class="form-label">NIK *</label>
				<input type="text" name="nik" class="form-control" value="<?php echo $row['nik']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            <div class="mb-3">
                <label for="validationDefault03" class="form-label">Jenis Kelamin *</label>
				<select class="form-select" aria-label="Default select example" name="jk" value="<?php echo $row['jk']; ?>" required oninvalid="this.setCustomValidity('Silahkan Pilih Data Ini')" oninput="setCustomValidity('')">
  <option selected disabled value>Jenis Kelamin</option>
  <option value="Laki - Laki">Laki - Laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
			</div>
			<div class="mb-3">
				<label for="validationDefault04" class="form-label">Alamat *</label>
				<textarea class="form-control" name="alamat" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')" rows="3"><?php echo $row['siswa_alamat']; ?></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Upload Foto KTP & KK (Upload dalam satu frame) *</label>&nbsp;<a href="formats.html">Lihat Format</a>
				<input type="file" name="pas_foto" class="form-control" >
                <label class="form-label">Ekstensi Foto : JPG, JPEG, BMP</label>
				<br>
				<?php 
				if ($row['siswa_foto'] == "") { ?>
					<img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
				<?php }else{ ?>
					<img src="foto/<?php echo $row['siswa_foto']; ?>" style="width:100px;height:100px;">
				<?php } ?>
                
			</div>
            <div class="mb-3">
				<label for="validationDefault05" class="form-label">No. KK *</label>
				<input type="text" name="nokk" class="form-control" value="<?php echo $row['nokk']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
				<label for="validationDefault06" class="form-label">Umur *</label>
				<input type="text" name="umur" class="form-control" value="<?php echo $row['umur']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
				<label for="validationDefault07" class="form-label">Provinsi *</label>
				<input type="text" name="provinsi" class="form-control" value="<?php echo $row['provinsi']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
				<label for="validationDefault08" class="form-label">Kabupaten / Kota *</label>
				<input type="text" name="kabkota" class="form-control" value="<?php echo $row['kabkota']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
              <div class="mb-3">
				<label for="validationDefault09" class="form-label">Kecamatan *</label>
				<input type="text" name="kecamatan" class="form-control" value="<?php echo $row['kecamatan']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
              <div class="mb-3">
				<label for="validationDefault10" class="form-label">Kelurahan / Desa *</label>
				<input type="text" name="keldesa" class="form-control" value="<?php echo $row['keldesa']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
				<label for="validationDefault11" class="form-label">RT *</label>
				<input type="text" name="rt" class="form-control" value="<?php echo $row['rt']; ?>" required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
				<label for="validationDefault12" class="form-label">RW *</label>
				<input type="text" name="rw" class="form-control" value="<?php echo $row['rw']; ?>"  required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
             <div class="mb-3">
				<label for="validationDefault13" class="form-label">Penghasilan Sebelum *</label>
				<input type="text" name="penghasilansebelum" class="form-control" value="<?php echo $row['penghasilansebelum']; ?>"  required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            <div class="mb-3">
				<label for="validationDefault14" class="form-label">Penghasilan Setelah *</label>
				<input type="text" name="penghasilansetelah" class="form-control" value="<?php echo $row['penghasilansetelah']; ?>"  required oninvalid="this.setCustomValidity('Data Ini Tidak Boleh Kosong')" oninput="setCustomValidity('')">
			</div>
            <div class="mb-3">
                <label for="validationDefault15" class="form-label">Alasan Membutuhkan Bantuan *</label>
				<select class="form-select" aria-label="Default select example" name="alasan" value="<?php echo $row['alasan']; ?>" required oninvalid="this.setCustomValidity('Silahkan Pilih Data Ini')" oninput="setCustomValidity('')">
  <option selected disabled value>Pilih Alasan</option>
  <option value=" Kehilangan pekerjaan">Kehilangan pekerjaan</option>
  <option value="Kepala keluarga terdampak atau korban Covid-19">Kepala keluarga terdampak atau korban Covid-19</option>
  <option value="Tergolong fakir/miskin semenjak sebelum Covid-19">Tergolong fakir/miskin semenjak sebelum Covid-19</option>
  <option value="Lainnya">Lainnya</option>
</select>
			</div>
             <div class="mb-3">
				<label class="form-label">Alasan Lainnya (Hanya diisi jika anda memiliki alasan lain)</label>
				<input type="text" name="lainnya" class="form-control" value="<?php echo $row['lainnya']; ?>">
			</div>
            </br>
             <div class="mb-3">
             <label class="form-label">Keterangan : * Wajib Diisi</label>
			</div>
            <div class="form-check">
     							 <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required required oninvalid="this.setCustomValidity('Silahkan Centang Untuk Melanjutkan Proses Input Data')" oninput="setCustomValidity('')">
     							 <label class="form-check-label" for="invalidCheck">
        							Saya menyatakan bahwa data yang diisikan adalah benar dan siap mempertanggungjawabkan apabila ditemukan ketidaksesuaian dalam data tersebut.
      							</label>
     							 <div class="invalid-feedback">
        							You must agree before submitting.
      							</div>
                                </div>
                                <br>
			<div class="mb-3">
				<button class="btn btn-success" type="submit" onClick="return confirm('Apakah Anda Yakin Ingin Menrubah Data Ini ?, Pastikan semua data sudah terisi dengan benar')">Submit</button>
				<a href="home.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
		
	</div>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <script> AOS.init(); </script>
</body>
</html>