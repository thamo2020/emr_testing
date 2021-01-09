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

        <h2 class="subhead">How it works</h2>

        <section class="infor">

           

        <div class="container">
        <div class="hexagen">
            <div class="shape">
            <img src="images/colorlib-registration-form-26.jpg">
                <div class="content1">
                    <div>
                        <h2>Create an Account</h2>
                        <p>jkepiquegpsdddddddd ler lkjdfuief jgfiyqet ljhfoqey gfo87et sjkbjab jfoe7tr qjoq7eroebr liufyo87r kusf87qter r </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="hexagen">
            <div class="shape">
                <img src="images/colorlib-registration-form-26.jpg">
                <div class="content1">
                    <div>
                        <h2>Upload medical records</h2>
                        <p>jkepiquegpsdddddddd ler lkjdfuief jgfiyqet ljhfoqey gfo87et sjkbjab jfoe7tr qjoq7eroebr liufyo87r kusf87qter r </p>
                        </div>
                </div>
                
            </div>
        </div>
        
        <div class="hexagen">
            <div class="shape">
            <img src="images/colorlib-registration-form-26.jpg">
                <div class="content1">
                    <div>
                        <h2>view medical records</h2>
                        <p>jkepiquegpsdddddddd ler lkjdfuief jgfiyqet ljhfoqey gfo87et sjkbjab jfoe7tr qjoq7eroebr liufyo87r kusf87qter r </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
 

        </section>

        <h2 class="subhead">About Us</h2>      
<section class="about-us">

            <div class="s-container">
                <img src="images/download-icons8 (1).png" alt="astywtywet" >
            </div>

            <div class="s-container">
                <p>ajhlue jfege furgjw jwyiwr mir fjshflue lqjkehrliue qlfliuef ekjfliuegf ljfhliue ljfhlefh jfheuebe flehfebfb <br>rglhrlrr
            dqkh;qklwet'lqkejtfqklwenfdnmnglkhrg'qlwkeng'qklg'hg'ihg'khg'khg</p>
                </div>
</section> 



<section class="contact-us">
<h2 class="subhead">Contact Us</h2> 
    <div class="m-container">
        <div class="input1">
            we are ajhdf;is_readable
            contact us onlfe
        </div>

        <div class="input1">
            we are ajhdf;is_readable
            contact us onlfe
        </div>

        <div class="input1">
            we are ajhdf;is_readable
            contact us onlfe
        </div>
    </div>
</section>
    </body>
</html>
