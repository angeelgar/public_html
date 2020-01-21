<?php
include'../head.php';
?>


<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="css/chat.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />

<?php
$msg = $_GET['msg'];
if ($msg) {
echo '<div class="alert alert-warning">
<button type="button" class="close" data-dismiss="alert"><div class="icon-remove"></div></button>
<b>Note: </b>'.$msg.' </div>';
}
$email=$_SESSION['email'];
$nick=$_SESSION['email'];
?>
<body>

<div id="chatContainer">

    <div id="chatTopBar" class="rounded"></div>
    <div id="chatLineHolder"></div>
    
    <div id="chatUsers" class="rounded"></div>
    <div id="chatBottomBar" class="rounded">
    	<div class="tip"></div>
        
        <form id="loginForm" method="post" action="">
            <input id="name" name="name" class="rounded" value="<?php $nick = strtoupper($nick); $nick = explode("@",$nick); $nick = explode(".",$nick[0]); echo ''.$nick[0].'' ?>" />
            <input id="email" name="email" class="rounded" value="<?php echo $email; ?>" />
            <input type="submit" class="blueButton" value="Ingresar" />
        </form>
        
        <form id="submitForm" method="post" action="">
            <input id="chatText" name="chatText" class="rounded" maxlength="255" />
            <input type="submit" class="blueButton" value="Submit" />
        </form>
        
    </div>
    
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/jScrollPane.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
