<div class="model" id="modelId">

    <div class="model-pos" id="m-p1">
    <a class="clouse" onclick="clouse()">&#x2715</a>    
    
    <div class="pos-register">
        <p class="text-reg">Регистрация</p>
        <p class="text-if">Уже есть аккаунт<a onclick="log()" class="if-log" style="margin-left: 35px; color:blue">Войти</a></p>
    </div>
         <div class="pos-inp">
            
            <form action="{{route('register')}}" novalidate method="post" >
            @csrf
                <input class="input-info" id="lname" name="name" placeholder="Ваше имя">
                <input class="input-info" id="fname" type="email" name="email" placeholder="Ваш email">
                <input class="input-info" id="patronymic" type="password" name="password" placeholder="пароль">
                <input class="input-info" id="phone" type="password" placeholder="повторите пароль">
                <button class="btn-post">Регистрация</button><br>
            </form>
         </div>
    </div>
    <div class="model-pos2" id="m-p2">
    <a class="clouse" onclick="clouse()">&#x2715</a> 
    <div class="pos-login">
        <p class="text-reg">Вход</p>
        <p class="text-if">нет аккаунта?<a onclick="reg()" class="if-log" style="margin-left: 35px; color:blue">Регистрация</a></p>
    </div>
         <div class="pos-inp2">
         <form action="{{route('login')}}" novalidate autocomplete="off" method="post" >
				@csrf
                <input class="input-info" name="email" id="name" placeholder="Ваш email">
                <input class="input-info" name="password" type="password" id="patronymic" placeholder="пароль">
                <button class="btn-post">Войти</button><br>
        </form>
         </div>
    </div>
    </div>
</div>