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
		  <div style="height:600px"> <!--Please remove the height before using this page-->
		    
          <div class="well text-center">
          
							    <div class="content">

                    <p><h3>IBAN Checker</h3></p>
                         <hr>
                        <form class="form-inline" action="iban_check.php" method="post">
                            <div class="form-group">
                              <label for="host">IBAN:</label>
                              <input type="text" name="iban_check" placeholder="enter IBAN" class="form-control">
                            </div>
                            <br />
                            <br />
                            <div class="form-group">
                                <input type="submit" name="submit" value="submit" class="btn btn-primary">
                            </div>
                        </form>
                </div>
                <br>
            </div>
               
                    <div class="well text-center">
                         <p><h3>Resultado</h3></p>
                         <hr>
                         <?php include "validity_check.php"; ?>

                        <?php if(isset($_POST['submit'])) {

                            $iban = $_POST['iban_check'];
                            validity_check($iban);
                            echo $result;
                        }

                        ?>
                         <p> 
                    </div>
                    <br>
                    
                    
               </div>
            <?php require_once 'templates/sidebar.php';?>
            
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