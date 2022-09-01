<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
  			  <div class="card-body p-0">
      			<div class="row">
      				<div class="col-lg-12">
      				    <div class="p-5">
						  <div class="text-center">
                   			 <h1 class="h3 text-gray-900 mb-4">Masukkan data</h1>    
               			  </div>
                   		<form class= "card-body" method="POST" enctype="multipart/form-data">
						 	<div class="form-group cols-sm-6">
                              	<label>Nama</label>
                              	<input class="form-control" type="text" name="nama"  placeholder="Masukkan nama lengkap" required>
			               	</div>
							
							<div class="form-group cols-sm-6">
                              	<label>Username</label>
                              	<input class="form-control" type="email" name="username" placeholder="Masukkan email" required>
			               	</div>
							
							<div class="form-group cols-sm-6">
                              	<label>Password</label>
                              	<input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
			               	</div>

                             <input type="submit" name="input" value="Simpan" class="btn btn-success">  

							<div class="text-center">
               	 				Sudah Punya Akun?
                				<a class="small" href="index.php?p=login">Login</a>
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
	if(isset($_POST['input'])){
		$password = md5($_POST['password']);
		$query = mysqli_query($koneksi,"INSERT INTO user VALUES (NULL,'".$_POST['nama']."','".$_POST['username']."','".$password."')");
			if($query){
				echo "<script>alert('Data Ditambahkan')</script>";
				echo "<script>location='index.php?p=login'</script>";
			}else{
				echo "<script>alert('Data Ditambahkan')</script>";
				echo "<script>location='index.php?p=registrasi'</script>";

			}
	}
?>
