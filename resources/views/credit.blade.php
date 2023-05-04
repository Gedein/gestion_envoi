@push('styles')
<link href="{{asset('css/ajouter.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
Crédit
@endsection
@section('h1')
CREDITER UN COMPTE
@endsection
@section('content')
    <div class="div1">

  <form  align="center"action="{{route('account.credit')}}" method="POST" class="fm"> 
    @csrf
      <h1  id="con1">Formulaire de crédit</h1>

      <div class="line-1"> </div>

      <input type='text' name='nom' placeholder="nom" id="input1" value={{$result->nom}} readonly>
      <input type='text' name='prenom' placeholder="prenom" id="input2" value={{$result->prenom}} readonly>
         <br>
         <input type='text' name='curency_credit'placeholder="Devise" id="input3"  >
         <br>
         <input type='text' name='taux_credit'placeholder="taux(1 si en FCFA)" id="input4"  >
         <br>
       <input type='text' name='mnt_credit'placeholder="montant" id="input5" >
       <br>
    <input type="submit" value="Valider"  id="btn"> 

   <input type="reset" value="Annuler"  id="btn2"> 
              </form>
      
    </div>
    @endsection

