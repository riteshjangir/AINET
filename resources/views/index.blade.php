@extends('layouts.app1')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>

                
                <!-- Welcome Content -->
                
                <div class="welcome-content h-100" >
                      
                    
                    <div class="container h-100">
                        
                        <div class="row h-100 align-items-center"  >
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                        <h1 style="color:#9900FF;">Join a vibrant community of english language education professionals.

                                            </h1><br>
									
                                            <h1 style="color:#0000FF;">Develop. Together.
                                                </h1>
                                        {{-- <h2 >Uza makes your <br> biz <span>greater</span></h2>
                                        <h5 >We love to create "cool" things on Digital Platforms</h5> --}}
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="/images/l1.gif" alt="" data-animation="slideInTop" data-delay="100ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

           
        </div>
    </section>

<!-- <div class=" ">
    <div class="single-footer-widget mb-80"> -->
        <!-- Widget Title -->
                <!-- <div class="section-heading text-center">
                    <h4>Become&nbsp;&nbsp;&nbsp; A &nbsp;&nbsp;Member </h4>
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;I &nbsp;&nbsp;G&nbsp;&nbsp; N&nbsp;&nbsp; U&nbsp;&nbsp; P&nbsp;&nbsp;</h4>
   
    </div>
</div> -->

                  {{-- Tabs  Start--}}

<script src="https://www.w3schools.com/lib/w3.js"></script>


<script language='javascript' type='text/javascript'>
    function show_hide(id2hide, id2show) {
        document.getElementById(id2hide).style.visibility = 'hidden';
        document.getElementById(id2show).style.visibility = 'visible';
    }

</script>

<style>
    #myP {
        display: none;
    }
    .nav-link{
        color: #DF068C;
    }
    
</style>
<!-- ***** Breadcrumb Area Start ***** -->

<div class="container" >
    <div class="row justify-content-center mt-5 mb-5" >
        <div class="col-md-8">
          
            <div class="card w3-border-orange" >
                <div class="card-header w3-orange w3-border-orange" >{{ __('') }}</div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#new">Become A Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#renew">Member Login</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-3">
                    <div class="tab-pane container fade" id="new">
                        <!-- Nav tabs -->
                        {{-- <ul class="nav nav-tabs">
                            <li class="nav-item" id="indiaTab">
                                <a class="nav-link" data-toggle="tab" href="#india">India</a>
                            </li>
                            <li class="nav-item" id="overTab">
                                <a class="nav-link" data-toggle="tab" href="#over">Overseas</a>
                            </li>
                        </ul> --}}
                        <p> AINET offers  number of membership privileges with different membership types.
                            <a href='/register'>more details</a>
                        </p>

                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane container" id="india">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#india_indi">Individual</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#india_inst">Institition</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane container fade" id="india_indi">
                                    
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="renew">
                            <div class="container">
                                    <div class="row justify-content-center mt-5 mb-5">
                                        <div class="col-md-8">
                                            <div class="card w3-border-orange">
                                                <div class="card-header w3-orange w3-border-orange">{{ __('Login') }}</div>
                                
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                
                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                
                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                
                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row">
                                                            <div class="col-md-6 offset-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                                                    <label class="form-check-label" for="remember">
                                                                        {{ __('Remember Me') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-8 offset-md-4">
                                                                <button type="submit" class="btn w3-orange" style="background-color:#DF068C;padding:0px 10px 10px 10px;color:white;">
                                                                    {{ __('Login') }}
                                                                </button>
                                
                                                                @if (Route::has('password.request'))
                                                                    <a class="btn w3-text-orange" href="{{ route('password.request') }}">                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <script>
        $(document).ready(function(){
            $('.nav-tabs a[href="#india"]').click(function(){
                // alert('on');
                $("#overTab").css('display','none');
                $(this).tab("show")
            });

            $('.nav-tabs a[href="#over"]').click(function(){
                $("#indiaTab").css('display','none');
                $(this).tab("show")
            });
        });
    </script>

                  {{-- Tabs Stop --}}

<div class="col-12">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                                <div class="section-heading text-center">
                                    <h2>Follow us</h2><br>
                        <div class="footer-social-info">
                            <a href="https://www.facebook.com/ainetindia/" class="facebook" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>fb.com/ainetindia&nbsp;&nbsp;
                            <a href="https://twitter.com/ainetindia" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>@ainetindia&nbsp;&nbsp;
                            {{-- <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a> --}}
                            <img src="images/ins.png"/>@theainet&nbsp;&nbsp;

                            <a href="https://www.instagram.com/ainet_india/" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" style="color:DF068C"></i></a>ainet_india&nbsp;&nbsp;
                            <a href="https://www.youtube.com/channel/UCHaFX92EaJzFL7m7fPD591A" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>AINET India&nbsp;&nbsp;
                            <img src="images/tele.png"/>@theainet&nbsp;&nbsp;
                            <img src="images/pinte.png"/>th3wk
                            <p><a href="https://www.youtube.com/channel/UCHaFX92EaJzFL7m7fPD591A">@theainet</a></p>
                            <i class="fab fa-instagram"></i>
                            <a href="https://www.facebook.com/ainetindia/" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook">                            <i class="fab fa-instagram"></i>
                            </a>fb.com/ainetindia&nbsp;&nbsp;


                        </div>
                    </div>
                </div>
    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        {{-- <img src="images/POSTER 3.png" alt=""> --}}
                        <!-- Video Area -->
                        {{-- <div class="uza-video-area hi-icon-effect-8">
                            <a href="#" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div> --}}
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>
                                {{-- 5th AINET International Conference , Hyderabad</h2> --}}
                        {{-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna
                            liquyam erat.</p> --}}
                        {{-- <a href="#" class="btn uza-btn btn-2 mt-4" style="font-size: 20px"><b>Start Exploring</b></a> --}}

                    </div>
                </div>
            </div>
        </div>

   
    <!-- ***** Services Area End ***** --> 

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80" >
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center" style=" margin-top: -90px;">
                        <h2>AINET INITIATIVES</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/ CONNET.JPG" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>AINET CONNECT</h4>
						<p>Stronger Networking for Stronger Association</p>
      
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
					
                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/TRI.JPG" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>AINET TRI</h4>
       <p>Exploring Classrooms, Empowering Teachers</p>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                   
                    


                </div>
            </div>
        </div>

        <!-- Client Feedback Area Start -->
        <div class="clients-feedback-area mt-80 section-padding-80 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
  <div class="section-heading text-center">
                        <h2> Testimonials</h2>
                    </div>
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="./img/bg-img/T1.JPG" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>"AINET has always provided a huge platform for the professional development of hard working teachers. It has constantly supported all its associated teachers to grow to greater heights. For me, it is the first and the best organization to to boost my research skills. It has done everything for me that parents do for the bright future of a child!"</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Darshana Bapat, Ratnagiri <span>- </span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="./img/bg-img/T2.JPG" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“My association with AINET has been an utter joy. As an illustration I have gone from being a teacher to becoming a teacher researcher and a mentor in no more than a year. AINET's work is very structured, clear, logical and effective when it comes to organising any workshop or conference. AINET has played a major role in my CPD.”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Renu Dhotre, Mumbai <span></span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>
                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                    <!-- Testimonial Thumbnail -->
                                    <div class="testimonial-thumbnail">
                                        <img src="./img/bg-img/T3.JPG" alt="">
                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <h4>“The support AINET gave me and the knwoledge they provided me with really transformed the way in which I run my teacher club in Latur and ensure that I have time to devote to what matters most. AINET conferences helped me improve my strategic planning and project management skills. Truly life changing!”</h4>
                                        <!-- Ratings -->
                                        <div class="ratings">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <!-- Author Info -->
                                        <div class="author-info">
                                            <h5>Prashant Mugale, Latur <span></span></h5>
                                        </div>
                                        <!-- Quote Icon -->
                                        <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                    </div>
                                </div>
                                <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                    <!-- Testimonial Thumbnail -->
                                    <div class="testimonial-thumbnail">
                                        <img src="./img/bg-img/T4.JPG" alt="">
                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <h4>“AINET's management system and AINET Team's work with our teacher leaders to customize these systems to their own personal styles has significantly improved the quality of teachers in my ATM teachers' group. Teachers feel more organized and more productive, using practices learned from AINET projects.”</h4>
                                        <!-- Ratings -->
                                        <div class="ratings">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <!-- Author Info -->
                                        <div class="author-info">
                                            <h5>Vikram Adsul, Ahmednagar <span></span></h5>
                                        </div>
                                        <!-- Quote Icon -->
                                        <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                    </div>
                                </div>
                                <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                    <!-- Testimonial Thumbnail -->
                                    <div class="testimonial-thumbnail">
                                        <img src="./img/bg-img/T5.JPG" alt="">
                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <h4>“AINET's Teacher Research Initiative armed me with practical tools and strategies that have made an immediate impact on the overall effectiveness of my thinking and teaching. Working with AINET engaged me in a process of learning-unlearning and relearning and rediscover myself. It was not only highly effective but also highly enjoyable!”</h4>
                                        <!-- Ratings -->
                                        <div class="ratings">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <!-- Author Info -->
                                        <div class="author-info">
                                            <h5>Rohini Deshmukh Sankpal, Kolhapur <span></span></h5>
                                        </div>
                                        <!-- Quote Icon -->
                                        <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                    </div>
                                </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="./img/bg-img/T6.JPG" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“I honestly can’t explain how thankful I am. This really opened my eyes to actually being able to become a reflective practitioner..”</h4>
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Dr. Bhavna Rai, Bhandara <span></span></h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Feedback Area End -->
         <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
            <div class="container">
                <div class="row">
                    <!-- Section Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>AINET  Gallery</h2> 
                            {{-- <p>We stay on top of our industry by being experts in yours.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="container-fluid">
                <div class="row">
                    <!-- Portfolio Slides -->
                    <div class="portfolio-sildes owl-carousel">
    
                        <!-- Single Portfolio Slide -->
                        <div class="single-portfolio-slide">
                            <img src="/images/s3.jpg" alt="">
                            <!-- Overlay Effect -->
                            <div class="overlay-effect">
                                {{-- <h4>Digital Marketing</h4> --}}
                                {{-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p> --}}
                            </div>
                            <!-- View More -->
                            <div class="view-more-btn">
                                <a href="#"><i class="arrow_right"></i></a>
                            </div>
                        </div>
    
                        <!-- Single Portfolio Slide -->
                        <div class="single-portfolio-slide">
                            <img src="/images/s4.jpg" alt="">
                            <!-- Overlay Effect -->
                            <div class="overlay-effect">
                                {{-- <h4>Digital Marketing</h4> --}}
                                {{-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p> --}}
                            </div>
                            <!-- View More -->
                            <div class="view-more-btn">
                                <a href="#"><i class="arrow_right"></i></a>
                            </div>
                        </div>
    
                        <!-- Single Portfolio Slide -->
                        <div class="single-portfolio-slide">
                            <img src="/images/s5.jpg" alt="">
                            <!-- Overlay Effect -->
                            <div class="overlay-effect">
                                {{-- <h4>Digital Marketing</h4> --}}
                                {{-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p> --}}
                            </div>
                            <!-- View More -->
                            <div class="view-more-btn">
                                <a href="#"><i class="arrow_right"></i></a>
                            </div>
                        </div>
    
                        
    
                    </div>
                </div>
            </div>
    </section>

        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="./img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->
    

    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">
        <!-- Background Curve -->
        <div class="blog-bg-curve">
            <img src="./img/core-img/curve-4.png" alt="">
        </div>

    

    @endsection


    