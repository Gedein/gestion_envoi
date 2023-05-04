@push('styles')
<link href="{{asset('css/accueil.css')}}" rel="stylesheet">
          @endpush
@extends('layout')


 
@section('title')
Accueil
          @endsection
 

@section('content')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

           
                   @guest
                       @if (Route::has('login'))
                     
                       @endif

                       @if (Route::has('register'))
                           
                       @endif
                   @else
                   
                           

                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" >
                               <a class="dropdown-item" href="{{ route('home') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                 <input type="button" id="logout" value="deconnexion">
                                   
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>
                           </div>
                     
                   @endguest
               </ul>
           </div>
       </div>
   </nav>

   <main class="py-4">
      
   </main>
</div>
<h1  id="ac"> Accuiel</h1>
<div class="line-1"> </div>

        
        <div id='div1'>
        <img src="{{asset('/image/ajout_cmpt.png')}}" class='image'>
        <a href="{{route('ajouter')}}">
         <h4  id="text">  Ajouter un compte </h4>
      </a>
            </div>
         



        <div  id='div4'>
         <img src="{{asset('/image/gerer.png')}}" class='image'>
         <a href="{{route('account.show')}}">
         <h4  id="text"> Gérer les comptes</h4>
      </a>

            </div>
       


          
        <div  id='div5'>
           <img src="{{asset('/image/debit.png')}}" class='image'>
           <a href="{{route('allfordebit')}}"> 
        <h4  id="text"> Débiter un compte</h5>
        </a>
            </div>
        


            
        <div  id='div6'>
           <img src="{{asset('/image/credit.png')}}" class='image'>
           <a href="{{route('allforcredit')}}"> 
           <h4  id="text">Crédité un compte</h4>
         </a>
            </div>
       

            


        <div  id='div7'>
           <img src="{{asset('/image/generer.png')}}" class='image'>
      
           <a href="{{route('rapport')}}"> 
           
            <h4 id="text">Génerer un rapport</h4>
         </a>
         </div>
      


@endsection