@push('styles')
<link href="{{asset('css/ges.css')}}" rel="stylesheet">
          @endpush
@extends('layout')
@vite('resources/css/app.css')

 
@section('title')
Gestion
          @endsection
 

@section('content')


<h1  id="ac"> Compte de:</h1> 
<h1  id="ac2">{{$result->nom}} {{$result->prenom}} </h1>
<div class="line-1"> </div>


        
        <div  id='div7'>
           
        <img src="{{asset('/image/generer.png')}}" class='image'>
        <a href={{route('account.delete',['id'=>$result->id])}}>
        <h4  id="text">Suprimer </h4>
    
    </a>
         </div>
       

         
            <div  id='div5'>
            <img src="{{asset('/image/debit.png')}}" class='image'>
            <a href={{route('account.information',['id'=>$result->id])}}>
            <h4  id="text">Information </h4>
        </a>
    

    </div>
        
              @endsection