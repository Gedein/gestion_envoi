@push('styles')
<link href="{{asset('css/info.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
Rapport
@endsection
@section('h1')
RAPPORT HABDOMADAIRE
@endsection
@section('content')

<form  align="center" method="" action=""  class="fm">
   
   
        <h2>Rapport hebdomadaire</h2>
       <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Debit hebdomadaire</th>
                <th>Credit hebdomadaire</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($rapporth as $rapporths)
                <tr>
                <td>
                
                    <span class='account'> 
                        {{$rapporths->nom}} <br><br><br>
                      </span> </a>
                      </td>
                     
      
                      <td>
                      
                         <span class='account'> 
                            {{$rapporths->prenom}} <br><br><br>
                          </span> </a>
                  </td>
                  <td>
                      
                     <span class='account'> 
                        {{$rapporths->debit_h}} <br><br><br>
                      </span> </a>
              </td>
              <td>
                      
                <span class='account'> 
                    {{$rapporths->credit_h}} <br><br><br>
                 </span> </a>
         </td>
                </tr>
     
        @endforeach
        <tbody>
    </table>
    </div>
       
   
   
    
  
    <a href="{{route('rapport')}}">
    <input type="button" value="Retour"  id="btn"> </a>
        <a href={{route('pdfh')}}>
            <input type="button" value="telecharger"  id="btn"> </a>

</form>
   
    
    



@endsection