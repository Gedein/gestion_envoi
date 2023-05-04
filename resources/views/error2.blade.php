@push('styles')
<link href="{{asset('css/error.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')

@endsection
@section('h1')
@endsection
@section('content')
<div class="area">
    <h1>MONTANT INSSUFISANT </h1>
  <a href="{{route('dedit')}}">  <input type="button" value="Retour" class="error"> </a>
</div>
@endsection