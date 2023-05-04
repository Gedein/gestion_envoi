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
    <h1>CE COMPTE N'EXISTE PAS </h1>
  <a href="{{route('credit')}}">  <input type="button" value="Retour" class="error"> </a>
</div>



@endsection