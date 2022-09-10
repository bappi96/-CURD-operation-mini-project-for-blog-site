@extends('master')

@section('title')
    Home
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
           <div class="row">
               @foreach($newses as  $news)
               <div class="col-md-6">
                   <div class="card card-body">
                       <h1 class="text-info fw-bold">{{$news->name}}</h1>
                       <img src="{{asset($news->image)}}" alt=""style="height:300px; width: auto;">
                       <p class="text-danger pt-1">Author: {{$news->author}}</p>
                       <h4>{{$news->heading}}</h4>
                       <hr/>
                       <p>{{$news->description}}</p>
                   </div>
               </div>
               @endforeach
           </div>
        </div>
    </section>
@endsection
