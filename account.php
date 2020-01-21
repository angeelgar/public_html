<?php require_once 'templates/header.php';?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->account( $_POST );
			if($data)$success = PASSOWRD_CHANAGE_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		} 
	}
?>
<!DOCTYPE html>
<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">


	
	 <div class="content-wrapper">
      <div class="container-fluid">
       <div class="row">
        <div class="col-lg-12">
     			<?php require_once 'templates/message.php';?>
     			<h1>Mi cuenta:</h1><br>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-vertical myaccount" role="form">
					<div class="form-group">
						<span for="inputEmail3" class="col-sm-4 control-span">Usuario</span>
						<div class="col-sm-8">
							<p> <?php echo $_SESSION['name']; ?> </p>
						</div>
					</div>
					<div class="form-group">
						<span for="inputEmail3" class="col-sm-4 control-span">Tu IP</span>
						<div class="col-sm-8">
							<p> <?php include 'templates/ip.php'; ?> <font color="grey">(Las IP quedan guardada en la base de datos)</font></p>
						</div>
					</div>

					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span">Correo electrónico</span>
						<div class="col-sm-8">
							<p> <?php echo $_SESSION['email']; ?> </p>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span">Contraseña Actual</span>
						<div class="col-sm-8">
							<input name="old_password" id="old_password" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span"> Nueva Contraseña</span>
						<div class="col-sm-8">
							<input name="password" id="password" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span"> Confirmar Contraseña</span>
						<div class="col-sm-8">
							<input name="confirm_password" id="confirm_password" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
					<input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>" />
					
					
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-default btn-primary" id="submit_btn" data-loading-text="Cambiando contraseña....">Cambiar Contraseña</button>
						</div>
					</div>
				</form>
		</div>
     		
     	</div>

		<!-- End container-fluid-->

   </div><!--End content-wrapper-->
	
  </div><!--End wrapper-->
	


<script src="js/jquery.validate.min.js"></script>
<script src="js/account.js"></script>    
<?php require_once 'templates/footer.php';?>
	

