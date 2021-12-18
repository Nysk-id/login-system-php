<!DOCTYPE html>
<html>
<head>
	<title>Login page - Izzat Aflah Login Page Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="image/webicon.png">
	<div align="center">
        <noscript>
            <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
            <div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini!</div></div>
        </noscript>
    </div>
    <!--Script to prevent text selection, block text etc.-->
    <script type="text/javascript">
        function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
    </script>
    <!--Script to turn off right click function on blog-->
    <script type="text/javascript">
        function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
    </script>
    <style type="text/css">
    img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
    }
    </style>
    <!--script to prevent keyboard shortcuts, view source etc.-->
    <script type="text/javascript">
        window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
    </script>
    <script type="text/javascript">
        document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
    </script>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Log In</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Enter User Name"><br>
     	<label>Passcode</label>
     	<input type="password" name="password" placeholder="Enter Passcode"><br>
     	<button type="submit">Login</button>
     </form>
</body>
</html>