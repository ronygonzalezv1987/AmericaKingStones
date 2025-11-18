<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="a30abb9b4987e089">
    {{--  Esta meta carga los styles --}}
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <title>{{ isset($title) ? $title : 'AmericaKingStones' }}</title>
    <meta name="description" content="{{ isset($description) ? $description : 'Retail granite,marble and quartz' }}">
    <meta name="keyword" content="{{ isset($keywords) ? $keywords : 'americakingstones' }}">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" type="text/js"> --}}


    <!--  @if (parse_url(config('app.url'), PHP_URL_SCHEME) === 'https')
<link href="{{ secure_asset('css/frontend/app.css') }}" rel="stylesheet">
            <script src="{{ secure_asset('js/frontend/app.js') }}" defer></script>
@else
<link href="{{ asset('css/frontend/app.css') }}" rel="stylesheet">
            <script src="{{ asset('js/frontend/app.js') }}" defer></script>
@endif;
  -->   
  {{-- @vite(['resources/sass/frontend/app.scss', 'resources/css/frontend/app.css', 'resources/js/frontend/app.js', 'resources/sass/backend/app.scss', 'resources/css/backend/app.css', 'resources/js/backend/app.js', 'resources/js/global/app.js']) --}}
  @vite(['resources/scss/frontend/app.scss', 'resources/js/frontend/app.js', 'resources/scss/backend/app.scss', 'resources/js/backend/app.js','resources/scss/global/app.js','resources/js/global/app.js'])
</head>

<body>
    <div id="app">
        <section class="welcome" style="background-image: url('{{ asset('images/background-welcome.jpg')}}');  ">
         <header id="header" role="banner">  
            @include('frontend.layouts.nav')
         </header>
       
            <div class="text-welcome text-center" style="margin: 5.5rem">
                <p class="h5" style="color: whitesmoke;">MARBLE,GRANITE & QUARTZ COMPANY </p>
                 <h1 class="display-4 mb-3" style="color: whitesmoke;">BUILD YOUR NEXT KITCHEN WITH US</h1>
           
                 <a href="#" class="btn btn-primary btn-lg">CREATE YOUR PROYECT</a>

             </div>
        
        </section>    

            <div class="container-fluid full-height main-content ">
                <div class="row full-height">
                    <div class="col-12">

                        @yield('content')
                    </div>
                </div>
            </div>
        
        @include('frontend.layouts.footer')
      
</body>

</html>
