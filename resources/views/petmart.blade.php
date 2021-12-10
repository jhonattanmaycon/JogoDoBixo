<!DOCTYPE html>
<html>
<head>
<title>Pet Shop | PetMart</title>
<meta charset="iso-8859-1">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="{{asset('assets/img/logo.gif')}}" width="310" height="114" alt=""></a>
  <ul class="navigation">
  <li class="active"><a href="{{route('home')}}">Home</a></li>
    <li><a href="{{route('petmart')}}">PetMart</a></li>
    <li><a href="{{route('about')}}">Sobre nós</a></li>
    <li><a href="{{route('blog')}}">Blog</a></li>
    <li><a href="{{route('petguide')}}">PetGuide</a></li>
    <li><a href="{{route('contact')}}">Contato</a></li>
  </ul>
</div>
<div id="body">
  <div id="content">
    <div class="search">
      <input type="text" name="s" value="Find">
      <button>&nbsp;</button>
      <label for="articles">
        <input type="radio" id="articles">
        Objetos</label>
      <label for="products">
        <input type="radio" id="products" checked>
        PetMart Produtos</label>
    </div>
    <div class="content">
      <ul>
        <li> <a href="#"><img src="{{asset('assets/img/koi2.jpg')}}" width="140" height="250" alt=""></a>
          <h2>Comidas e rações</h2>
          <span><a href="#">Dog Food</a></span> <span><a href="#">Cat Food</a></span> <span><a href="#">Bird Food</a></span> <span><a href="#">Fish Food</a></span> <span><a href="#">Reptile Food</a></span> <span><a href="#">Small Pet Food</a></span> <span><a href="#">Large Pet Food</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="{{asset('assets/img/cat3.jpg')}}" width="140" height="250" alt=""></a>
          <h2>Acessórios</h2>
          <span><a href="#">Oder Control</a></span> <span><a href="#">Liners</a></span> <span><a href="#">Scoops & Mats</a></span> <span><a href="#">Collars</a></span> <span><a href="#">Harnesses</a></span> <span><a href="#">ID Tags</a></span> <span><a href="#">Leashes</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="{{asset('assets/img/dog2.jpg')}}" width="140" height="240" alt=""></a>
          <h2>Treinamento e adestramento</h2>
          <span><a href="#">Dog Food</a></span> <span><a href="#">Cat Food</a></span> <span><a href="#">Bird Food</a></span> <span><a href="#">Fish Food</a></span> <span><a href="#">Reptile Food</a></span> <span><a href="#">Small Pet Food</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="{{asset('assets/img/bird3.jpg')}}" width="140" height="240" alt=""></a>
          <h2>Saúde</h2>
          <span><a href="#">Multivitamins</a></span> <span><a href="#">Dental Care</a></span> <span><a href="#">First Aid Kits</a></span> <span><a href="#">Medications</a></span> <span><a href="#">Supplements</a></span> <span><a href="#">Eye & Ear Care</a></span> <span><a href="#">Hip & Joint Health</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="{{asset('assets/img/bird-in-cage.jpg')}}" width="140" height="250" alt=""></a>
          <h2>Itens de viagem</h2>
          <span><a href="#">Car Barriers</a></span> <span><a href="#">Car Seat Covers</a></span> <span><a href="#">Car Seats</a></span> <span><a href="#">ramps</a></span> <span><a href="#">Seat Belts & Harnesses</a></span> <span><a href="#">Strollers</a></span> <span><a href="#">Travel Creates & Carrier</a></span> <span><a class="more" href="#">View all</a></span> </li>
        <li> <a href="#"><img src="{{asset('assets/img/puppy3.jpg')}}" width="140" height="240" alt=""></a>
          <h2>Banho e conforto</h2>
          <span><a href="#">Brushes & Combs</a></span> <span><a href="#">Deodorizers</a></span> <span><a href="#">Cologne</a></span> <span><a href="#">Ear & Eya Cleaners</a></span> <span><a href="#">Nail Clippers</a></span> <span><a href="#">Shampoo</a></span> <span><a href="#">Conditioners</a></span> <span><a href="#">Shed Controls</a></span> <span><a class="more" href="#">View all</a></span> </li>
      </ul>
    </div>
    <div id="sidebar"> <a href="#"><img src="{{asset('assets/img/discount.jpg')}}" width="300" height="790" alt=""></a> </div>
  </div>
  <div class="featured">
    <ul>
      <li><a href="#"><img src="{{asset('assets/img/organic-and-chemical-free.jpg')}}" width="300" height="90" alt=""></a></li>
      <li><a href="#"><img src="{{asset('assets/img/good-food.jpg')}}" width="300" height="90" alt=""></a></li>
      <li class="last"><a href="#"><img src="{{asset('assets/img/pet-grooming.jpg')}}" width="300" height="90" alt=""></a></li>
    </ul>
  </div>
</div>
<div id="footer">
  
  <div id="footnote">
    <div class="section">Copyright &copy; 2012 <a href="#">Company Name</a> All rights reserved | Website Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">freewebsitetemplates.com</a></div>
  </div>
</div>
</body>
</html>