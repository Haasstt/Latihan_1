  
<div class="row justify-content-center">

<div class="col-xl-6 col-lg-12 col-md-9">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-12 d-none d-lg-block"></div>
        <div class="col-lg-12">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h1 text-gray-900 mb-4">FORM LOGIN</h1>                    
            </div>
						<form class="user" method="POST">
							<div class="form-group">
								<input id="username" type="text" name="username" class="form-control form-control-user" placeholder="Masukkan email" required>
							</div>
							<div class="form-group">
								<input id="password" type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password" required>
							</div>
								<input type="submit" name="login" value="Login" class="btn btn-success btn-user btn-block">
							<hr>
							<div class="text-center">
               	 Belum Punya Akun?
                	<a class="small" href="index.php?p=registrasi">Registrasi</a>
              </div>
						</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php 
	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($koneksi,$_POST['username']);
		$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
		$passwordasli = $_POST['password'];
	
		$sql_data = mysqli_query($koneksi,"SELECT * FROM user WHERE 
		username ='$username' AND 
		password ='$password'");
		$cek_data = mysqli_num_rows($sql_data);
		$data_user = mysqli_fetch_assoc($sql_data);

		if($cek_data>0){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['nama']= $data_user['nama'];
			$_SESSION['data']= $data_user;
			$_SESSION['passwordasli']= $passwordasli;
			header('location:myApps/');
		}
		else{
			echo "<script>alert('Username atau Password Salah')</script>";
		}

	}
 ?>