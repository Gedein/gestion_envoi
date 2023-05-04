@push('styles')
<link href="{{asset('css/rapport.css')}}" rel="stylesheet">
<link href="{{asset('css/gestion.css')}}" rel="stylesheet">
          @endpush
@extends('layout')
@vite('resources/css/app.css')


@section('title')
Rapport
          @endsection
 

@section('content')


<h1  id="ac1"> Génerer </h1>  
<h1  id="ac3"> rapport </h1>
<div class="line"> </div>

<div  id='div1'>
<img src="{{asset('/image/ajout_cmpt.png')}}" class='image'>
<a href="{{route('rapport.journalier')}}">
    <h4  id="text2">Rapport jounalier</h4>
</a>
            </div>


    
        <div  id='div7'>
        <img src="{{asset('/image/generer.png')}}" class='image'>
        <a href="{{route('rapport.hebdomadaire')}}">
        <h4  id="text2">Rapport hebdomadaire</h4>
     </a>

         </div>
  
         
            <div id='div5'>
            <img src="{{asset('/image/debit.png')}}" class='image'>
            <a href="{{route('rapport.mensuel')}}">
            <h4  id="text2">Rapport mensuel</h4>
          </a>
            
    

    </div>
         
 
              @endsection