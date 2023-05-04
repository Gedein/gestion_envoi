@push('styles')
<link href="{{asset('css/info.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
information
@endsection
@section('h1')
INFORMATION DU COMPTE
@endsection
@section('content')

<form  align="center" method="" action=""  class="fm">

    <h2>infortion du compte</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Solde</th>
                
            </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                
                    <span class='account'> 
                          {{$result3->nom}} <br><br><br>
                      </span> </a>
                      </td>
                     
      
                      <td>
                      
                         <span class='account'> 
                              {{$result3->prenom}} <br><br><br>
                          </span> </a>
                         
                      
                      
                  
                  </td>
                  <td>
                      
                     <span class='account'> 
                          {{$result3->montant}} FCFA <br><br><br>
                      </span> </a>
                     
                  
                  
              
              </td>
                </tr>
                <thead>
                    <tr>
                        <th>montant credit</th>
                        <th>Devise credit</th>
                        <th>taux </th>
                        <th>montant debit</th>
                        <th>Devise debit</th>
                        <th>taux </th>
                        <th>Date et heure de l'operation </th>

                        
                    </tr>
                    </thead>
                
                @foreach($result2 as $all)
                <tr>
              
            <td>
                
               <span class='account'> 
                    {{$all->montant_credit}} <br><br><br>
                </span> </a>
               
            
            
        
        </td>

        <td>
                
            <span class='account'> 
                 {{$all->curency_credit}} <br><br><br>
             </span> </a>
            
         
         
     
     </td>
     <td>
                
        <span class='account'> 
             {{$all->taux_credit}} <br><br><br>
         </span> </a>
        
     
     
 
 </td>
 <td>
                
    <span class='account'> 
         {{$all->montan_debit}} <br><br><br>
     </span> </a>
    
 
 

</td>
<td>
                
    <span class='account'> 
         {{$all->curency_debit}} <br><br><br>
     </span> </a>
    
 
 

</td>
<td>
                
    <span class='account'> 
         {{$all->taux_debit}} <br><br><br>
     </span> </a>
    

</td>
<td>
                
    <span class='account'> 
         {{$all->updated_at}} <br><br><br>
     </span> </a>

</td>
    </tr>
            @endforeach
            <tbody>
        </table>
    </div>
    <a href={{route('account.id',['id'=>$result3->id])}}>
        <input type="button" value="Retour"  id="btn"> </a>
        <a href={{route('cmt_pdf',['id'=>$result3->id])}}>
            <input type="button" value="telecharger"  id="btn"> </a>
</form>

@endsection
    
