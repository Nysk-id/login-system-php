<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home - Izzat Aflah Home Page Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="icon" href="image/webicon.png">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <div align="center">
        <noscript>
            <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
            <div style="font-family: Arial; font-size: 17px; background-color:#00bbf9; padding: 11pt;">Mohon aktifkan javascript pada browser untuk mengakses halaman ini!</div></div>
        </noscript>
    </div>
    <!--Kode untuk mencegah seleksi teks, block teks dll.-->
    <script type="text/javascript">
        function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
    </script>
    <!--Kode untuk mematikan fungsi klik kanan di blog-->
    <script type="text/javascript">
        function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
    </script>
    <style type="text/css">
    img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
    }
    </style>
    <!--Kode untuk mencegah shorcut keyboard, view source dll.-->
    <script type="text/javascript">
        window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
    </script>
    <script type="text/javascript">
        document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
    </script>
</head>
<body>
     <nav>
          <div class="logo"><a style="text-decoration: none; color: #fff;" href="logout.php">Nysk.id</a></div>
          <div><a href="logout.php" class="logout">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></div>
     </nav>
     <div class="frame">
          <h1 class="welcome">Welcome, <?php echo $_SESSION['name']; ?></h1>
          <p class="good">Good to see you again, this is your project </p>
          <div class="login">
               <div class="head">Login System :</div>
               <a href="index/login-system.rar" class="download"><i class="far fa-file-code"></i></a>
          </div>
          <div class="web">
               <div class="head">Web Portofolio :</div>
               <a href="index/myportofolio.rar" class="download"><i class="fas fa-address-card"></i></i></a>
          </div>
     </div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>