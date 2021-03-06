<!DOCTYPE html>
<html>
<head>
<title>Pet Shop | PetGuide</title>
<meta charset="iso-8859-1">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="{{route('home')}}" id="logo"><img src="{{asset('assets/img/logo.gif')}}" width="310" height="114" alt=""></a>
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
    <div class="content">
      <h2>Guia pet</h2>
      <div>
        <p> Here are some useful pet quide tips for your pets. Easy and convenient for you to learn more on how to understand them. basic intructions to useful information not just for your pet but also for other animals. </p>
      </div>
      <ul class="section">
        <li>
          <h2>Treinanamento</h2>
          <p> Donec a purus sit amet risus consectetur lacinia et ut libero. Vestibulum tempus fauscibus sagittis. Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. </p>
        </li>
        <li>
          <h2>Adestramento</h2>
          <p> Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. porta. Duis risus augue, sollicitudin sit amet enim. </p>
        </li>
        <li>
          <h2>Alimentos necessários</h2>
          <p> Donec a purus sit amet risus consectetur lacinia et ut libero. Vestibulum tempus fauscibus sagittis. Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. </p>
        </li>
        <li>
          <h2>O que fazer e não fazer</h2>
          <p> Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. porta. Duis risus augue, sollicitudin sit amet enim. </p>
        </li>
        <li>
          <h2>Alimentos de cada pet</h2>
          <p> Donec a purus sit amet risus consectetur lacinia et ut libero. Vestibulum tempus fauscibus sagittis. Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. </p>
        </li>
        <li>
          <h2>Receitas saudáveis</h2>
          <p> Ut gravida lacus eget orci bibendum aliuet. A enean adipiscing congue mi a fringilla. Suspendisse placerat arcu ac est pharetra sit amet pretium ante. porta. Duis risus augue, sollicitudin sit amet enim. </p>
        </li>
      </ul>
      <div class="paging"> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a class="next" href="#">NEXT</a> </div>
    </div>
    <div id="sidebar">
      <div id="section">
        <div>
          <div>
            <h2>Tópicos principais</h2>
            <ul>
              <li><a href="#">Pet Trainging Guides <span>(1)</span> </a></li>
              <li><a href="#">Behavior Training <span>(11)</span> </a></li>
              <li><a href="#">Pet Recipes <span>(3)</span> </a></li>
              <li><a href="#">Do's and Don'ts <span>(8)</span> </a></li>
              <li><a href="#">Pet Foods <span>(3)</span> </a></li>
              <li><a href="#">Cosplay Pets <span>(2)</span> </a></li>
              <li><a href="#">Shopping Guides <span></span> </a></li>
              <li><a href="#">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
              <li><a href="#">Medications <span>(7)</span> </a></li>
              <li><a href="#">Excercise <span>(7)</span> </a></li>
              <li><a href="#">Diet <span>(10)</span> </a></li>
              <li><a href="#">Grooming <span>(1)</span> </a></li>
              <li><a href="#">Cosplay Pets <span>(2)</span> </a></li>
              <li><a href="#">Shopping Guides <span></span> </a></li>
              <li><a href="#">Pregnancy and Nursing Pets <span>(8)</span> </a></li>
              <li><a href="#">Medications <span>(7)</span> </a></li>
              <li><a href="#">Excercise <span>(7)</span> </a></li>
              <li><a href="#">Diet <span>(10)</span> </a></li>
              <li><a href="#">Grooming <span>(1)</span> </a></li>
            </ul>
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