@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')


<div id="jumbotron" ></div>

<main>

     <div id="container">

         <div id="current">CURRENT SERIES</div>

         <div class="row">

            @foreach($comics as $item)

                <div class="card">

                    <img src="{{$item ["thumb"]}}" alt="" class="img-thumb">
                    <div class="card-text"></div>
                
                </div>
              
            @endforeach
                
            <div id="load">LOAD MORE</div>

         </div>
         
     </div>
     
 </main>
@endsection

