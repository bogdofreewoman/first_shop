<?php
include_once ("db_connection.php"); 
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>OutFit</title>
    <link href="Style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="Icons/align-justify.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
  </head>
<body>
  <div id="main">
    <div id="mySidenav" class="sidenav" data-active="false">
      <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&times;</a>
      <a href="#">Каталог</a>
      <a href="#">Женская</a>
      <a href="#">Мужская</a>
      <a href="#">Головные Уборы</a>
      <a href="#">Верхняя Одежда</a>
      <a href="#"></a>
    </div>
<header class="header">
    <div class="section">
      <div class="left-header">  <!--Menu-->
        <a onclick="toggleNav()"><i class="fa-solid fa-bars"></i></a> 
        <a href="ShoppingCart.html"><i class="fa-solid fa-bag-shopping"></i></a>
      </div>
    </div>
    <div class="section">
      <div class="logo">         <!--Logo-->
        <a class="a" href="Menu.html"><p class="transparent-text">OutFit|Store</p></a>
      </div>
    </div>
    <div class="section">
      <div class="right-header"> <!--Settings-->
        <i class="fa-solid fa-gears"></i>
        <a href="User.html"><i class="fa-solid fa-house-user"></i></a>
      </div>
    </div>
 </header>
<div class="container"> 
<section class="title-line">
  <img src="Image/title.png" width="100%">
</section>
<section>
  <div class="product">
    <div class="first-line">
      <h1 class="new">Новинки</h1>
      <div class="row">
        <div class="col-4">                <!--First item -->
          <img class="zoom-img" src="Image/JustDo.png">  
        <div class="product">
          <p class="name">Футболка | Just Do It But Not Today</p>
          <p class="price">380 грн. <del>400 грн.</del></p>
      </div>
    </div>
        <div class="col-4">                <!--Second item -->
          <img class="zoom-img" src="Image/CryBabyGreen.png">
          <div class="product">
            <a href="Product.html">
            <p class="name">Футболка | Cry Baby</p>
            <p class="price">649 грн. <del>700 грн.</del></p>
            </a>
          </div>
          </div>
          <div class="col-4">              <!--Third item -->
            <img class="zoom-img" src="Image/Stiv.png">
          <div class="product">
            <p class="name">Футболка | Jobs</p>
            <p class="price">520 грн.</p>
          </div>
    </div>
  </div>

    <div class="second-line">
      <div class="row">
    <div class="col-4">                <!--First item -->
      <img class="zoom-img" src="Image/Mask.png">
    <div class="product">
      <p class="name">Футболка | Mask</p>
      <p class="price">520 грн.</p>
    </div>
    </div>
    <div class="col-4">
      <img class="zoom-img" src="Image/Crahs.png">      <!--Second item -->
      <div class="product">
        <p class="name">Футболка | Crash</p>
        <p class="price">649 грн. <del>700 грн.</del></p>
      </div>
    </div>
      <div class="col-4">
        <img class="zoom-img" src="Image/Tosia.png">    <!--Third item -->
    <div class="product">
      <p class="name">Футболка | Tosia</p>
      <p class="price">400 грн.</p>
    </div>
      </div>
  </div>
 </section>
</div>
</div>
<div class="scroll">
<a href="" class="totop">
  <i class="fa-regular fa-circle-up"></i>
  </a>
</div>
<footer class="footer">
  <div class="footer-left">    
  
  </div>
  <div class="footer-right">
  
  </div>
</footer>
<!--Navigation-->
<script src="menu.js"></script>
</body>