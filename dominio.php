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
        <div class="container">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="well text-center">
                    <p><h3>Check Dominio</h3></p>
                         <?php
                            require '/dominio/vendor/autoload.php';
                            use Helge\test\JsonLoaderTest.php;
                            use Helge\test\SimpleWhoisClient.php;
                            use Helge\test\DomainAvailability.php;
                            $whoisClient = new SimpleWhoisClient();
                            $dataLoader = new JsonLoader("/dominio/vendor/helgesverre/domain-availability/src/data/servers.json");
                            $service = new DomainAvailability($whoisClient, $dataLoader);
                            ?>
                         <hr>
                        <form action="" method="get" style="align-content: center;" >
                             <div class="form-group input-group">
                             
                             <input type="text" class="form-control" name="domain" id="domain" placeholder="google.com">
                             <input type="submit" value="Chequear" class="btn btn-lg btn-primary btn-block">
                             </div>    
                         </form>
                        <table border="1" cellpadding="5" class="table">
					        <tr>
					            <td>Status</td>
					            <td>
					                <?php
					                try {
					                    if (isset($_GET["domain"])) {
					                        if ($service->isAvailable($_GET["domain"])) {
					                            echo "<span style='color:green;'>Disponible</span>";
					                        } else {
					                            echo "<span style='color:red;'>Ocupado</span>";
					                        }
					                    }
					                } catch (\Exception $e) {
					                    echo $e->getMessage();
					                }
					                ?>
					            </td>
					        </tr>
					        <tr>
					            <td>WHOIS Server</td>
					            <td><?= $whoisClient->getServer() ?></td>
					        </tr>
					        <tr>
					            <td>Server Port</td>
					            <td><?= $whoisClient->getPort() ?></td>
					        </tr>
					        <tr>
					            <td colspan="2">
					                <pre><?= $whoisClient->getResponse(); ?></pre>
					            </td>
					        </tr>
					    </table>

                         
                </div>
                <br>
            </div>
               <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well text-center">
                    	<form style="margin: 10px;" action="" method="get">
                            <input type="text" name="tld" id="tld" value="list" hidden>
                            <input type="submit" value="Dominios Soportados" class="btn btn-lg btn-primary btn-block">
                        </form>
 						
                       <?php if (isset($_GET["tld"]) && $_GET["tld"] == "list" ) : ?>
				            <?php foreach ($service->supportedTlds() as $tld) : ?>
				                <?= $tld; ?><hr>
				            <?php endforeach; ?>
				        
				    <?php endif; ?>
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