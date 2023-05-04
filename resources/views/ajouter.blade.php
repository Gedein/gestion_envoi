@push('styles')
<link href="{{asset('css/ajouter.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
Ajout
@endsection
@section('h1')
AJOUTER UN COMPTE
@endsection
@section('content')
    <div class="div1">

  <form  align="center"action="{{route('account.store')}}" method="POST" class="fm"> 
    @csrf
      <h1  id="con1">Formulaire d'ajout</h1>

      <div class="line-1"> </div>

      <input type='text' name='nom' placeholder="Nom" id="input1">
         <br>
       <input type='text' name='prenom'placeholder="Prenom" id="input2" >
       <br>
       <input type='text' name='solde'placeholder="Solde" id="input2" >
       <br>

    <input type="submit" value="Valider"  id="btn"> 

    <input type="reset" value="Annuler"  id="btn2"> 
    
       </form>
      
    </div>
    @endsection

