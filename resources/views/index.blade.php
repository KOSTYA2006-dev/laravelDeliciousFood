<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("link.style")
    <link rel="stylesheet" type="text/css" href="css/model.css">
    <script src="js/model.js"></script>
    <title>Document</title>
</head>
<body style="background-color: #b7ff74">
<div class="img-pos">
<img class="" src="img/hamburger.png" style=" margin-top: 150px;">
 </div>
@include("layouts.header")
@include("layouts.model")
<div class="main">
    <div class="pos-text">
        <p class="main-text">Точка<br>корпоративного питания</p>
        <p class="text-info-mini">Наш сайт предлагает уникальную возможность закзывать блюда не <br>отходя от работы.</p>
@auth('web')
<a href="{{route('home', [Auth::user()->id])}}" class="btn" type="button">    
  <strong>Хочу кушать!</strong>
  

  <div id="glow">
    <div class="circle"></div>
    <div class="circle"></div>
  </div>
</a>
@endauth
@guest('web')
<button onclick="start()" class="btn" type="button">

        <strong>Хочу кушать!</strong>
        
        <div id="glow">
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
      </button>
      @endguest
    </div>
</div>
</body>
</html>