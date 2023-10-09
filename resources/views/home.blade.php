<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("link.style")
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
  
    <script src="js/profil.js"></script>
    <title>Document</title>
</head>
<body style="background-color: #03275c;">
@include("layouts.header")
<div class="widget">
  <h3>Категории</h3>
  <ul>
    <li><a href="">Полезная еда</a></li>
    <li><a href="">Фаст фуд</a></li>
    <li><a href="">Сладкое</a></li>
    <li><a href="">Напитки</a></li>
    <li><a href="">Овощи и Фрукты</a></li>
  </ul>
</div>
<div class="main-eat">
    <div class="pos-search">
        <div class="input-container">
        <form action="{{route('search', [Auth::user()->id])}}" method="get" id="search-from">
          
            <input type="text" name="search" class="input" placeholder="search...">
            <button  type="submit" form="search-from">
                <span class="icon"> 
                    <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 
                </span>
            </button>
        </div>
        </form>
    </div>
    <div class="main-group">
        <!-- Сетка карточек товаров -->
<div class="cards">
  @foreach($eat as $elem)
  <div class="card2">
    <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="#" class="card__image">
      <img
        src="img/{{$elem->previu_img}}"
        
      />
    </a>
    <!-- Скидка на товар -->
    <div class="card__label"><p>{{$elem->discount}}</p></div>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    <!-- Цены на товар (с учетом скидки и без)-->
    <div class="card__prices">
      <div class="card__price card__price--discount">{{$elem->price - 10}}</div>
      <div class="card__price card__price--common">{{$elem->price}}</div>
    </div>
    <!-- Ссылка-название товара -->
    <a href="#" class="card__title">
    {{$elem->artical_name}}
    </a>
    <!-- Кнопка добавить в корзину -->
    <button class="card__add">В корзину</button>
  </div>
  </div>
  @endforeach
</div>
    </div>
    
   
    
</div>
<div class="model" id="profillId" style="display: none;">
        @include("profil")
    </div>

</div>
</body>
</html>