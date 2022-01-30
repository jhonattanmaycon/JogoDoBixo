<!DOCTYPE html>
<html>
<head>
<title>Pet Shop | Blog</title>
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
      <ul class="articles">
        <li>
          <div> <span>Dec 3</span>
            <h2>Novos produtos em nosso estoque!</h2>
            <a class="heart" href="#">&nbsp;</a> <a class="twitter" href="#">&nbsp;</a> <a class="facebook" href="#">&nbsp;</a> </div>
          <p> Lorem ipsum sot amet, consec teteur adipis cing elitsed diam non ummy nibh euismod tincidunt ut laoreet dolore magna. Aliquam erat volutpat. ut wisi enim ad veniam, quis nostrud excerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem eum iruire dolor in hendrerit in vulputate vellit essemolestie consequat, velillum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim ui blandit praesent luptatum zzril delenit augue duis dolore te feugiat nulla facilisi. Nam liner tempor cum soluta nobis eleifend option congue nihil imperdiet doming id uod mazim placerat facer posim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etaim procesus dynamicus. </p>
        </li>
        <li>
          <div> <span>Nov 29</span>
            <h2>Perdeu o blackfriday?</h2>
            <a class="heart" href="#">&nbsp;</a> <a class="twitter" href="#">&nbsp;</a> <a class="facebook" href="#">&nbsp;</a> </div>
          <p> Lorem ipsum sot amet, consec teteur adipis cing elitsed diam non ummy nibh euismod tincidunt ut laoreet dolore magna. Aliquam erat volutpat. ut wisi enim ad veniam, quis nostrud excerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem eum iruire dolor in hendrerit in vulputate vellit essemolestie consequat, velillum dolore eu feugiat nulla facilisis at vero eros et accumsan </p>
        </li>
        <li>
          <div> <span>Nov 11</span>
            <h2>Faça esporte com seu pet</h2>
            <a class="heart" href="#">&nbsp;</a> <a class="twitter" href="#">&nbsp;</a> <a class="facebook" href="#">&nbsp;</a> </div>
          <p> Lorem ipsum sot amet, consec teteur adipis cing elitsed diam non ummy nibh euismod tincidunt ut laoreet dolore magna. Aliquam erat volutpat. ut wisi enim ad veniam, quis nostrud excerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem eum iruire dolor in hendrerit in vulputate vellit essemolestie consequat, velillum dolore eu feugiat nulla facilisis at vero eros et accumsan </p>
        </li>
      </ul>
      <div> <a class="new" href="#">Criar post</a> <a class="old" href="#">Ver outros</a> </div>
    </div>
    <div id="sidebar">
      <div id="section">
        <div>
          <div>
            <h2>Arquivos de postagens</h2>
            <ul class="archive">
              <li><a class="active" href="#">2021 <span>(60)</span> </a>
                <ul>
                  <li><a href="#">Dezembro <span>(1)</span></a></li>
                  <li><a href="#">Novembro <span>(11)</span></a></li>
                  <li><a href="#">Outubro <span>(3)</span></a></li>
                  <li><a href="#">Setembro <span>(8)</span></a></li>
                  <li><a href="#">Agosto <span>(3)</span></a></li>
                  <li><a href="#">Julho <span>(2)</span></a></li>
                  <li><a href="#">Junho <span></span></a></li>
                  <li><a href="#">Maio <span>(8)</span></a></li>
                  <li><a href="#">Abril <span>(7)</span></a></li>
                  <li><a href="#">Maio <span>(7)</span></a></li>
                  <li><a href="#">Fervereiro <span>(10)</span></a></li>
                  <li><a href="#">Janeiro <span>(1)</span></a></li>
                </ul>
              </li>
              <li><a href="#">2020 </a></li>
              <li><a href="#">2019</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</div>
<div id="footer">
  
  <div id="footnote">
    <div class="section">Copyright &copy; 2012 <a href="#">Company Name</a> All rights reserved | Website Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">freewebsitetemplates.com</a></div>
  </div>
</div>
</body>
</html>