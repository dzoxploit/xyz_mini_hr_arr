<?php
include('action/konn.php');


session_start(); // Memulai Session

if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit(); // Ensure that the script stops executing after redirection
}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman admin</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<style type="text/css"> 
.row{
    margin-left:0px;
    margin-right:0px;
}

#wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
    height: 100%;

}

#sidebar-wrapper {
    margin-left: -150px;
    left: 70px;
    width: 200px;
    background: #aaa;
    position: fixed;
    height: 100%;
    z-index: 10000;
    transition: all .4s ease 0s;
    background-color: #5a9107;
}

.sidebar-nav {
    display: block;
    float: left;
    width: 200px;
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #31f91b;
}
#page-content-wrapper {
    padding-left: 0;
    margin-left: 0;
    width: 100%;
    height: auto;
}
#wrapper.active {
    padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
}

#page-content-wrapper {
  width: 100%;
}

#sidebar_menu li a, .sidebar-nav li a {
    background-color: white;
    display: block;
    float: left;
    text-decoration: none;
    width: 150px;
    background: #fff;
    -webkit-transition: background .5s;
    -moz-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
    transition: background .5s;
     background-color: #5a9107
}
.sidebar_name {
    padding-top: 25px;
    color: #fff;
    opacity: .7;
}

.sidebar-nav li {
  line-height: 40px;
  text-indent: 20px;
}

.sidebar-nav li a {
  color: white;
  display: block;
  text-decoration: none;
}

.sidebar-nav li a:hover {
  color: white;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}
.sidebar-nav{
   background-color:#5a9107;
   width: 200px;
}
.sidebar-nav > .sidebar-brand {
  height: 100px;
  width: 200px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  color: white;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}
#main_icon
{
    float:left;
   padding-right: 30px;
   padding-top:30px;
   color: white;
}
.sub_icon
{
    float:right;
   padding-right: 65px;
   padding-top:10px;
}
.content-header {
  height: 65px;
  line-height: 65px;
}

.content-header h1 {
  margin: 0;
  margin-left: 20px;
  line-height: 65px;
  display: inline-block;
}
.sidebar-brand img {
  width: 100px;
  height:100px;
}
@media (max-width:767px) {
    #wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
}
#sidebar-wrapper {
    left: 70px;
}
#wrapper.active {
    padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
    width: 200px;
    transition: all .4s ease 0s;
    background-color:#5a9107;
}
}
.navbar{
    background-color: #5a9107;
}
        .navbar{
            background-color: #5a9107;
        }
        .container-fluid .satu{
            background-color: #5a9107;
        }
        .navbar a{
            color: white;
        }
        .jumbotron{
          height: 200px;
          margin-top: 100px;
        }
</style>
</head>
<body>
	<div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a href="index.php"><span class="light" id="main_icon">XYZ Co</span></a></li>
           <li class="sidebar-brand"><a href="index.php"><img src="assets/logos.png"></a></li>
           <li class="sidebar-brand"><a><span class="light" id="main_icon">Hello :)</span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li class="active"><a href="tambahadmin.php">Tambah data admin</a></li>
          <li><a href="tambahpegawai.php">tambah pegawai</a></li>
          <li><a href="tambahabsen.php">tambah absensi</a></li>
          <li><a href="laporan.php">laporan absensi</a></li>
        </ul>
      </div>
          
      <!-- Halaman Konten -->
      <div id="page-content-wrapper">
        <!-- Buat seluruh isi konten berada dalam class="page-content inset" -->
         <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div id="main-wrapper" class="col-md-11 pull-right">
            <div id="main">
            <div class="container">
  <div class="jumbotron">
    <p>Welcome di app absensi versi 0.1</p>      
    <p>application created by <a href="https://www.facebook.com/DidincoderXtrain">CoderXtraincomunity</a></p>
  </div> 
</div>
              <div class="page-header">
      </div>
      </div>
      </div>
      
    </div><!-- Akhir Wrapper -->
    <!-- Script js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- End Script -->
</body>
</html>