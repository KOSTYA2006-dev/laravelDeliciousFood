
<div class="header">
<div class="pos-element">
    <a href="{{route('index')}}" class="logo-test">Вкусно и !</a>
</div>
    <div class="headr__nav">
            <ul class="headr__list">
                <li><a class="headr__item" href="">О нас</a></li>
                <li><a class="headr__item" href="">Новинки</a></li>
                <li><a class="headr__item" href="">Скидки</a></li>
                <li><a class="headr__item" href="">Полезное</a></li>
            </ul>
            @auth('web')
            <div class="dtn-pos-auth">
                <!-- <a class="btn-auth" href="{{route('logout')}}">Выйти</a> -->
                <button onclick="goprofil()" style="outline: none; border: 0;
                background: transparent; cursor: pointer;"><img src="img/profil.png" style="width: 50px"></button>
                
            </div>
            @endauth
            @guest('web')
            <div class="dtn-pos-auth">
                <button class="btn-auth" onclick="start()">Войти</button>
            </div>
            @endguest
        </div>
</div>