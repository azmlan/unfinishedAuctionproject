<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/4cefc49789.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <style>
    
    #app{
        border: 1px solid silver;
        max-width: 20%;
        height:500px;
        margin-right:0;
        background-color: silver;
        

        
    }
    .profile-container{
        max-width:100%;
         height:100%;
         padding: 0.008em;;
         background-color:silver; 
         
         
    }
    .profile-container a:hover{
background: #cfcfcf;
padding:5px;
    }
    .profile-container ul{
        display: flex;
    justify-content: space-evenly;
    align-items:center;
     
    }
    
    a{
     text-decoration:none;   
    color:#073eb3
    }
    input{
        outline:none
    }
    nav{
        list-style: none;
    }
    ul{
        list-style-type: none;
        
    }
    li{
        
        list-style: none;
    }
    
    </style>
</head>
<body>

            <!-- // Logo  // -->
        <div style="width:50%;  margin:0 auto;">
        <a href="/tvtcauction" class="logo-link"  style="width:100%;">
        <div class="image-container" >
        <img src="/Images/project-logo.png" alt="Logo" class="logo-image"  style="max-width:100%">
        </div>
        </a>
        </div>
        

            <!--// END  Logo  // -->
           
            <!-- nav-bar -->
       

 


            <div>
            @yield('profile-nav')

            </div>

    <div id="app" >
    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" >
              
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div  class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                        
                        <!-- Authentication Links -->
                        @guest
                        
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
                                </li>
                            @endif
                                <br>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <span style="color:#073eb3"> مرحبا</span>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" ><br>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        
        
            
        </main>
    </div>


</body>
</html>
