<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- end AOS -->
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <!-- end fonts -->

<style>
        /* LOADING PAGE */
        .hidden {
      display: none;
    }
    .loading-page {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgb(224,179,75);
      background: radial-gradient(circle, rgba(224,179,75,1) 32%, rgba(195,82,0,1) 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      z-index: 9999999999;
    }
    .loading-text {
      color: white;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1px;
    }
    .loading-bar {
      width: 250px;
      height: 2px;
      background: white;
      position: relative;
      overflow: hidden;
    }
    .loading-bar::after {
      content: '';
      position: absolute;
      width: 0;
      height: 100%;
      background: #ff6600;
      animation: loadAnimation 1s forwards;
    }
    @keyframes loadAnimation {
      0% { width: 0; }
      90% { width: 100%; }
      100% { width: 100%; }
    }
    @keyframes curtainClose {
      from { height: 100%; }
      to { height: 0; }
    }

    @media (max-width: 768px) {
      .navbar {
        padding: 0.5rem 1rem;
      }

      .navbar-nav {
        text-align: center;
      }}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Quicksand", sans-serif;
}
body {
    font-family: Arial, sans-serif;
}
/* aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa */
#scroll-animate
{
  overflow: hidden;
}
#scroll-animate-main
{
  width: 100%;
  left: 0;
  position: fixed;
}

#heightPage,
#heightScroll
{
  width: 10px;
  top: 0;
  position: absolute;
  z-index: 99;
}

#heightPage
{
  left: 0;
}

#heightScroll
{
  right: 0;
}

header
{
  width: 100%;
  height: 100vh;
  background: url(https://raw.githubusercontent.com/hudsonmarinho/header-and-footer-parallax-effect/master/assets/images/bg-header.jpg) no-repeat 50% 50%;
  top: 0;
  position: fixed;
  z-index: -1;
}
.content {
    
    
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin-top: 70rem;
    /* border-top:2px solid rgb(214, 96, 0); */
    /* linear-gradient(270deg, #fcb045, #fd1d1d, ); */
    /* background: linear-gradient(to bottom, #fcb045 0%,rgb(97, 39, 0) 100%) !important; */
    background:white;
    height: 100vh;
    width: 100vw;
    /* overflow: hidden; */
    /* border-radius:100px; */
    /* border-top-left-radius: 80px;
    border-top-right-radius: 80px; */
}

/* Pseudoelementos que simulan el borde superior curvado invertido */
/* .content::before,
.content::after {
    content: "";
    position: absolute;
    top: -100px;
    width: 100px;
    height: 100px;
    background: white;
    z-index: 999; */
    /* clip-path: polygon(0% 100%, 100% 0%, 100% 100%, 100% 100%); */
    /* clip-path: polygon(
  0% 100%,    
  60% 60%,    
  40% 80%,    
  100% 0%,    
  100% 100%   
); */
/* clip-path: polygon(
  0% 100%,    
  20% 90%,    
  40% 80%,    
  60% 70%,    
  80% 50%,    
  100% 0%,    
  100% 100%   
);  */
/* clip-path: polygon(
  0% 100%,
  5% 97%,
  10% 95%,
  15% 93%,
  20% 90%,
  25% 88%,
  30% 85%,
  35% 83%,
  40% 80%,
  45% 78%,
  50% 75%,
  55% 73%,
  60% 70%,
  65% 67%,
  70% 60%,
  75% 55%,
  80% 50%,
  85% 40%,
  90% 30%,
  95% 15%,
  100% 0%,
  100% 100%
); */
/* } */


/* .content::before {
    left: 0;
    transform: scaleX(-1);
}


 .content::after {
    right: 0;
}   */
/* aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa */

/* ///////////////////////////////////////////////////////////////// */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      height: 5rem;
      z-index: 1000;
      background: transparent;
      transition: all 0.3s ease-in-out;
      z-index: 9999999999999999999999999999999999999999999999999999;
    }

    .navbar.scrolled {
      background: rgba(255, 255, 255, 0.3);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-brand {
        color: rgb(255, 87, 51);
        font-weight: bold;
        transition: all 0.3s ease-in-out;
        font-size: 3rem;
    }
    
    .navbar.scrolled .navbar-brand {
        color: rgb(255, 87, 51);
        z-index: 9999999999999999999999999999999999999999999999999999;
    }

    .nav-link {
      color: white;
      position: relative;
      transition: all 0.3s ease-in-out;
    }

    .nav-link:hover {
      color: rgb(255, 87, 51);
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: rgb(255, 87, 51);
      transition: width 0.3s ease-in-out;
    }

    .nav-link:hover::after {
      width: 100%;
    }
    .navbar.scrolled {
    background: rgba(255, 255, 255, 0.4); /* blanco con transparencia */
    backdrop-filter: blur(10px); /* efecto de desenfoque */
    -webkit-backdrop-filter: blur(10px); /* soporte para Safari */
    transition: background 0.3s ease, backdrop-filter 0.3s ease;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* sutil sombra opcional */
}
    .navbar.scrolled .nav-link {
      color: rgb(48, 48, 48) !important;
      font-size: 0.9rem;
    }
    .scrolled_logo {
      font-size: 2rem;
    }

    .navbar.scrolled .nav-link:hover {
      color: rgb(255, 87, 51);
    }
/* ///////////////////////////////////////////////////////////////// */
    .logo-wp{
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      z-index: 999;
      height: 5rem;
      width:5rem;
      background: #1b9748;
      bottom: 0;
      right: 0;
      border-radius: 50%;
      margin: 1rem;
    }
    .logo-wp::after{
      content: '';
      position: absolute;
      height: 0rem;
      width:0rem;
      background: rgb(247, 148, 35);
      border-radius: 50%;
    }

    .logo-wp img{
      z-index: 99999;
    }

    .logo-wp:hover::after {
      width: 5rem;
      height: 5rem;
      transition: .7s;
    }
        .carousel-container {
            width: 100vw;
            height:100vh;
            overflow: hidden;
            position: relative;
            background:white;  height:55rem; padding-bottom:10rem;
        }
        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 120vw;
            background:white;
        }
        section.card {
            flex: 0 0 calc(100% / 6);
            background-color: #a7978d;
            border-radius: 10px;
            margin-left: 1rem;
            margin-right: 1rem;
            padding: 10px;
            text-align: center;
            box-shadow: 10px 14px 10px rgba(0, 0, 0, 0.4); 

        }
        .tipologia{
            margin-top: 1rem;
        }
        .imgDegrade{
            overflow: hidden;
            border-radius:10px;
        }
        .imgDegrade::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 10px;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(255, 175, 56, 0.8), rgba(0, 0, 0, 0));
            pointer-events: none; /* Deja que el <a> siga siendo clickeable */
        }
        section.card a {
            display: block;
            position: relative; /* Esto es clave para que el ::after funcione */
            width: 100%; /* Ocupa todo el ancho del contenedor */
        }
        section.card a img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .iconosCard{
            display: flex; 
            flex-direction: row; 
            align-items: center; 
            justify-content: center;
        }
        .logoMob{
            position: absolute; 
            z-index: 99; 
            width: 8rem !important; 
            left: 0;
            margin-left: 1rem;
            margin-top: 1rem;
        }
        .imgCardPpal{
            
            height: 25rem !important;
            width: 100% !important;
            object-fit: cover;
             
            display: block;
            transition: transform 0.5s ease; /* transicion suave */
        }
        .imgCardPpal:hover{
            transform: scale(1.2);
        }
        .imgIconCard{
            width: 4rem;
        } 
        section.buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            position: relative;
        }
        button {
            padding: 10px 15px;
            cursor: pointer;
            border: none;
            background-color: #333;
            color: white;
        }
        .contacto{
            color: black;
            position: absolute;
            z-index: 99;
            width: 10rem;
            right: 0;
            margin-left: 1rem;
            margin-top: 1rem;
            font-size:1.5rem;
        }
        .descripcion{
            height:3rem;
        }
        .botonVer{
            display:block;
            margin-left: auto;
            margin-right: auto;
            padding: 10px 20px;
            background-color: #ffad42; /* Color azul tipo Bootstrap */
            color: rgb(255, 255, 255);
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            width: 19rem !important;
        }
        .precio{
            font-size: 2rem;
        }
        .botonVer:hover {
            background-color: #f09621;
        }

        .btn-der, .btn-izq{
            scale: 6;
            background: none;
            color:rgb(248, 248, 248);
            margin: 1rem;
            margin-bottom:10rem;
            border-radius: 3px;
            background: none;
            height: 4.5rem;
            width: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(-200%);
            position: absolute;
            top: 50%;
        }
        .btn-der{
            right: 0;
            
        }
        .btn-der::before{
            content: '';
            position: absolute;
            top: -7.5rem; /* Para centrar verticalmente el fondo de 15rem */
            height: 15rem;
            width: 100%;
            z-index: -1; /* Detrás del botón */
            pointer-events: none; /* Permite clics a través del pseudo-elemento */
        }
        .btn-der::before {
            margin-top:5rem;
            right: 0;
            background: linear-gradient(to left, rgba(255,255,255,.5), rgba(255,255,255,0));
        }
        .btn-izq{
            
            left: 0;
        }
        .btn-izq::before{
            content: '';
            position: absolute;
            top: -7.5rem; /* Para centrar verticalmente el fondo de 15rem */
            height: 15rem;
            width: 100%;
            z-index: -1; /* Detrás del botón */
            pointer-events: none; /* Permite clics a través del pseudo-elemento */
        }

        .btn-izq::before {
            margin-top:5rem;
            left: 0;
            background: linear-gradient(to right, rgba(255,255,255,.5), rgba(255,255,255,0));
        }

        /* aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa */
        .btnP {
        background-color:rgb(255, 211, 129);
        color: rgb(21, 21, 21);
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 3px 3px 12px rgba(0, 0, 0, 0.3);
        margin-right:1rem;
        margin-left:1rem;
        transition:1s;
        }
        .btnP:hover {
        background-color: #f5b95d;
        }

        .btnP.active {
        background:#ffa500;
        }
        
        .btnP.activo{
            background:linear-gradient(270deg, #fcb045,rgb(253, 100, 29));
            color: white;
            /* border-color: red; */
            border:2px solid rgba(255, 0, 0, 0.1);
        }
        .our-company-section{
      top: 3rem;
      margin: 2rem;
      position: relative;
      text-align: center;
      color: white;
      background: url(./img/nuestra_empresa.jpg)no-repeat center center/cover;
      background-size: cover; 
      height: 40vh;
      border-radius: 1rem;
      overflow: hidden; 
      /* animation: zoomInOut 20s infinite;  */
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      cursor: pointer;
    }

    .our-company-section:hover {
      filter: brightness(.9);
    }
    a.our-company-section  {
      text-decoration: none !important;
      
    }
    .our-company-section:hover i {
      transform: scale(1.3); /* Agranda la flecha */
      color: #ff6600; /* Cambia el color de la flecha */
      transition: 0.5s;
    }

    /*aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  */
    /*aaaaaaaaaaaaaaaBUSCADORaaaaaaaaaaaaaaaaaaaa  */
    .buscador {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: rgba(0, 0, 0, 0.5);
      border:1px solid white !important;
      color: white;
      padding: 10px 20px;
      backdrop-filter: blur(6px);
      width: 80rem;
      border-radius:10px;
      position:absolute;
      bottom: 30rem;
      z-index: 99;
      box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
    }
    .botonPpalHeader {
    border-radius: 20px;
    padding: 10px 25px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    background: linear-gradient(270deg, #fcb045, #fd1d1d, #fcb045);
    background-size: 400% 400%;
    border: none;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.4);
    transition: background-position 0.5s ease;
}

.botonPpalHeader:hover {
    background-position: right center; /* o 100% 50% para más efecto */
}

    
    .dropdown {
      position: relative;
    }

    .dropdown select {
      padding: 10px 15px;
      font-size: 14px;
      border: none;
      background: transparent;
      color: white;
      appearance: none;
      -webkit-appearance: none;
      cursor: pointer;
      border-bottom: 1px solid white;
    }

    .dropdown select:focus {
      outline: none;
    }

    .boton-buscar {
    position: relative;
    border-radius: 20px;
    padding: 10px 25px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    background: linear-gradient(270deg, #fcb045, #fd1d1d, #fcb045);
    background-size: 400% 400%;
    border: none;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.4);
    transition: background-position 1.5s ease;
    overflow: hidden;
    width: 20rem;
    z-index: 1;
}

.boton-buscar::before {
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    right: 2px;
    bottom: 2px;
    background: rgb(36, 36, 36,0.9); /* o rgba(255,255,255,0.6) si querés translúcido */
    border-radius: 18px;
    z-index: -1;
}

.boton-buscar:hover {
    background-position: right center;
}
/* ///////////////// */
.botonPpalHeader {
    border-radius: 20px;
    padding: 10px 25px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    background: linear-gradient(270deg, #fcb045, #fd1d1d, #fcb045);
    background-size: 400% 400%;
    border: none;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.4);
    transition: background-position 0.5s ease;
}

.botonPpalHeader:hover {
    background-position: right center; /* o 100% 50% para más efecto */
}

.select {
  padding: 10px 15px;
  font-size: 16px;
  color: #333;
  background-color:rgba(207, 207, 207, 0.2) !important;
  border: 2px solid #ccc;
  border-radius: 5px;
  outline: none;
  width: 200px;  /* Ajusta el ancho según tu necesidad */
  transition: border-color 0.3s ease, background-color 0.3s ease;
}

/* Cambio de color y borde al hacer hover o al enfocar el <select> */
.select:focus {
  border-color: #fcb045;
  background-color: #e7f3ff;
}

/* Estilización de las opciones dentro del <select> */
.select option {
  padding: 10px;
  background-color: #fff;
  color: #333;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

/* Hover en las opciones */
.select option:hover {
  background-color: #007bff;
  color: #fff;
}

/* ///////////////// */

    
    #ubicacion, #propiedad,#operacion {
    background: none;
    color: white;
    }

    #ubicacion:focus, #propiedad:focus,#operacion:focus {
    color: black;
    }

    .texto-btn {
      display: block;
      transition: opacity 0.3s ease;
    }

    .texto-btn.fade-out {
      opacity: 0;
    }

    .texto-btn.fade-in {
      opacity: 1;
    }
    .subtitle{
        font-size: 3rem;
        display:block;
        margin-left:auto;
        margin-right:auto;
        width: 100%;
        text-align:center;
        color:#555;
        font-weight:200;
    }
    /*aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  */

        @media (max-width: 1024px) {
            section.card { flex: 0 0 calc(100% / 3); }
        }
        @media (max-width: 768px) {
            section.card { flex: 0 0 calc(100% / 2); }
        }
        @media (max-width: 480px) {
            section.card { flex: 0 0 100%; }
        }
</style>

</head>
<body>
<div class="loading-page" id="loading-page">
    <div class="loading-text">INMOBILIARIA</div>
    <div class="loading-bar"></div>
  </div>
  
  
<a class="logo-wp" href="#">
       <img src="./img/wp.png" width="50px" alt="">
   </a>


<?php
    require "modelo/conexion.php";
    require "controlador/registrar.php";
    require "controlador/editar.php";
    require "controlador/eliminar.php";
    // consulto en sql ala tabla para almacenar  tabla llamada "img"
    $sql = $conexion->query("select * from img");

    include  "controlador/registrar.php";
    ?>
    <!-- //////////////////////////////////////////////////////// -->
 
<nav class="navbar navbar-expand-lg navbar-light" style="z-index:999999;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="./img/logo_card.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item d-flex align-items-center">
          <a class="nav-link fw-bold text-white" href="#">Inicio</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a class="nav-link fw-bold text-white" href="./todasPublicaciones.php">Propiedades</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a class="nav-link fw-bold text-white" href="#">Nosotros</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a href="./misPublicaciones.php" class="btn btn-primary fw-bold botonPpalHeader">MIS PUBLICACIONES</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

     <!-- ------------------------------------------------- -->
      <header>

          <section class="search-section" style=" height:100vh;display: flex; align-items: center; justify-content: center;  height:100vh; ">
             <!-- VIDEO DE FONDO -->
             <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1; filter: blur(5px);">
                 <source src="./img/clip.mp4" type="video/mp4">
                 Tu navegador no soporta videos HTML5.
             </video>
            <h2 data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" style="color:white; text-shadow:2px 2px 2px black; z-index:99; margin-bottom:37rem;margin-top:auto;display:block;">ELIGE TU PROPIEDAD</h2>

             <section   data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" class="buscador" >
                 <div style="text-align: center;" class="dropdown">
                 <label style="font-weight:bold;"  for="operacion">Tipo de operación</label><br>
                 <select class="select"  id="operacion">
                     <option value="venta">Venta</option>
                     <option value="alquiler">Alquiler</option>
                 </select>
                 </div>
     
                 <div style="text-align: center;" class="dropdown">
                 <label style="font-weight:bold;" for="propiedad">Tipo de propiedad</label><br>
                 <select class="select" id="propiedad">
                     <option value="departamento">Departamento</option>
                     <option value="casa">Casa</option>
                     <option value="local">Local</option>
                     <option value="terreno">Terreno</option>
                 </select>
                 </div>
     
                 <div style="text-align: center;" class="dropdown">
                 <label style="font-weight:bold;" for="ubicacion">Ubicación</label><br>
                 <select class="select" id="ubicacion">
                     <option  style="text-align: left;" value="caba">Capital Federal</option>
                     <option style="text-align: left;" value="sur">Zona Sur</option>
                     <option style="text-align: left;" value="norte">Zona Norte</option>
                     <option style="text-align: left;" value="oeste">Zona Oeste</option>
                 </select>
                 </div>
     
                 <button class="boton-buscar" id="btnBuscar">
                 <span class="texto-btn" id="textoBtn"> contarPropiedades()PROPIEDADES 🔍</span>
                 </button>
             </section>
     
         </section>
      </header>
<!-- ------------------------------------------------- -->
<section id="stats" class="content" >
<div data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" style="background:orange; width:20vw; height:0.05rem; margin-top:5rem;"></div>
    <p data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" >Desde 2007</p>
    <a style="margin-bottom:2rem;" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="8000" class="navbar-brand" href="#">
            <img src="./img/logo_card.png">
        </a>
    <h2 data-aos="fade-down" data-aos-duration="5000" data-aos-delay="7000" style="text-align: center; color: #555;font-weight:200;">
        SOMOS UN EQUIPO PROFESIONAL, MULTIDISCIPLINARIO, ESPECIALISTAS EN SERVICIOS INMOBILIARIOS
    </h2>
    <div style="display: flex; justify-content: center; gap: 50px; margin-top: 30px;">
        <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="7000" style="  width: 18rem; display: flex; align-items: center; justify-content: center; flex-direction: column; ">
            <h3 style="font-size: 4rem; color: #555; margin-right: 2rem;">
                <i>+</i><span id="count1" data-target="1914">0</span>
            </h3>
            <p style="color: #555;">Propiedades en comercialización</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="7000" style="  width: 18rem; display: flex; align-items: center; justify-content: center; flex-direction: column; ">
            <h3 style="font-size: 4rem; color: #555; margin-right: 2rem;">
                <i>+</i><span id="count2" data-target="137859">0</span>
            </h3>
            <p style=" text-align: center; color: #555;">Tasaciones realizadas</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="7000" style="  width: 18rem; display: flex; align-items: center; justify-content: center; flex-direction: column; ">
            <h3 style="font-size: 4rem; color: #555; margin-right: 2rem;">
                <i>+</i><span id="count3" data-target="954620">0</span>
            </h3>
            <p style="text-align: center; color: #555;">Metros cuadrados vendidos</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="7000" style="  width: 18rem; display: flex; align-items: center; justify-content: center; flex-direction: column; ">
            <h3 style="font-size: 4rem; color: #555; margin-right: 2rem;">
                <i>+</i><span id="count4" data-target="36579">0</span>
            </h3>
            <p style="text-align: center; color: #555;">Unidades en pozo comercializadas</p>
        </div>
    </div>
    <a data-aos="fade-up" data-aos-duration="2000" data-aos-delay="7000" href="#">
        <button class="botonPpalHeader" style="scale:1.2; margin-top:5rem !important;">CONOCENOS</button>
    </a>
    <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="7000" style="background:orange; width:50vw; height:0.05rem; margin-top:5rem;"></div>
</section>
<!-- ------------------------------------------------- -->

<section   style="display: flex; width: 100%; flex-direction: column; align-items: center; justify-content: center; background:white; margin-top:-4rem;">

    <h2 data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" class="subtitle">Oportunidades</h2>
    <div style="width:100%; display:flex; align-items:center; justify-content:center; margin-bottom:3rem;">
  <button data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000"  class="btnP ">VENTA</button>
  <button data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000"  class="btnP ">ALQUILER</button>
</div>
</section>


<!-- ------------------------------ -->
<div class="carousel-container">
    <div class="carousel-track ">
<section class="card">
                <a class="imgDegrade" href="./publicacion.php?id=350">
                <img class="logoMob" src="./img/logo_card.png">
                <h2 class="contacto">11 1111 1111</h2>
                <img class="imgCardPpal" style="filter:grayscale(0.6);" src="./archivos/350.png">
                </a>
                <p class="tipologia">casa</p>
                <section class="iconosCard">
                    <section><img class="imgIconCard" src="./img/card_icon_1.png"><p>22 m2</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_2.png"><p>2</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_4.png"><p>2</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_5.png"><p>si</p></section>
                </section>
                <h2>test</h2>
                <h4 class="ubicacion">zona norte</h4>
                <p class="descripcion">test</p>
                <hr>
                <h2 class="precio">USD 22</h2>
                <a href="./publicacion.php?id=350"  class="botonVer">Ver publicación</a>
                <p class="clasificacion" style="display:none;">alquiler</p>
                
                <p class="idRegistro" style="display:none;">350</p>
                </section>

<section class="card">
                <a class="imgDegrade" href="./publicacion.php?id=349">
                <img class="logoMob" src="./img/logo_card.png">
                <h2 class="contacto">11 1111 1111</h2>
                <img class="imgCardPpal" style="filter:grayscale(0.6);" src="./archivos/349.jpg">
                </a>
                <p class="tipologia">casa</p>
                <section class="iconosCard">
                    <section><img class="imgIconCard" src="./img/card_icon_1.png"><p> m2</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_2.png"><p></p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_4.png"><p></p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_5.png"><p>si</p></section>
                </section>
                <h2></h2>
                <h4 class="ubicacion">capital federal</h4>
                <p class="descripcion"></p>
                <hr>
                <h2 class="precio">USD </h2>
                <a href="./publicacion.php?id=349"  class="botonVer">Ver publicación</a>
                <p class="clasificacion" style="display:none;">alquiler</p>
                
                <p class="idRegistro" style="display:none;">349</p>
                </section>

<section class="card">
                <a class="imgDegrade" href="./publicacion.php?id=348">
                <img class="logoMob" src="./img/logo_card.png">
                <h2 class="contacto">11111111111</h2>
                <img class="imgCardPpal" style="filter:grayscale(0.6);" src="./archivos/348.png">
                </a>
                <p class="tipologia">casa</p>
                <section class="iconosCard">
                    <section><img class="imgIconCard" src="./img/card_icon_1.png"><p> m2</p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_2.png"><p></p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_4.png"><p></p></section>
                    <section><img class="imgIconCard" src="./img/card_icon_5.png"><p>si</p></section>
                </section>
                <h2></h2>
                <h4 class="ubicacion">capital federal</h4>
                <p class="descripcion"></p>
                <hr>
                <h2 class="precio">USD </h2>
                <a href="./publicacion.php?id=348"  class="botonVer">Ver publicación</a>
                <p class="clasificacion" style="display:none;">alquiler</p>
                
                <p class="idRegistro" style="display:none;">348</p>
                </section>




































































      
    </div>
</div>
<section style="  padding:90rem;  background: white; padding:2rem;  height:150vh; ">

    <a style="border:3px solid rgba(255, 51, 0, 0.3); z-index:999; display:block;margin-left:auto; margin-right:auto; width:20rem; margin-bottom: 15rem; "  href="./todasPublicaciones.php" class="botonPpalHeader btn btn-primary fw-bold">
  VER TODAS LAS PUBLICACIONES</a>
  <section  class="buttons">
        <button class="btn-izq" onclick="prevSlide()">&#10094; </button>
        <button class="btn-der" onclick="nextSlide()"> &#10095;</button>
</section>
  <!-- ------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------ -->
  <div data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" style="display:block;margin-left:auto; margin-right:auto; background:orange; width:20vw; height:0.05rem; margin-top:5rem;"></div>
    <p style="display:block;margin-left:auto; margin-right:auto; width:100%; text-align:center;" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" >Desde 2007</p>
  <h2 data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" class="subtitle" >Te asesoramos antes, durante y después.</h2>

  <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" href="#"class="first-portada our-company-section" style="display:  flex; align-items: center; justify-content: center;">
       <h1>Nuestra empresa</h1>
       <i class="bi bi-arrow-right" style="position: absolute; bottom: 10px; right: 20px; font-size: 3.5rem; color: white;"></i>
   </a>
   <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="7000" href="#"class="second-portada our-company-section" style=" height:30rem;display: flex; align-items: center; justify-content: center; background: url(./img/cafe.jpg)no-repeat center center/cover !important;">
       <h1>Café</h1>
       <i class="bi bi-arrow-right" style="position: absolute; bottom: 10px; right: 20px; font-size: 3.5rem; color: white;"></i>
   </a>
</section>





<!-- <section style="margin-top: -2.8rem; height: 80vh; background: rgba(255, 255, 255, 1);backdrop-filter: blur(10px);-webkit-backdrop-filter: blur(10px);">


   <a href="#"class="first-portada our-company-section" style="display:  flex; align-items: center; justify-content: center;">
       <h1>Nuestra empresa</h1>
       <i class="bi bi-arrow-right" style="position: absolute; bottom: 10px; right: 20px; font-size: 3.5rem; color: white;"></i>
   </a>

   <a href="#"class="second-portada our-company-section" style=" height:30rem;display: flex; align-items: center; justify-content: center; background: url(./img/cafe.jpg)no-repeat center center/cover !important;">
       <h1>Café</h1>
       <i class="bi bi-arrow-right" style="position: absolute; bottom: 10px; right: 20px; font-size: 3.5rem; color: white;"></i>
   </a>
</section> -->




<footer style="border-top:150px solid white; z-index:9; height:50vh; width: 100%; 
  background: linear-gradient(0deg, #fcb045,rgb(253, 100, 29)); 
  padding: 40px; display: flex; justify-content: space-between; 
  align-items: flex-start; font-family: Arial, sans-serif; color: rgb(255, 255, 255);">
  <div style="flex: 1;">
      <h2 style="color:rgb(255, 255, 255);">Inmobiliaria ejemplo®</h2>
  </div>

  <div style="flex: 1;">
      <h3 style="margin-bottom: 10px;">Contactanos</h3>
      <p>📍 Colectora Norte Acceso Oeste Km 31</p>
      <p>📧 ventas@dambolena.com.ar</p>
      <p>📞 01139856100</p>
      <p>📱 +5491123110532</p>
  </div>

  <div style="flex: 1;">
      <h3 style="margin-bottom: 10px;">Seguinos</h3>
      <p>📌 Facebook | Instagram | YouTube | TikTok | LinkedIn</p>
  </div>

  <div style="flex: 1;">
      <h3 style="margin-bottom: 10px;">Accesos Rápidos</h3>
      <ul style="list-style: none; padding: 0;">
          <a href="#">
            <li>Inicio</li>
          </a>
          <a href="#">
            <li>Propiedades</li>
          </a>
          <a href="#">
            <li>Nosotros</li>
          </a>
          <a href="#">
            <li>Contacto</li>
          </a>

      </ul>
  </div>
</footer>

<!-- ------------------------------ -->

<!-- script header content footer -->
 <script>
    function scrollFooter(scrollY, heightFooter)
{
    console.log(scrollY);
    console.log(heightFooter);

    if(scrollY >= heightFooter)
    {
        $('footer').css({
            'bottom' : '0px'
        });
    }
    else
    {
        $('footer').css({
            'bottom' : '-' + heightFooter + 'px'
        });
    }
}

$(window).load(function(){
    var windowHeight        = $(window).height(),
        footerHeight        = $('footer').height(),
        heightDocument      = (windowHeight) + ($('.content').height()) + ($('footer').height()) - 20;

    // Definindo o tamanho do elemento pra animar
    $('#scroll-animate, #scroll-animate-main').css({
        'height' :  heightDocument + 'px'
    });

    // Definindo o tamanho dos elementos header e conteúdo
    $('header').css({
        'height' : windowHeight + 'px',
        'line-height' : windowHeight + 'px'
    });

    $('.wrapper-parallax').css({
        'margin-top' : windowHeight + 'px'
    });

    scrollFooter(window.scrollY, footerHeight);

    // ao dar rolagem
    window.onscroll = function(){
        var scroll = window.scrollY;

        $('#scroll-animate-main').css({
            'top' : '-' + scroll + 'px'
        });
        
        $('header').css({
            'background-position-y' : 50 - (scroll * 100 / heightDocument) + '%'
        });

        scrollFooter(scroll, footerHeight);
    }
});
 </script>
<!-- script carrousel -->
<script>
    // botones VENTAS ALQUILER  del carousel
    const botones = document.querySelectorAll('.btnP');
    const cards = document.querySelectorAll('.card');
    botones.forEach((btn) => {
    btn.addEventListener('click', () => {
        // Quitamos la clase "activo" de todos
        botones.forEach(b => b.classList.remove('activo'));

        // Agregamos la clase "activo" solo al clickeado
        btn.classList.add('activo');
        // Detectamos si el texto es "VENTAS" o "ALQUILER"
        let valor = btn.textContent.toLowerCase().trim();

    //     cards.forEach(card => {
    //         const tipoOperacion = card.querySelector('p[style*="display:none"]').textContent.toLowerCase().trim();
    //               // Mostramos u ocultamos según el valor
    //     if (tipoOperacion === valor) {
    //         card.style.display = 'block';
    //     } else {
    //         card.style.display = 'none';
    //     }
    // });

        cards.forEach(card => {
            let tipoOperacion = card.querySelector('.clasificacion').textContent;
                 if (tipoOperacion === valor) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
        });
        // if (valor.includes("venta")) {
        // console.log("venta");
        // } else if (valor.includes("alquiler")) {
        // console.log("alquiler");
        // }



    });
});
        
    // buscador de propiedades
    const btn = document.getElementById("btnBuscar");
    const texto = document.getElementById("textoBtn");
    
    const original = ' PROPIEDADES 🔍';
    const buscar = 'BUSCAR 🔍';

    // REDIRIGIR BUSCAR
    document.getElementById("btnBuscar").addEventListener("click", () => {
    const operacion = document.getElementById("operacion").value;
    const propiedad = document.getElementById("propiedad").value;
    const ubicacion = document.getElementById("ubicacion").value;

    // Guardar en localStorage
    localStorage.setItem("operacion", operacion);
    localStorage.setItem("propiedad", propiedad);
    localStorage.setItem("ubicacion", ubicacion);

    // Redirigir a la página
    window.location.href = "./todasPublicaciones.php";
});
    // ////////////////////////// 
  
    function cambiarTexto(nuevoTexto) {
      // Eliminar ambas clases para reiniciar animación
      texto.classList.remove('fade-in', 'fade-out');
  
      // Forzar reflujo del DOM para reiniciar la animación
      void texto.offsetWidth;
  
      texto.classList.add('fade-out');
  
      setTimeout(() => {
        texto.textContent = nuevoTexto;
  
        // Forzar reflujo de nuevo antes de aplicar fade-in
        texto.classList.remove('fade-out');
        void texto.offsetWidth;
        texto.classList.add('fade-in');
      }, 200);
    }
  
    btn.addEventListener('mouseenter', () => {
      cambiarTexto(buscar);
    });
  
    btn.addEventListener('mouseleave', async () => {
  try {
    const cantidad = await contarPropiedades();
    const textoPropiedades = `${cantidad} PROPIEDADES 🔍`;
    cambiarTexto(textoPropiedades);
  } catch (error) {
    cambiarTexto(original); // fallback si algo falla
  }
});


async function contarPropiedades() {
    try {
        const response = await fetch(`./archivos/datos.json?t=${Date.now()}`);
        if (!response.ok) throw new Error('No se pudo cargar el archivo JSON');

        const data = await response.json();

        if (Array.isArray(data)) {
            let cantidad = 0;
            for (let i = 0; i < data.length; i++) {
                // Si querés filtrar por condición, lo hacés acá
                // if (data[i].estado === "activa") {
                cantidad++;
                // }
            }

            console.log(`LA Cantidad de propiedades: ${cantidad}`);
            return cantidad;
        } else {
            console.warn("El archivo JSON no contiene un array.");
            return 0;
        }
    } catch (error) {
        console.error("Error al contar propiedades:", error);
        return 0;
    }
}
    // Ejecutar al cargar la página
    document.addEventListener("DOMContentLoaded", async () => {
  let cantidad = await contarPropiedades();  // Esperamos a que la cantidad se cargue
  texto.innerText = `${cantidad} PROPIEDADES`;  // Actualizamos el texto con la cantidad
});
    //////////////////////////////

// incremento de numeros 

const counters = [
      { id: "count1", max: 1914 },
      { id: "count2", max: 137859 },
      { id: "count3", max: 954620 },
      { id: "count4", max: 36579 }
  ];

  let animationStarted = false;

  function animateCounters() {
      counters.forEach(counter => {
          let element = document.getElementById(counter.id);
          let count = 0;
          let step = Math.ceil(counter.max / 300); // Ajusta el paso para hacer la animación más fluida

          let interval = setInterval(() => {
              count += step;
              if (count >= counter.max) {
                  count = counter.max;
                  clearInterval(interval);
              }
              element.textContent = count.toLocaleString(); // Agrega formato de miles
          }, 20); // Ajusta la velocidad de la animación
      });
  }

  function resetCounters() {
      counters.forEach(counter => {
          document.getElementById(counter.id).textContent = "0";
      });
  }

  function checkVisibility() {
      const section = document.getElementById("stats");
      const rect = section.getBoundingClientRect();
      const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

      if (isVisible && !animationStarted) {
          animationStarted = true;
          resetCounters();
          setTimeout(animateCounters, 200); // Pequeña pausa antes de iniciar
      } else if (!isVisible) {
          animationStarted = false;
      }
  }

  window.addEventListener("scroll", checkVisibility);
    // /////////////////////
    // texto limitado 
    const limiteCaracteres = 121; // Cantidad máxima que querés mostrar
    const parrafos = document.querySelectorAll(".descripcion");

    parrafos.forEach(parrafo => {
        const textoOriginal = parrafo.innerText;
        if (textoOriginal.length > limiteCaracteres) {
            parrafo.innerText = textoOriginal.substring(0, limiteCaracteres) + "...";
        }
    });
    // /////////////////////
    let index = 0;
    function updateCarousel() {
        const track = document.querySelector(".carousel-track");
        const cardWidth = document.querySelector(".card").offsetWidth;
        track.style.transform = `translateX(${-index * cardWidth}px)`;
    }
    function prevSlide() {
        if (index > 0) {
            index--;
            updateCarousel();
        }
    }
    function nextSlide() {
        const totalCards = document.querySelectorAll(".card").length;
        const visibleCards = Math.floor(document.querySelector(".carousel-container").offsetWidth / document.querySelector(".card").offsetWidth);
        if (index < totalCards - visibleCards) {
            index++;
            updateCarousel();
        }
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<script>
    
  // Change navbar style on scroll
  const navbar = document.querySelector('.navbar');
  const logo = document.querySelector('.navbar-brand')

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
      logo.classList.add('scrolled_logo');
    } else {
      navbar.classList.remove('scrolled');
      logo.classList.remove('scrolled_logo')
    }
  });

  const title = document.getElementById("title");
  const loader = document.getElementById("loader");
  const background = document.getElementById("background");
  
  window.addEventListener("load", function() {
      setTimeout(() => {
        document.getElementById("loading-page").style.animation = "curtainClose 1s forwards";
        setTimeout(() => {
          document.getElementById("loading-page").style.display = "none";
          
        }, 1000);
      }, 1500);
    });
</script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>