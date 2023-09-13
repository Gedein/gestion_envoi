<!doctype html>
<html>
    <div id='head'>
<head class="app_head">
    @stack('styles')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <h3>Estiam</h3> 
</head>
<title> @yield('title')</title>
    </div>
    <div class=" " id="div2" >
        <h1  id="cnt_v"> @yield('h1')</h1>
    </div>
    
<body id='bd'>
    @yield('content')
</body>
<div class="div3">
    <footer>
        <p  class="text-black">copywrit &copy;{{date('Y')}}
        </p>
    </footer>
</div>
</html>
