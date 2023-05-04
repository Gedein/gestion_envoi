@push('styles')
<link href="{{asset('css/recherche.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
Debit
@endsection
@section('h1')
DEBITER UN COMPTE
@endsection
@section('content')
<form  align="center" method="GET" action="{{route('allfordebit')}}"  class="fm">
    <input type="text" name='recherche' placeholder="Chercher un compte" class="shearch">
    <button type="submit" class='image' value="chercher"> </button>
<div class="area">
    @if ( $account->count()==0)
    @foreach($allfrd as $all)
    <a href={{route('debit',['id'=>$all->id])}}><span class='account'> 
        {{$all->nom}} {{$all->prenom}} <br><br><br>
    </span> </a>
    @endforeach
    @endif
    @if ( $account->count()>0)
    @foreach($account as $accounts)
    <a href={{route('debit',['id'=>$accounts->id])}} id='result'><span class='account'> 
        {{$accounts->nom}} {{$accounts->prenom}} <br><br><br>
    </span> </a>
    @endforeach
    @endif
</div>
@endsection