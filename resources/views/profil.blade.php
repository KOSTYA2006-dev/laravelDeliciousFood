<div class="model-main">
<div class="container">

  <div class="grid-7 element-animation">
    
    <div class="card color-card">
    <a class="clouse" onclick="clouseprofil()">&#x2715</a>
      <ul>
        <li><i class="fas fa-arrow-left i-l w"></i></li>
        <li><i class="fas fa-ellipsis-v i-r w"></i></li>
        <li><i class="far fa-heart i-r w"></i></li>
      </ul>
      
      @foreach($data as $el)
      @if($el->my_img == '')
        <img src="http://gravatar.com/avatar/288ce55a011c709f4e17aef7e3c86c64?s=200" alt="profile-pic" class="profile">
      @else
        <img class="avatar" src="{{asset('../storage/app/public/imgavatar'). '/'. $el->my_img}}" alt="jofpin"/>
      @endif
      <h1 class="title">{{$el->name}}</h1>
      <p class="job-title"> SENIOR PRODUCT DESIGNER</p>
      <div class="desc top">
        <p>Ваша электронная почта {{$el->email}}</p>
      </div>
      <form action="{{ route('profil.profiles', [Auth::user()->id])}}" novalidate method="post" enctype="multipart/form-data" id="upload-image">
        @csrf
        <input type="file" name="img_avatar">
    
      
           
      <button class="btn-main color-a top">Изменить</button>
      </form>
      
            @endforeach
            <div class="logout-pos">
            <form action="{{route('logout')}}" target="_blank">
                <button class="a-logout">Выйти</button>
            </form>
                
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
