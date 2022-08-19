<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="shortcut icon" href="logowebsite.png">
     <title>Login</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 380px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

</style>
</head>
<body>

    <div id="login" data-aos="fade-right" data-aos-duration="1000">
       
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post" action="cek_login.php">
                            <h3 class="text-center text-info">Silahkan Login Untuk Masuk</h3>
                            <br>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Isi Username Terlebih Dahulu')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                               <input type="password" name="password" id="password" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Isi Password Terlebih Dahulu')" oninput="setCustomValidity('')">
                            </div>
                            <br>
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                <a href="index.html" class="btn btn-success">Kembali</a>
                            </div>
                            <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <script> AOS.init(); </script>
</body>

</html>