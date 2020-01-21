<?php require_once 'templates/header.php';?>
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
		  
		    
          <div class="well text-center">
          
								<div class="content">
     
	     			<p><h3>Chequear IMEI IPhone</h3></p>
                         <hr>
							<form class="form-inline" name="form1" action="" method="post" onsubmit="document.getElementById('btn').disabled=false;">
						    <div class="form-group">
						      <p><label for="host">IMEI</label></p>

						      <input class="form-inline" type="text" name="imei" value="" size="22" autofocus="autofocus" />
						    </div>
						    <br />
						    <br />
							<button name="submit" class="btn btn-primary" id="submit" onclick="this.value='Please wait...';">Chequear</button>
							</form>
     			</div>
     			<br>
     		</div>
               
                    <div class="well text-center">
                         <p><h3>Resultado</h3></p>
                         <hr>
                         <p> 
                         <?php 	
	
	
			if(isset($_POST['imei']) AND !empty($_POST['imei'])) //verify if the imei or serial number exists and It's not empty
			{
				
				$file = file_get_contents('https://selfsolve.apple.com/warrantyChecker.do?sn=' . $_POST['imei']); //fetch the URL's response body into a variable
						
				$replace_values = array('null(', ')');
				$file = str_replace($replace_values, '', $file);
					
				$file = json_decode($file, true); //decode the json object into an array
					
				if(array_key_exists('ERROR_CODE', $file)) //verify wether the server has sent an error or not
				{
				
					echo '<div id="wrong_number" > Error de IMEI o es incorrecto </div>';
					
				}
				
				
				else
				{
					?>
					
					<table class="table">
					
						
						<tr>
							<td>Familia</td>
							<td><?php echo $file['DEVICE_FAMILY']; ?></td>
						</tr>

						<tr>
							<td>Modelo</td>
							<td><?php echo $file['PART_DESCR']; ?></td>
						</tr>	
						
						<tr>
							<td><?php if($file['IS_IPHONE'] = 'Y') {echo 'iOS Version';} else{echo 'Version';} ?></td>
							<td><?php echo $file['PROD_VERSION']; ?></td>
						</tr>
						
						<tr>
							<td>Carrier</td>
							<td><?php if($file['CARRIER'] != '') {echo $file['CARRIER'];} else { echo'No disponible';} ?></td>
						</tr>
						
						<tr>
							<td>IMEI</td>
							<td><?php echo $file['AP_IMEI_NUM']; ?></td>
						</tr>
						
						<tr>
							<td>Codigo Pais</td>
							<td><?php echo $file['COUNTRY_CODE']; ?></td>
						</tr>
						
						<tr>
							<td>País de compra</td>
							<td><?php echo $file['PURCH_COUNTRY']; ?></td>
						</tr>
						
						<tr>
							<td>Estado de la garantía</td>
							<td><?php echo $file['HW_COVERAGE_DESC'];?></td>
						</tr>
						
						<tr>
							<td>La garantía termina en</td>
							<td><?php echo $file['COV_END_DATE']; ?></td>
						</tr>
						
						<tr>
							<td>Estado de activación</td>
							<td><?php if($file['ACTIVATION_STATUS'] = 'Y') { echo 'Activado';} else { echo 'No Activado';} ?></td>
						</tr>
						
						<tr>
							<td>SIM Bloqueado</td>
							<td><?php if($file['CARRIER'] = '') {echo 'NO';} else{ echo'SI';}; ?></td>
						</tr>

						<tr>
							
						</tr>
					
					
					
					</table>
					
				
			<?php	}
			
			
			

			}	
		
					
			?>
         
     	</div>
    </div> <!-- /container --><!-- /panel -->
     			</div>
		  </div>
        </div>
      </div>
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

	
<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">


	 <p class="mb-0">Header Colors</p>
      <hr>

	  <div class="mb-3">
	    <button type="button" id="default-header" class="btn btn-outline-primary">Default Header</button>
	  </div>

      <ul class="switcher">
        <li id="header1"></li>
        <li id="header2"></li>
        <li id="header3"></li>
        <li id="header4"></li>
        <li id="header5"></li>
        <li id="header6"></li>
      </ul>

      <p class="mb-0">Sidebar Colors</p>
      <hr>

      <div class="mb-3">
	    <button type="button" id="default-sidebar" class="btn btn-outline-primary">Default Sidebar</button>
	  </div>

      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

     </div>
   </div>
<!--end color switcher-->
	
  </div><!--End wrapper-->
<?php require_once 'templates/footer.php';?>