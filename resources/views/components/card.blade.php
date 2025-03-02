<div class="card" style="width: 21rem;">
    <img src="{{$img}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$title}}</h5>
      <p class="card-text">{{$synopsis}}</p>
      <a href="{{route('anime_detail',['id'=> $id, 'anime_title' =>$title])}}" class="btn btn-primary">Vai al Dettaglio</a>
    </div>
  </div>
  