<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('/css/homestyle.css')}}" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>

    <section>

    
        
        <header>

        

            <a href="#" class="logo">Steth</a>
            <div class="toggle" onclick="menuToggle();"></div>

            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>


        </header>
    
        <div class="glass"></div>
        <div class="content">
            <h2>Hapiness is..<br><span>Healthfull Life</span></h2>
    
            <h2 class="h2">ආරෝග්‍යා පරමා ලාබා</h2>
        </div>
        <video src="/images/production ID_4444268.mp4 " autoplay muted loop></video>
    
        <div class="navigation">
            <li style="--i:1;"><a href="#">Home</a></li>
            <li style="--i:2;"><a href="#">How it works</a></li>
            <li style="--i:3;"><a href="#">About Us</a></li>
            <li style="--i:4;"><a href="#">Contact Us</a></li>
    
        </div>
    
        </section>
    
    
        <script type="text/javascript">
            function menuToggle(){
             const toggleMenu = document.querySelector('.toggle');
             const  section= document.querySelector('section');
             toggleMenu.classList.toggle('active');   
             section   .classList.toggle('active');   
            }
    
        </script>

        
    </body>
</html>
