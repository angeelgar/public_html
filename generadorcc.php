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
                    <p><h3>Generador de Bins</h3></p>
                         <hr>
                           <form>
                              <div class="form-group">
                                <label for="inputAddress">BIN</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="498505xxxxxxxxxx">
                              </div>
                              <div class="form-group">
                                <select name="ccnsp" style="display:none;">
                                        <option selected="selected">Ninguno</option>
                                </select>
                             </div>

                             <div class="form-group col-md-3" style="display:none;">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox"id="ccexpdat" name="ccexpdat" checked>
                                  <label class="form-check-label" for="gridCheck">
                                    Datos
                                  </label>
                                </div>
                              </div>
                              <div class="form-group col-md-3" style="display:none;">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="ccvi" name="ccvi" checked>
                                  <label class="form-check-label" for="gridCheck">
                                    CVV
                                  </label>
                                </div>
                              </div>
                              <div class="form-group col-md-3" style="display:none;">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="ccbank" name="ccbank">
                                  <label class="form-check-label" for="gridCheck">
                                    Banco
                                  </label>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputState">MES</label>
                                  <select id="inputState" class="form-control">
                                            <option value="rnd">Rnd</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputState">AÑO</label>
                                  <select id="inputState" class="form-control">
                                            <option value="rnd">Rnd</option>
                                            <option value="2018">18</option>
                                            <option value="2019">19</option>
                                            <option value="2020">20</option>
                                            <option value="2021">21</option>
                                            <option value="2022">22</option>
                                            <option value="2023">23</option>
                                            <option value="2024">24</option>
                                            <option value="2025">25</option>
                                            <option value="2026">26</option>
                                            <option value="2027">27</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputAddress">BIN</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="498505xxxxxxxxxx">
                              </div>
                              <button type="submit" class="btn btn-primary">Generar</button>
                            </form>
          
               
							   <div class="well text-center">
										<form style="margin: 10px;" action="" method="get">
											<input type="text" name="tld" id="tld" value="list" hidden>
											<input type="submit" value="Dominios Soportados" class="btn btn-lg btn-primary btn-block">
										</form>
							   </div>
            
            </div>
        </div><!-- /panel -->
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