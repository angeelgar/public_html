<!DOCTYPE html>



<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>DARK CHECK CC</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>   
    <link href="files/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="files/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="files/style.css" rel="stylesheet" type="text/css"/>
    <script src="js/scripts.js"></script>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
                <div class="col-md-11 col-lg-11 col-xs-11" style="margin-top: 2%;">
                    <center>
                        <font size="8" face="chiller" color="red">#n1c0la73sl4</font> <br/>
                    </center>
                    <div class="panel">
                        <div class="panel-heading">
                          &nbsp;
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-8">
                                <textarea name="lista" id="lista" onkeyup="contar_total(this);" placeholder="xxxxxxxxxxxxxxxx|xx|xxxx|xxx" style="height: 150px; width: 983px; "  rows="7"></textarea>
                                                            </div>

                            <br/><br/><br/><br/><br/><br/><br/><br/>
                            <div class="row">
                                <center>
                                    <div>
                                        Status: <span id="status" class="label label-default">Esperando Comando!</span><br><p></p>
                                        Aprovadas: <span id="aprovada_conta" class="label label-success">0</span>
                                        Reprovadas: <span id="reprovada_conta" class="label label-danger">0</span>
                                        Testado:  <span id="testado" class="label label-info">0</span>
                                        Total: <span id="tudo_conta" class="label label-default">0</span>
                                    </div>
                                    <br/>
                                </center>
                                <br/>
                                <div class="col-md-6 col-xs-6 col-lg-6">
                                    <button type="button" class="btn btn-success btn-block" id="iniciar">Iniciar</button>
                                </div>
                                <div class="col-md-6 col-xs-6 col-lg-6">
                                    <button type="button" class="btn btn-danger btn-block" id="parar" disabled="disabled">Parar</button>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
                <div class="col-md-11 col-xs-11 col-lg-11">
                    <div id="result" style="display: none;">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        Aprovadas &nbsp;
                                        <span class="label label-success" id="aprovada_conta_1">0</span>
                                        <span class="pull-right">
                                            <button onclick="selectText('aprovadas')" type="button" class="btn btn-xs btn-warning"><i class="fa fa-copy"></i><font color="black"> Select All </font></button>
                                            <button type="button" class="btn btn-xs btn-warning" id="btn_live"><i class="fa fa-minus"></i><font color="black"> Esconder </font></button>
                                        </span>
                                    </div>
                                    <div  class="panel-body">
                                        <div id="aprovadas"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        Reprovadas &nbsp;
                                        <span class="label label-danger" id="reprovada_conta_2">0</span>
                                        <span class="pull-right">
                                            <button type="button" class="btn btn-xs btn-warning" id="btn_die"><i class="fa fa-minus"></i><font color="black"> Esconder </font></button>
                                        </span>
                                    </div>
                                    <div  class="panel-body">
                                        <div id="reprovadas"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
            </div>
        </div>
        <!-- MODAL -->
        <div class="modal fade" id="modal_mailpass" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Informacion</h4>
                    </div>
                    <div class="modal-body">
                        No se han ingresado tarjetas
                    </div>
                </div>
            </div>
        </div>
        <script src="files/jquery.min.js"></script>
        <script  src="files/jquery-ui.js"></script>
        <script src="files/bootstrap.min.js"></script>
        <script type="text/javascript">
            function selectText(containerid) {
                if (document.selection) {
                    var range = document.body.createTextRange();
                    range.moveToElementText(document.getElementById(containerid));
                    range.select();
                } else if (window.getSelection()) {
                    var range = document.createRange();
                    range.selectNode(document.getElementById(containerid));
                    window.getSelection().removeAllRanges();
                    window.getSelection().addRange(range);
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#btn_live').click(function () {
                    $('#aprovadas').toggle(1000);
                });

                $('#btn_die').click(function () {
                    $('#reprovadas').toggle(1000);
                });

                $('#btn-sock-hide').click(function () {
                    $('#sock_ruim').toggle(1000);
                });
            });
        </script>
    </body>