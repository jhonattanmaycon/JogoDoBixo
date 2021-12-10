<!DOCTYPE html>
<html>
<head>
<title>Pet Shop</title>
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
    <li><a href="{{route('about')}}">About us</a></li>
    <li><a href="{{route('blog')}}">Blog</a></li>
    <li><a href="{{route('petguide')}}">PetGuide</a></li>
    <li><a href="{{route('contact')}}">Contact us</a></li>
  </ul>
</div>
<div id="body">
  <div class="banner">&nbsp;</div>
  <div id="content">
    <div class="content">
      <ul>
        <li> <a href="#"><img src="{{asset('assets/img/puppy.jpg')}}" width="114" height="160" alt=""></a>
          <h2>What they need</h2>
          <p>Mirum est notare quam littera gothica, quam nunc putamus parum clara m, ant epo suerit li tterar. <a class="more" href="#">View all</a></p>
        </li>
        <li> <a href="#"><img src="{{asset('assets/img/cat.jpg')}}" width="114" height="160" alt=""></a>
          <h2>Something good</h2>
          <p>Gothica, quam nun c putamus parum claram, anteposuerit litterarum formas humani tatis per seacula. <a class="more" href="#">View all</a></p>
        </li>
        <li> <a href="#"><img src="{{asset('assets/img/koi.jpg')}}" width="114" height="160" alt=""></a>
          <h2>Kinds of Fish</h2>
          <p>Quam nunc putamus parum claram, antep osuerit litter arum formas humanitatis per seacula quarta. <a class="more" href="#">View all</a></p>
        </li>
        <li> <a href="#"><img src="{{asset('assets/img/bird.jpg')}}" width="114" height="160" alt=""></a>
          <h2>Fun birds</h2>
          <p>Mirum est notare quam littera gothica , quam nunc putamus parum claram, anteposuerit. <a class="more" href="#">View all</a></p>
        </li>
      </ul>
    </div>
    <div id="sidebar">
      <div class="search">
        <input type="text" name="s" value="Find">
        <button>&nbsp;</button>
        <label for="articles">
          <input type="radio" id="articles">
          Articles</label>
        <label for="products">
          <input type="radio" id="products" checked>
          PetMart Products</label>
      </div>
      <div class="section">
        <ul class="navigation">
          <li class="active"><a href="#">Shopping Guides</a></li>
          <li><a href="#">Discounted Items</a></li>
        </ul>
        <div class="aside">
          <div>
            <div>
              <ul>
                <li><a href="#">Pet Accesories </a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Bath Essentials</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Food</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Vitamins</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Needs</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Toy and Treats</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Supplies</a> <a class="more" href="#">see all</a></li>
                <li><a href="#">Pet Emergency Kit</a> <a class="more" href="#">see all</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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