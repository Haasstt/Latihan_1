
	
 <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	
</div>
<a>Selamat Datang pada halaman admin, Anda Login Sebagai : </a>

<div class="my-3">
	<h1>
		<?php echo ucwords($_SESSION['nama']); ?>
	</h1>
</div>


<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-12 col-md-9">

  			<div class="card o-hidden border-0 shadow-lg my-3">
  			  <div class="card-body p-0">
      				<div class="row">
      				  <div class="col-lg-12">
      				    <div class="p-5">
      				      <div class="text-center">
							  			<h1 class="h1 text-gray-900 mb-4">Password Enkripsi</h1>    
							  			<a><?php echo ucwords($_SESSION['data']['password']); ?></a>                
            			  </div>
      				    </div>
         			  </div>
        			</div>
             </div>
            </div>
  
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-12 col-md-9">

  			<div class="card o-hidden border-0 shadow-lg my-3">
  			  <div class="card-body p-0">
      				<div class="row">
      				  <div class="col-lg-12">
      				    <div class="p-5">
      				      <div class="text-center">
							  			<h1 class="h1 text-gray-900 mb-4">Password Asli</h1>    
							  			<a><?php echo ucwords($_SESSION['passwordasli']); ?></a>                
            			  </div>
      				    </div>
         			  </div>
        			</div>
             </div>
            </div>
  
		</div>
	</div>
</div>

