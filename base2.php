<!DOCTYPE html>
<html>
<head>
<title>Trial for base2.html</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
<style>
.lst{
margin: 2px;
background-color: whitesmoke;
color: black;
padding: 5px;}
.clearfix{
clear:both;
}

.movieobj{
float: left;
margin: 10px;
width: 240px;
border-radius: 5px;}
.movieobj a img{
width: 240px;
height: 320px;
border-top-left-radius: 15px;
border-top-right-radius: 15px;}
.movieobj p{
width: 240px;
padding-top: 10px;
padding-bottom: 5px;
text-align: center;
border:solid 1px;
border-bottom-left-radius:15px;
border-bottom-right-radius:15px;
}
.movieobj:hover{  
box-shadow: 0 -5px red;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
}
.contact{
background-color: black;
text-align: center;
color: white;
padding: 10px;}
</style>

</head>
<body>
<div class="jumbotron text-center" style="padding: 30px;margin: 0px;">
<h2>TICKBOOK</h2>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="" >Movies</a>
</li>
<li class="nav-item">
<a class="nav-link" href="mybookings.html" >My Bookings</a>
</li>
<li class="nav-item">
<a class="nav-link" href="" >Snacks</a>
</li>
<input type="text" placeholder="Search..." style="position: absolute;right: 170px;">
<li class="nav-item" style="position: absolute;right: 85px;">
<a class="nav-link" href="" id="user" >User</a>
</li>
<li class="nav-item" style="position: absolute;right: 0px;">
<a class="nav-link" href="" onclick="logoutonce()" id="logout" >Logout</a>
</li>
</ul>
</nav>
<?php
$conn=mysqli_connect("localhost","root","","login");
$sql="select username from activa";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<script>
var a="<?php echo($row['username']);  ?>";
document.getElementById("user").innerHTML=a;
</script>
<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
    <div class="carousel-item active">
      <img src="img1.png" alt="Image 1" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img2.png" alt="Image 2" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img3.png" alt="Image 3" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="clearfix"></div>

<div class="container-fluid">
<div class="row">
<div class="col-sm-3" style="padding: 30px;">
<h3 style="text-align: center;">LIST</h3>
<div class="lst">Ala vaikuntapuramlo</div>
<div class="lst">24</div>
<div class="lst">Maharshi</div>
<div class="lst">Gentleman</div>
<div class="lst">Goodachari</div>
</div>

<div class="col-sm-9" style="padding: 30px">

<h1 style="text-align: center;">Movies</h1>
<div class="movieobj">
<a href="streetdancer3.html" ><img src="img1.png"></a>
<p>Street dancer-3</p>
</div>
<div class="movieobj">
<a href="alavaikuntapuramlo.html" ><img src="img2.png"></a>
<p>Ala vaikuntapuramlo</p>
</div>
<div class="movieobj">
<a href="sarileru.html" ><img src="img1.png"></a>
<p>Sarileru Neekevvaru</p>
</div>


<div class="movieobj">
<a href="streetdancer3.html" ><img src="img1.png"></a>
<p>Street dancer-3</p>
</div>
<div class="movieobj">
<a href="alavaikuntapuramlo.html" ><img src="img2.png"></a>
<p>Ala vaikuntapuramlo</p>
</div>
<div class="movieobj">
<a href="sarileru.html" ><img src="img1.png"></a>
<p>Sarileru Neekevvaru</p>
</div>
</div>
</div>
</div>

<!--Contact-->
<div class="contact">
Done by Harish
</div>
<script>
function logoutonce() {
	<?php
	$conn=mysqli_connect("localhost","root","","login");
	$sql="update activa set count=0 where count=1";
	$result=mysqli_query($conn,$sql);
	?>
	window.open('base.html','_self');
}
</script>
</body>
</html>
