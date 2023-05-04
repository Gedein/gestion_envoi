@push('styles')
<link href="{{asset('css/info.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
Rapport
@endsection
@section('h1')
RAPPORT MENSUEL
@endsection
@section('content')

<form  align="center" method="" action=""  class="fm">
    <form  align="center" method="" action=""  class="fm">
        <h2>rapport mensuel</h2>
       <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Debit mensuel</th>
                <th>Credit mensuel</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($rapportm as $rapportms)
                <tr>
                <td>
                
                    <span class='account'> 
                        {{$rapportms->nom}}  <br><br><br>
                      </span> </a>
                      </td>
                     
      
                      <td>
                      
                         <span class='account'> 
                            {{$rapportms->prenom}}  <br><br><br>
                          </span> </a>
                  </td>
                  <td>
                      
                     <span class='account'> 
                        {{$rapportms->debit_m}}  <br><br><br>
                      </span> </a>
              </td>
              <td>
                      
                <span class='account'> 
                    {{$rapportms->credit_m}}<br><br><br>
                 </span> </a>
         </td>
                </tr>
     
        @endforeach
        <tbody>
    </table>
    </div>
       
    <a href="{{route('rapport')}}">
    <input type="button" value="Retour"  id="btn"> </a>
        <a href={{route('pdfm')}}>
            <input type="button" value="telecharger"  id="btn"> </a>

</form>
   
@endsection