<?php
// Inicia ou resume a sessão
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TravelClick</title>
<!--tttttLink JS e BOT tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<style>
@keyframes animar1{0%{transform: translateX(-100%);}100%{transform: translateX(0%);}}
/*--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt*/	
nav span:first-of-type {position: absolute;top: 0;left: 0;width: 100%;height: 20px;background: linear-gradient(to right,#DBE3E6,#00A1FF,#00B2DE, #580FF6, #00B2DE,#00A1Ff,#DBE3E6);opacity: 0.5;
animation: animar1 10s linear infinite;
}
button:hover{padding: 10px;}
a:hover{padding: 10px;}	


body{
	background: url(imagens/illustration-5240508_1280.jpg) no-repeat;
	background-size: cover;
	background-position: center;
}




	
</style>
</head>
<body style="background-color: #00A1FF;">
<!--ttttNavbar tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt--> 
<nav class="navbar navbar-expand-lg" style="background-color: transparent;">
<span></span>
<!--tttttttttttReposividade do navbarttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="container-fluid" style="color: #00B2DE; margin: 2%;" >
<a class="navbar-brand" href="#" style="color: whitesmoke;"><strong>TravelClick</strong></a>   
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white;">
<span class="navbar-toggler-icon"></span>
</button>  
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:antiquewhite;backdrop-filter: blur(20px); background-color: transparent">
<!--topicos da navbar ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="homepage.php" style="color: #580FF6;">Home</a>
</li>       
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="log.html" style="color: #580FF6;">Login</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="Reserva.html" style="color: #580FF6;">Reservar</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="reciboshtml.html" style="color: #580FF6;">Recibos</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="lista.html" style="color: #580FF6;">Veículos</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="perfil.html" style="color: #580FF6;">Perfil</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="minhasViagens.html" style="color: #580FF6;">Minhas Viagens</a>
</li>
</ul>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	     
<form class="d-flex" role="search">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="box-shadow: 0px 0px 10px 0px rgb(0, 0, 0);">
<button class="btn btn-outline-success" type="submit" style="background-color: #580FF6;color: whitesmoke; border: none;box-shadow: 0px 0px 10px 0px rgb(0, 0, 0);">Search</button>
</form>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
</div>
</div>
</nav>
<main style="margin-left: 7%; margin-bottom: 10%; margin-top: 10%;align-items: center; text-align: center;background: greenyellow; border-radius: 10%; 
	border: 2px rgb(255, 255, 255, .2);
	backdrop-filter: blur(20px);
	color: #580FF6; padding: 30px; margin-left: 20%;margin-right: 20%;">
	<section id="hero">
		<h1>Bem vindo (a) <b><?php echo($_SESSION['usuario']); ?> </b>!</h1>
		<p> a TravelClik, o aplicativo de gerência de carros da sua empresa!
		</p>
	</section>
</main>



 
 
 
 
 
 
 <footer class="text-center text-lg-start text-white" style="background-color:  transparent;color: #580FF6;">
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="container p-4 pb-0";>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<section class="">
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="row">
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold"> TravelClick</h6>
<p>
              O aplicativo para o controle do carros de sua empresa, tenha a gerência na palma da mão! Em caso de dúvidas, entre em contato conocosco!</p>
</div>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<hr class="w-100 clearfix d-md-none" />
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
<p>
<a class="text-white">MDBootstrap</a>
</p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<p>
<a class="text-white">MDWordPress</a>
 </p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<p>
<a class="text-white">BrandFlow</a>
</p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<p>
<a class="text-white">Bootstrap Angular</a>
</p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
</div>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<hr class="w-100 clearfix d-md-none" />
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold">
Useful links</h6>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<p>
<a class="text-white">Your Account</a>
</p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<p>
<a class="text-white">Become an Affiliate</a>
</p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<p>
<a class="text-white">Shipping Rates</a>
</p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
 <p>
<a class="text-white">Help</a>
 </p>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
</div>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
 <hr class="w-100 clearfix d-md-none" />
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
 <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
 <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
 <p><i class="fas fa-home mr-3"></i> Rio Claro, SP, 10012, BR</p>
 <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
 <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
<p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
</div>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
</div>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
</section>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<hr class="my-3">
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<section class="p-3 pt-0">
<div class="row d-flex align-items-center">
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<div class="col-md-7 col-lg-8 text-center text-md-start">
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
 <div class="p-3"> © 2024 Copyright:
<a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a >
</div>          
</div>    
<div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>

<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	
<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
</div> 
</div>
</section>
<!--ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->	   
</div>
</footer>
</div>
 </body>
