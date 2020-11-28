<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Porsche03/css/homepage.css') }}">

    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> --}}
    <title>@yield('title')</title>
</head>
<body>
    <div class="navigation">
        <div class="navigation_left">
            <a href="#">Porsche.ca</a>
            {{-- <a href="{{ route('admin') }}">My Porsche</a> --}}
        </div>
        <div class="navigation_right">
        <a href="{{ route('admin') }}">Login & Registration</a>
        </div>
    </div>
    <div class="logo">
        <img src="https://files.porsche.com/filestore/image/multimedia/none/875d5e3d-6763-47fe-bc52-809142d53274/svg/9bee0427-35f0-11ea-80c6-005056bbdc38/porsche-svg.svg" width="130px" height="80px">
        <hr>
    </div>
    @include('FrontEnd.includes.menu')
    @yield('content')
   






    <!-- <div class="video">
        <div class="autoplay">
            <iframe title="YouTube video player" width="1380" height="770" background="white" src="../img/homepage/y2mate.com - The new Panamera Turbo and Panamera 4S in motion._1080p.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
    </div> -->
    <!-- <div class="box_view">
        <a href="#"> View more Panamera...</a>
    </div> -->
    <div class="footer">
        <div>
            <ul>
                <li>Build & Find</li>
                <li>Build your Porsche</li>
                <li>Find a Porsche Centre</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Online Services</li>
                <li>Sign up for News</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Behind the Scenes</li>
                <li>Motorsport And Events</li>
                <li>Porsche Classic</li>
                <li>Porsche Museum</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Porsche Company</li>
                <li>At a Glance</li>
                <li>Jobs and Career</li>
                <li>Contact and Information</li>
                <li>Christophorus - The Porsche Magazine</li>
            </ul>
        </div>
    </div>
    <script src="{{ asset('Porsche03/jquery-3.5.0.js') }}"></script>
   <script>
     $(()=>{

      $('.next').click(function(){
        changeImage('next');
      })

      $('.prev').click(function(){
        changeImage('prev');
      })

     })

     function changeImage(type){
      let imgSelectVisible = $('img.slide-item:visible');
      let imgVisible = parseInt(imgSelectVisible.attr('number'));
      let eqNumber = type === 'next' ? imgVisible + 1 : imgVisible - 1;

      if (eqNumber >= $('.slide-item').length){
          eqNumber = 0
      }
  
      $('img.slide-item').eq(eqNumber).fadeIn()

      imgSelectVisible.fadeOut();
      }
      setInterval(changeImage,2500)
      
   </script>
</body>
</html>