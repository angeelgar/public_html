<?php require_once 'templates/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
    <!-- skins CSS-->
    <link href="assets/css/skins.css" rel="stylesheet"/>
</head>
<body>
 <div id="wrapper">


	
     <div class="content-wrapper">
     <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
		  
		    
          <div class="well text-center">
    
     			<div class="well text-center">
	     			<p><h3>Verificar saldo en múltiples direcciones BTC</h3></p>
                         <hr>
					      <b>Ingrese las direcciones que desea ver</b>
					      <br />
					      <br />          
					      <textarea class="form-control" id="enderecos01" rows="15" placeholder="(Separar las direcciones con saltos en linea)"></textarea> 
					      <br />
					      <button type="button" class="btn btn-dark" onclick="consultarApi(document.getElementById('enderecos01').value)">Chequear</button><br>
					      <p id="totalEnderecos"></p>      
     			</div>
     			<br>
     		</div>
                    <div class="well text-center">
                         <p><h3>Resultados</h3></p>
                         <hr>
                         <p> 
                        <b>Balance - Address consulted</b>
                        <br />
                        <br />          
					      <textarea class="form-control" id="enderecos02" rows="15" placeholder="Se insertará el resultado de las direcciones consultadas en la API Blockchain" disabled="true"></textarea>
					      <p id="totalEnderecosConsultados"></p> 
                    </div>
                    <br>
                    
                    
               </div>
     		
     		
     	</div>
    </div> <!-- /container -->
<?php require_once 'templates/footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	function consultarApi(enderecos) {
        document.getElementById('enderecos02').value = '';
        //enderecos=trim(enderecos);
        document.getElementById('totalEnderecos').innerHTML = 'Direcciones totales para consultar: ' + enderecos.split('\n').length;
        var url = "https://blockchain.info/es/q/addressbalance"; 
        var apiCode = "?api_code=20c9f53d4f-1e9c-4045-9ab0-1e05094567ce"; 
        var cont = 0;
        for(let i=0;i<enderecos.split('\n').length;i++){
            urlTemp= url + enderecos.split("\n")[i] + apiCode;
            let xmlHttp = new XMLHttpRequest(); 
            xmlHttp.open("GET", urlTemp, true); // true for asynchronous
              
            xmlHttp.onreadystatechange = function() { 
                if (xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200){
                    callback(xmlHttp.responseText, enderecos.split("\n")[i]); 
                    cont++;                   
                    document.getElementById('totalEnderecosConsultados').innerHTML = 'Direcciones referidas ' + cont;
                }
                
            }
          xmlHttp.send();
          function callback(resposta, enderecoConsultado){
          document.getElementById('enderecos02').value = document.getElementById('enderecos02').value + resposta + " - " + enderecoConsultado + "\n";          
          }
          //remover espaços excedentes
          function trim(str) {
            if (Array.isArray(str))  {
            var strArray=[str.length];
              for(let i=0; i<str.length;i++)
                strArray[i] = str[i].replace(/^\s+|\s+$/g,"");
              return strArray;
            }
            else
              return str.replace(/^\s+|\s+$/g,"");
            }
        }
	    }

    </script>
   </div>
 </div>
 </div>
</div>
	