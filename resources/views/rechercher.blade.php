@push('styles')
<link href="{{asset('css/recherche.css')}}" rel="stylesheet">
@endpush
@extends('layout')
@section('title')
comptes
@endsection
@section('h1')

@endsection
@section('content')

<form  align="center" method="GET" action="{{route('account.show')}}"  class="fm">
    <input type="text" name='recherche' placeholder="Chercher un compte" class="shearch">
<button type="submit" class='image' value="chercher"> </button>
    <h2>Tout les comptes</h2>
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
            
                @if ( $account->count()==0)
   
                @foreach($allacc as $all)
                <tr>
                <td>
                
                <a href={{route('account.id',['id'=>$all->id])}}><span class='account'> 
                    {{$all->nom}} <br><br><br>
                </span> </a>
                </td>
               

                <td>
                
                   <span class='account'> 
                        {{$all->prenom}} <br><br><br>
                    </span> </a>
                   
                
                
            
            </td>
            <td>
                
               <span class='account'> 
                    {{$all->montant}} FCFA<br><br><br>
                </span> </a>
               
            
            
        
        </td>
    </tr>
            @endforeach
            @endif

            @if ( $account->count()>0)
            @foreach($account as $accounts)

<tr>
                <td>
                
                <a href={{route('account.id',['id'=>$accounts->id])}}><span class='account'> 
                    {{$accounts->nom}} <br><br><br>
                </span> </a>
                </td>
               

                <td>
                
                   <span class='account'> 
                        {{$accounts->prenom}} <br><br><br>
                    </span> </a>
                   
                
                
            
            </td>
            <td>
                
               <span class='account'> 
                    {{$accounts->montant}} FCFA<br><br><br>
                </span> </a>
               
            
            
        
        </td>
    </tr>
            @endforeach
    @endif
            
            <tbody>
        </table>
    </div>

</form>

@endsection