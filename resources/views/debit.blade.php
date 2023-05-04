@push('styles')
<link href="{{asset('css/ajouter.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
Débit
@endsection
@section('h1')
DEBITER UN COMPTE
@endsection
@section('content')
    <div class="div1">

  <form  align="center" method="POST" action="{{route('account.debit')}}"  class="fm"> 
   @csrf
      <h1  id="con1">Formulaire de débit</h1>

      <div class="line-1"> </div>

      <input type='text' name='nom' placeholder="Nom" id="input1" value={{$result->nom}} readonly>
      <input type='text' name='prenom' placeholder="prenom" id="input2"value={{$result->prenom}} readonly>
         <br>
         <input type='text' name='curency_debit'placeholder="Devise" id="input3"  >
         <br>
         <input type='text' name='taux_debit'placeholder="taux(1 si en FCFA)" id="input4"  >
         <br>
       <input type='text' name='mnt_debit'placeholder="montant" id="input5" >
       <br>
       
      <input type="submit" value="Valider" id="btn"> 
      <input type="reset" value="Annuler"  id="btn2"> 
      
              </form>
      
    </div>
    @endsection

