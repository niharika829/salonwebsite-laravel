@extends('layouts.app')
<link href="{{ asset('/css/home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('./imagehover.css-master/css/imagehover.min.css')}}">
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide mt-0" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="carousel-item active img-container">
          <img class="d-block w-100" src="./images/11.jpg" alt="First slide">
           <div class="carousel-content">
              <h1 class="display-3 d-none d-md-block">While here, it’s your<br>time to be pampered!</h1> 
              <h3 class="mt-4 tag">Providing expert skin care advice & beauty services using<br>natural products to cater for any skin</h3>    
           </div> 
        </div>
          <div class="carousel-item img-container">
            <img class="d-block w-100" src="./images/1.jpg" alt="Second slide">
            <div class="carousel-content">
              <h1 class="display-3 d-none d-md-block">Let your hair do<br>the talking!</h1> 
              <h3 class="mt-4 tag">Providing expert skin care advice & beauty services using<br>natural products to cater for any skin</h3>        
            </div>       
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/22.jpg" alt="Third slide">
            <div class="carousel-content">
              <h1 class="display-3 d-none d-md-block">Wake up and smell<br>the beauty in you!</h1>
              <h3 class="mt-4 tag">Providing expert skin care advice & beauty services using<br>natural products to cater for any skin</h3>         
            </div>        
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/3.jpg" alt="Third slide">
            <div class="carousel-content">
              <h1 class="display-3 d-none d-md-block">Timeless Charm. Timeless<br>spark!</h1>     
              <h3 class="mt-4 tag">Providing expert skin care advice & beauty services using<br>natural products to cater for any skin</h3>                     
            </div>      
          </div>
        </div>
        <!-- Left and Right controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row" id="about">
      <div class="col-md-8 offset-md-2">
        <h1 class="name text-center mt-3 mb-0">Salon</u></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2 mt-1">
        <p class="aboutInfo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, quos quod laborum aliquam nulla voluptatem 
          incidunt laboriosam enim aspernatur nobis maxime. Officia, repudiandae dolor. Accusantium velit, doloribus eveniet illum 
          possimus repudiandae quas obcaecati atque eos vel ducimus nobis ipsam? Eaque dolore, cumque ullam voluptates quaerat facere 
          id quod impedit temporibus dolor autem, dignissimos commodi reiciendis deserunt! Sequi porro dolor distinctio numquam 
          </p>
      </div>
    </div>

    <div class="row" style="height: 40px;"><div class="col-12"><hr></div></div>

    <div class="container" id="services">
      <h3 style="font-size: 80px; font-family: 'Berkshire Swash', cursive;" class="text-center">Our Outdoor Services</h3>
      <a href="/record" style="font-size: 40px;">Click here to Get them!</a>
      <div class="row">
        <div class="col-3 text-center">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="images/a.jpg" style="height:300px;">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="images/b.jpg" style="height:300px;">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="images/c.jpg" style="height:300px;">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="images/d.jpg" style="height:300px;">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-3 text-center">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="images/team1.jpg" style="height:300px;">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
        </div>
        <div class="col-3 text-center">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="images/team2.jpg" style="height:300px;">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
      </div>
      <div class="col-3 text-center">
        <figure class="imghvr-fold-down" style="background-color: black;">
          <img src="images/team3.jpg" style="height:300px;">
          <figcaption>Lorem ipsum dolor sit amet.</figcaption>
        </figure>
      </div>
      <div class="col-3 text-center">
        <figure class="imghvr-fold-down" style="background-color: black;">
          <img src="images/team4.jpg" style="height:300px;">
          <figcaption>Lorem ipsum dolor sit amet.</figcaption>
        </figure>
      </div>
    </div>

    <div class="row" style="height: 40px;"><div class="col-12"><hr></div></div>

    <div class="container" id="packages">
      <div class="row">
        <div class="col-12 text-center">
          <p style="font-size: 80px; font-family: 'Berkshire Swash', cursive;" class="text-center">Packages Offered</p>
          <p style="font-family: 'Dancing Script', cursive; font-size:20px" class="mt-0">Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty and skin care services will suit every beauty need.</p>
        </div> 
      </div>
      <div class="row">
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body" style="background-color:pink;">
              <h5 class="card-title">Basic-> $100</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ipsam?</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:pink;">Facial</li>
              <li class="list-group-item" style="background-color:pink;">Nail Art</li>
              <li class="list-group-item" style="background-color:pink;">Hair</li>
            </ul>
            <div class="card-body" style="background-color:pink;">
              <a href="/record" class="card-link">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body" style="background-color:lightyellow;">
              <h5 class="card-title">Gold-> $150</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, deserunt?</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:lightyellow;">Facial</li>
              <li class="list-group-item" style="background-color:lightyellow;">Nail Art</li>
              <li class="list-group-item" style="background-color:lightyellow;">Hair</li>
            </ul>
            <div class="card-body" style="background-color:lightyellow;">
              <a href="/record" class="card-link">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body" style="background-color:lightblue;">
              <h5 class="card-title">Diamond-> $200</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, natus.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:lightblue;">Facial</li>
              <li class="list-group-item" style="background-color:lightblue;">Nail Art</li>
              <li class="list-group-item" style="background-color:lightblue;">Hair</li>
            </ul>
            <div class="card-body" style="background-color:lightblue;">
              <a href="/record" class="card-link">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body" style="background-color:lightgreen;">
              <h5 class="card-title">Platinum-> $300</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, magnam.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:lightgreen;">Facial</li>
              <li class="list-group-item" style="background-color:lightgreen;">Nail Art</li>
              <li class="list-group-item" style="background-color:lightgreen;">Hair</li>
            </ul>
            <div class="card-body" style="background-color:lightgreen;">
              <a href="/record" class="card-link">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="height: 80px;"><div class="col-12"><hr></div></div>

    <div id="parallax" style="background-color:grey;">
      <div class="row">
        <div class="col-12 display-2 text-center text-warning text-bold">
          <p style="font-size: 80px; font-family: 'Berkshire Swash', cursive;">About us</p>
          <p style="font-family: Times New Roman; font-size:25px; color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ducimus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ducimus!</p>

        </div>
      </div>
    </div>

    <div class="row" style="height: 80px;"><div class="col-12"><hr></div></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p class="display-2 text-bold text-center" style="font-family: 'Berkshire Swash', cursive;">OUR PROFESSIONALS</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="./images/t4.jpg" alt="" data-aos="slide-right">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
          <p class="text-center" style="font-size: 30px; color: goldenrod; font-weight: bold; font-family: 'Times New Roman', Times, serif;">WILSON</p>
        </div>
        <div class="col-sm-3">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="./images/t3.jpg" alt="" data-aos="slide-right">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
          <p class="text-center" style="font-size: 30px; color: goldenrod; font-weight: bold; font-family: 'Times New Roman', Times, serif;">VECTORIA</p>
        </div>
        <div class="col-sm-3">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="./images/t2.jpg" alt="" data-aos="slide-right">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
          <p class="text-center" style="font-size: 30px; color: goldenrod; font-weight: bold; font-family: 'Times New Roman', Times, serif;">MR.JAZZ</p>
        </div>
        <div class="col-sm-3">
          <figure class="imghvr-fold-down" style="background-color: black;">
            <img src="./images/t1.jpg" alt="" data-aos="slide-right">
            <figcaption>Lorem ipsum dolor sit amet.</figcaption>
          </figure>
          <p class="text-center" style="font-size: 30px; color: goldenrod; font-weight: bold; font-family: 'Times New Roman', Times, serif;">ROSIE</p>
        </div>
      </div>
    </div>

    <hr>

    <div class="testimonials" id="testi">
      <div class="row">
        <div class="col-sm-6 t">
          <img src="./images/bg.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-sm-6">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p style="font-size: 80px; font-family: 'Berkshire Swash', cursive;" class="display-3 mt-5 text-center">Testimonials</p>
                <p class="testi text-center"><img src="./images/left-quotes.png" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur cum eos
                              <br> repudiandae doloribus voluptatem molestiae quas atque quo animi. <img src="./images/right-quotes.png" alt=""></p>
                <img src="./images/team2.jpg" alt="" class="rounded-circle mx-auto d-block">
                <h3 class="text-center mt-4">--Dennis Carry</h3>
              </div>
              <div class="carousel-item">
                <p style="font-size: 80px; font-family: 'Berkshire Swash', cursive;" class="display-3 mt-5 text-center">Testimonials</p>
                <p class="testi text-center"><img src="./images/left-quotes.png" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur cum eos 
                            <br>repudiandae doloribus voluptatem molestiae quas atque quo animi. <img src="./images/right-quotes.png" alt=""></p>
                <img src="./images/team1.jpg" alt="" class="rounded-circle mx-auto d-block">
                <h3 class="text-center mt-4">--Martin Joseph</h3>
              </div>
              <div class="carousel-item">
                <p style="font-size: 80px; font-family: 'Berkshire Swash', cursive;" class="display-3 mt-5 text-center">Testimonials</p>
                <p class="testi text-center"><img src="./images/left-quotes.png" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur cum eos
                              <br> repudiandae doloribus voluptatem molestiae quas atque quo animi. <img src="./images/right-quotes.png" alt=""></p>
                <img src="./images/Capture.PNG" alt="" class="rounded-circle mx-auto d-block">
                <h3 class="text-center mt-4">--Joey Curvie</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer" style="height: 500px;" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="text-center text-bold display-3 mt-3" style="color: black; font-family: 'Lobster Two', cursive;" data-aos="zoom-in">The Patnitop Inn</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="text-center text-bold" style="color: yellow; font-size: 25px; font-family:Dancing Script, cursive;">Where to find Us?</p>
          </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-2x"></i></a>
                <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-2x"></i></a>
                <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-2x"></i></a>
                <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
                <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-2x"></i></a>
                <a class="btn btn-social-icon e" href="mailto:priyanshigupta997@gmail.com"><i class="fa fa-envelope-o fa-2x"></i></a>
            </div>
        </div>
      </div>
    </div>
@endsection
