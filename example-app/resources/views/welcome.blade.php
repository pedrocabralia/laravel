@extends('layouts.main')    <!-- pulling the layouts-->
@section('title','HDC Events')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>BUSQUE UM EVENTO</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
    </form>

    <div  id="events-container" class="col-md-12">
        <h1>Próximos eventos</h1>
        <p>Veja os eventos dos próximos dias</p>
         
        <div id ="cards-container" class="row">
         @foreach ($events as $event)
              <div class="card col-md-3">
                <img src="img/event_placeholder.jpg" alt="{{$event->title}}" srcset="">
                <div class="card-body">
                    <p class="card-date">10/09/2020   </p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants"> x participantes</p>
                    <a href="http://" class="btn btn-primary">Saber mais</a>
                </div>
              </div>
         @endforeach
        </div>


    </div>
</div>


@endsection


