<?php 
// Menghubungkan file ini dengan file database
include 'koneksi.php';
// Mengecek apakah ID ada datanya atau tidak
if (isset($_POST['id'])) {
    if ($_POST['id'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        $id = $_POST['id'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];
		$jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $foto_nama = $_FILES['pas_foto']['name'];
        $foto_size = $_FILES['pas_foto']['size'];
		$nokk = $_POST['nokk'];
		$umur = $_POST['umur'];
$provinsi = $_POST['provinsi'];
$kabkota = $_POST['kabkota'];
$kecamatan = $_POST['kecamatan'];
$keldesa = $_POST['keldesa'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$penghasilansebelum = $_POST['penghasilansebelum'];
$penghasilansetelah = $_POST['penghasilansetelah'];
$alasan = $_POST['alasan'];
$lainnya = $_POST['lainnya'];

    }else{
        header("location:index.php");
    }

    // Mengecek apakah file lebih besar 2 MB atau tidak
    if ($foto_size > 2097152) {
	   // Jika File lebih dari 2 MB maka akan gagal mengupload File
       header("location:index.php?pesan=size");

    }else{

	   // Mengecek apakah Ada file yang diupload atau tidak
       if ($foto_nama != "") {

		  // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
          $ekstensi_izin = array('png','jpg','jpeg','bmp');
		  // Memisahkan nama file dengan Ekstensinya
          $pisahkan_ekstensi = explode('.', $foto_nama); 
          $ekstensi = strtolower(end($pisahkan_ekstensi));
		  // Nama file yang berada di dalam direktori temporer server
          $file_tmp = $_FILES['pas_foto']['tmp_name'];   
		  // Membuat angka/huruf acak berdasarkan waktu diupload
          $tanggal = md5(date('Y-m-d h:i:s'));
		  // Menyatukan angka/huruf acak dengan nama file aslinya
          $foto_nama_new = $tanggal.'-'.$foto_nama; 

		  // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
          if(in_array($ekstensi, $ekstensi_izin) === true)  {

            // Mengambil data siswa_foto didalam table siswa
            $get_foto = "SELECT siswa_foto FROM siswa WHERE id_siswa='$id'";
            $data_foto = mysqli_query($koneksi, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("foto/".$foto_lama['siswa_foto']);    

			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($koneksi, "UPDATE siswa SET siswa_nama='$nama_lengkap', nik='$nik',jk='$jk', siswa_alamat='$alamat', siswa_foto='$foto_nama_new', nokk='$nokk', umur='$umur', provinsi='$provinsi', kabkota='$kabkota', kecamatan='$kecamatan', keldesa='$keldesa', rt='$rt', rw='$rw', penghasilansebelum='$penghasilansebelum', penghasilansetelah='$penghasilansetelah',alasan='$alasan',lainnya='$lainnya' WHERE id_siswa='$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:home.php?pesan=berhasil");
            } else {
                header("location:home.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:index.php?pesan=ekstensi");        }

        }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
          $query = mysqli_query($koneksi, "UPDATE siswa SET siswa_nama='$nama_lengkap', nik='$nik',jk='$jk', siswa_alamat='$alamat', nokk='$nokk', umur='$umur', provinsi='$provinsi', kabkota='$kabkota', kecamatan='$kecamatan', keldesa='$keldesa', rt='$rt', rw='$rw', penghasilansebelum='$penghasilansebelum', penghasilansetelah='$penghasilansetelah',alasan='$alasan',lainnya='$lainnya' WHERE id_siswa='$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:home.php?pesan=berhasil");
            }else {
                header("location:home.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    header("location:home.php");
}
?>