@push('styles')
<link href="{{asset('css/info.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
Rapport
@endsection
@section('h1')
RAPPORT JOURNALIER
@endsection
@section('content')

<form  align="center" method="" action=""  class="fm">
    <form  align="center" method="" action=""  class="fm">
        <h2>rapport joumalier</h2>
       <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Debit joumalier</th>
                <th>Credit journalier</th>
                
            </tr>
            </thead>
            <tbody>
            
        @foreach($rapportj as $rapportjs)
                <tr>
                <td>
                
                    <span class='account'> 
                        {{$rapportjs->nom}}  <br><br><br>
                      </span> </a>
                      </td>
                     
      
                      <td>
                      
                         <span class='account'> 
                            {{$rapportjs->prenom}}  <br><br><br>
                          </span> </a>
                  </td>
                  <td>
                      
                     <span class='account'> 
                        {{$rapportjs->debit_j}}  <br><br><br>
                      </span> </a>
              </td>
              <td>
                      
                <span class='account'> 
                    {{$rapportjs->credit_j}}<br><br><br>
                 </span> </a>
         </td>
                </tr>
     
        @endforeach
        <tbody>
    </table>
    </div>
       
   
    
        
    
   
    <a href="{{route('rapport')}}">
    <input type="button" value="Retour"  id="btn"> </a>
        <a href={{route('pdfj')}}>
            <input type="button" value="telecharger"  id="btn"> </a>

</form>
   
    
    



@endsection