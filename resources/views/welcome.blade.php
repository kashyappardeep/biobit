<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bio BitCoin</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="{{asset('assets/img1/logo/favicon.png')}}">
   <!--main css-->
   <link rel="stylesheet" href="{{asset('assets/css1/main.css')}}">
</head>

<body>

<!-- Preloader Start Heres -->
<div class="preloader__wrap">
   <div class="preloader__box">
      <div class="robot">
         <img src="{{asset('assets/img1/elements/ponkhi.png')}}" alt="img">
      </div>
   </div>
</div>
<!-- Preloader End Heres -->



<!-- Header top Here -->
<section class="header-section">
   <div class="header-testting-wrap">
      <header class="header">
         <div class="container">
            <div class="header-testting-inner d-flex align-items-center justify-content-between">
               <!-- Logo -->
               <div class="header-item item-left">
                  <div class="logo-menu">
                     <a href="/" class="logo d-xl-block d-none">
                        <img src="{{asset('assets/img1/logo/logo.png')}}" alt="logo">
                     </a>
                     <a href="/" class="logo logo-small d-xl-none">
                      <img src="{{asset('assets/img1/logo/logo.png')}}" alt="logo">
                     </a>
                  </div>
               </div>
               <!-- Menu Start -->
               <div class="header-item">
                  <div class="menu-overlay"></div>
                  <nav class="menu">
                     <!-- Mobile Menu Head -->
                     <div class="mobile-menu-head">
                        <div class="go-back">
                           <i class="material-symbols-outlined">
                           arrow_back_ios
                           </i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                     </div>
                     <!-- Mian Menu -->
                     <ul class="menu-main">
                        <li class="menu-item-has-children">
                           <a href="#" class="menu-mitem d-flex align-items-center">
                              Home 
                             
                           </a>
                         
                        </li>
                        <li class="menu-item-has-children">
                           <a href="#about" class="menu-mitem d-flex align-items-center">
                             About 
                           
                           </a>
                         
                        </li>
                          <li class="menu-item-has-children">
                           <a href="#whychoose" class="menu-mitem d-flex align-items-center">
                             Why Choose 
                             
                           </a>
                           
                        </li>
                      <!--   <li class="menu-item-has-children">
                           <a href="#features" class="menu-mitem d-flex align-items-center">
                              Features 
                            
                           </a>
                         
                        </li> -->
                      
                        <li class="menu-item-has-children">
                           <a href="#roadmap" class="menu-mitem d-flex align-items-center">
                              Roadmap 
                             
                           </a>
                         
                        </li>
                        <!--  <li class="menu-item-has-children">-->
                        <!--   <a href="#contact" class="menu-mitem d-flex align-items-center">-->
                        <!--      Contact -->
                             
                        <!--   </a>-->
                         
                        <!--</li>-->
                      
                     </ul>
                  </nav>
               </div>
               <!-- Menu End -->
               <div class="header-item item-righ d-flex align-items-center justify-content-center">
                  <div class="menu__components">
                    <!--  <a href="javascript:void(0)" class="mode--toggle d-center">
                       <img src="{{asset('assets/img1/moon.png')}}" alt="icon">
                    </a> -->
                    
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="cmn--btn">
                       <span>
                        Dashboard
                       </span>
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="cmn--btn">
                        <span>
                           Signin
                        </span>
                     </a>
                     @if (Route::has('register'))
                     <a href="{{ route('register') }}" class="cmn--btn">
                       <span>
                          Register
                       </span>
                    </a>
                    @endif
                    @endauth
                    @endif
                 </div>
                  <!-- Mobile Menu Tigger -->
                  <div class="mobile-menu-trigger">
                     <span></span>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </div>
</section>
<!-- Header top End -->

<!-- Banner Here -->
<section class="banner__section bannerbg">
   <!--Mask-->
   <div class="banner__bgmask">
      <img src="{{asset('assets/img1/elements/box-element.png')}}" alt="mask">
   </div>
   <!--Mask-->
   <!--Container-->
   <div class="container">
      <div class="banner__wrapper">
         <div class="row g-4  justify-content-between">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="banner__content">
                  <div class="content__box">
                     <span class="d3 mb-0  wow fadeInUp" data-wow-duration="2s">
                        Unleash the
                     </span>
                     <span class="d3 wow fadeInDown" data-wow-duration="4s">
                         potential of <span class="theme">AI</span> and <span class="theme2">machine</span> learning
                     </span>
                     <p class="wow fadeInUp" data-wow-duration="2s">
                        Machine learning algorithms build a model based on sample data, known as training data, in order to make predictions or decisions...
                     </p>
                     <div class="btg__grp wow">
                        <a href="{{ route('login') }}" class="cmn--btn">
                           <span>Get Started</span>
                        </a>
                        <a href="https://www.youtube.com/watch?v=wXNv-x5zVgE" class="play__btn video-btn">
                           <span class="play__icon">
                              <i class="material-symbols-outlined">
                                 play_arrow
                              </i>
                           </span>
                           <span>
                              Watch Intro Video
                           </span>
                        </a>
                     </div>
                 </div>
                  <div class="ai__text">
                     <img src="{{asset('assets/img1/elements/t-element.png')}}" alt="ai">
                  </div>
                  <div class="ai__elements">
                     <img src="{{asset('assets/img1/elements/ai-element.png')}}" alt="ai">
                  </div>
               </div>
            </div>
            <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-8">
               <div class="banner__thumb">
                  <div class="thumb">
                     <img src="{{asset('assets/img1/banner/banner1.png')}}" alt="banner">
                  </div>
                  <div class="rocket__element">
                     <img src="{{asset('assets/img1/elements/rocket-element.png')}}" alt="rocket">
                  </div>
               </div>
            </div>
            <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
         </div>
      </div>
   </div>
   <!--Container-->
   <!--Elements-->
   <div class="ball__element">
      <img src="{{asset('assets/img1/elements/ball-element.png')}}" alt="ball">
   </div>
   <div class="banner__mask">
      <img src="{{asset('assets/img1/elements/shape-element1.png')}}" alt="mask">
   </div>
   <div class="dark__mask d-none">
      <img src="{{asset('assets/img1/elements/banner-shape1-dark.png')}}" alt="mask">
   </div>
   <div class="light__element1">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element2">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element3">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element4">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element5">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <!--Elements-->
</section>
<!-- Banner End -->

<!-- About Here -->
<section class="about__section bg__white pt-120 pb__60" id="about">
   <!--Container-->
   <div class="container">
      <div class="row align-items-center flex-row-reverse">
         <!--about content-->
         <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="about__content">
               <div class="section__header">
                  <h2 class="wow fadeInUp" data-wow-duration="2s">
                     The world's leading AI and machine learning company
                  </h2>
                  <p class="wow fadeInDown" data-wow-duration="2s">
                     There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                  </p>
               </div>
               <ul class="about__chack wow fadeInDown">
                  <li>
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                        Talent Advisory Team
                     </span>
                  </li>
                  <li>
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                        100% Security System
                     </span>
                  </li>
                  <li>
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                        High-Quality Results
                     </span>
                  </li>
                  <li>
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                        24 Hours Supports
                     </span>
                  </li>
               </ul>
               <a href="javascript:void(0);" class="cmn--btn">
                  <span>Read More</span>
               </a>
            </div>
         </div>
         <!--about content-->
         <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
         <!--about thumb-->
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-9 col-sm-9">
            <div class="about__thumb">
               <div class="brain__element">
                  <img src="{{asset('assets/img1/elements/brain-element.png')}}" alt="breain">
               </div>
               <img src="{{asset('assets/img1/about/about1.png')}}" alt="about">
            </div>
         </div>
         <!--about thumb-->
         <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
      </div>
   </div>
   <!--Container-->
   <!--Shape-->
   <div class="about__shape1">
      <img src="{{asset('assets/img1/elements/ashape-elements.png')}}" alt="about">
   </div>
   <!--Shape-->
   <!--element-->
   <div class="light__element1">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element2">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element3">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element4">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element5">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <!--element-->
</section>
<!-- About End -->
<!-- Qualified Here -->
<section class="qualified__section bg__white pt-120 pb-120" id="whychoose">
   <!--container-->
   <div class="container">
      <div class="row align-items-center">
         <!--col-->
         <div class="col-lg-6">
            <div class="qualified__content">
               <div class="section__header wow fadeInUp" data-wow-duration="2s">
                  <h2>
                     Save your time and money by choosing our qualified services
                  </h2>
                  <p>
                     AI (Artificial Intelligence) and ML (Machine Learning) are closely related fieldss that are focused on the development of computer systems that can perform tasks that would normally require human intelligence, such as understanding natural language, recognizing images, making decisions, and solving problems.
                  </p>
               </div>
               <div class="counting__wrap">
                  <div class="counter__items odometer-item">
                     <div class="counter__content">
                        <div class="cont d-flex align-items-center">
                           <span class="odometer" data-odometer-final="2.3">
                              0
                           </span>
                           <span class="plus__icon">
                              k
                           </span>
                           <span class="plus__icon">
                              +
                           </span>
                        </div>
                     </div>
                     <p>Completed Projects</p>
                  </div>
                  <div class="counter__items odometer-item">
                     <div class="counter__content">
                        <div class="cont d-flex align-items-center">
                           <span class="odometer" data-odometer-final="1.5">
                              0
                           </span>
                           <span class="plus__icon">
                              k
                           </span>
                           <span class="plus__icon">
                              +
                           </span>
                        </div>
                     </div>
                     <p>Customer Satisfaction</p>
                  </div>
                  <div class="counter__items odometer-item">
                     <div class="counter__content">
                        <div class="cont d-flex align-items-center">
                           <span class="odometer" data-odometer-final="500">
                              0
                           </span>
                           <span class="plus__icon">
                              +
                           </span>
                        </div>
                     </div>
                     <p>Expert Employees</p>
                  </div> 
               </div>
            </div>
         </div>
         <!--col-->
         <div class="col-lg-1"></div>
         <!--col-->
         <div class="col-lg-4">
            <div class="qualified__thumb">
               <img src="{{asset('assets/img1/about/qualified.png')}}" alt="qualified">
            </div>
         </div>
         <!--col-->
      </div>
   </div>
   <!--container-->
   <!--elements-->
   <div class="light__element1">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element2">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element3">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <!--elements-->
</section>
<!-- Qualified End -->
<!-- Feature Here -->
<section class="feature__section bgsection pt-120 pb-120" id="roadmap">
   <!--container-->
   <div class="container">
      <!--Section header-->
      <div class="section__header section__center pb__60 wow fadeInUp" data-wow-duration="2s">
         <h2>
            Key Services Features
         </h2>
         <p class="pb__32">
            AI is the broader concept of machines being able to carry out tasks in a way that would normally require human intelligence.
         </p>
         <a href="{{ route('login') }}" class="cmn--btn border__btn">
            <span>
               Get Started
            </span>
         </a>
      </div>
      <!--Section header-->
      <div class="row g-5 justify-content-center align-items-center">
         <!--col grid-->
         <div class="col-sm-6 col-xl-4" >
            <div class="feature__component__wrap feature__right__align">
               <div class="feature__items wow fadeInUp" data-wow-duration="1s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/man.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Robotic Automation
                     </h4>
                     <p>
                        Machine learning (ML), a fundamental concept of AI research since...
                     </p>
                  </div>
               </div>
               <div class="feature__items pl__space wow fadeInUp" data-wow-duration="2s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/ai.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Image Processing
                     </h4>
                     <p>
                        Machine learning (ML), a fundamental concept of AI research since...
                     </p>
                  </div>
               </div>
               <div class="feature__items wow fadeInUp" data-wow-duration="2.2s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/cloud.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Al For Cloud Services
                     </h4>
                     <p>
                        Machine learning (ML), a fundamental concept of AI research since...
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!--col grid-->
         <div class="col-8 order-sm-3 order-xl-2 col-xl-4">
            <div class="feature__thumb">
               <img src="{{asset('assets/img1/feature/feature.png')}}" alt="feature">
            </div>
         </div>
         <!--col grid-->
         <div class="col-sm-6 order-sm-2 col-xl-4">
            <div class="feature__component__wrap">
               <div class="feature__items wow fadeInUp" data-wow-duration="2.4s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/machine.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Machine Learning
                     </h4>
                     <p>
                        Machine learning (ML), a fundamental concept of AI research since...
                     </p>
                  </div>
               </div>
               <div class="feature__items pr__space wow fadeInUp" data-wow-duration="2.6s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/virtual.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Virtual Reality
                     </h4>
                     <p>
                        Machine learning (ML), a fundamental concept of AI research since...
                     </p>
                  </div>
               </div>
               <div class="feature__items wow fadeInUp" data-wow-duration="2.8s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/neurology.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Deep Learning
                     </h4>
                     <p>
                        Machine learning (ML), a fundamental concept of AI research since...
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!--col grid-->
      </div>
   </div>
   <!--container-->
   <!--elements-->
   <div class="feature__rocket">
      <img src="{{asset('assets/img1/elements/feature-rocket.png')}}" alt="rocket">
   </div>
   <div class="feature__ai">
      <img src="{{asset('assets/img1/elements/feature-ali.png')}}" alt="rocket">
   </div>
   <div class="light__element1">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element2">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element3">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <div class="light__element4">
      <img src="{{asset('assets/img1/elements/light-elements.png')}}" alt="light">
   </div>
   <!--elements-->
</section>
<!-- Feature End -->
<!--<section class="contact__section bg__white pt-120 pb-120" id="contact">-->
<!--   <div class="container">-->
<!--      <div class="section__header section__center pb__60">-->
<!--         <h2>-->
<!--            Get in touch with us.-->
<!--         </h2>-->
<!--         <p>-->
<!--            Fill up the form and our team will get back to you within 24 hours-->
<!--         </p>-->
<!--      </div>-->
<!--      <div class="row justify-content-center">-->
<!--         <div class="col-lg-8">-->
<!--            <div class="form_area">-->
<!--               <form id="form">-->
<!--                     <div class="row g-4">-->
<!--                        <div class="col-lg-6">-->
<!--                           <div class="form-control">-->
<!--                                 <label for="Name">Name</label>-->
<!--                                 <input type="text" id="Name" placeholder="Enter Your Mane...">-->
<!--                                 <small>Error message</small>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                           <div class="form-control">-->
<!--                                 <label for="semail">Email</label>-->
<!--                                 <input type="email" id="semail" placeholder="Enter Your Email...">-->
<!--                                 <small>Error message</small>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                           <div class="form-control">-->
<!--                                 <label for="phone">Phone</label>-->
<!--                                 <input type="number" id="phone" placeholder="Enter Your Number...">-->
<!--                                 <small>Error message</small>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6">-->
<!--                           <label id="country">Country</label>-->
<!--                           <div class="select-wrapper">-->
<!--                              <select>-->
<!--                                 <option value="1">Country...</option>-->
<!--                                 <option value="1">....</option>-->
<!--                                 <option value="1">....</option>-->
<!--                                 <option value="1">....</option>-->
<!--                                 <option value="1">....</option>-->
<!--                              </select>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-12">-->
<!--                           <div class="form-control">-->
<!--                                  <label for="message">Message</label>-->
<!--                                 <textarea name="message" id="message" cols="10" rows="5" placeholder="Enter Your Message..."></textarea>-->
<!--                                 <small>Error message</small>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                     <div class="submit__btn text-center mt-4">-->
<!--                        <button type="submit" class="cmn--btn">-->
<!--                           <span>-->
<!--                              Send Message-->
<!--                           </span>-->
<!--                        </button>-->
<!--                     </div>-->
<!--                     <div class="thank_you">-->
<!--                        <p>Your Message is successfully send !</p>-->
<!--                     </div>-->
<!--               </form>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<!--Contact Section End-->








<!-- Footer Here -->
<footer class="footer__section">
   <!--shpa-->
   <div class="footer__shape">
      <img src="{{asset('assets/img1/elements/footer-shape.png')}}" alt="img">
   </div>
   <div class="footer__darkshpae">
      <img src="{{asset('assets/img1/elements/footer-shapedark.png')}}" alt="img">
   </div>
   <!--shpa-->
   <div class="container">
      <div class="footer__wrapper">
         <div class="footer__top">
            <div class="row g-5">
               <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4 col-sm-6"></div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <center>  <div class="footer__widget">
                    
                     <ul class="social">
                        <li>
                           <a href="javascript:void(0)" class="social__item">
                              <span class="icon">
                                 <img src="{{asset('assets/img1/svg-icon/facebook.svg')}}" alt="svg">
                              </span>
                           </a>
                        </li>
                        <li>
                           <a href="javascript:void(0)" class="social__item social__itemtwo">
                              <span class="icon">
                                 <img src="{{asset('assets/img1/svg-icon/instagram.svg')}}" alt="svg">
                              </span>
                           </a>
                        </li>
                        <li>
                           <a href="javascript:void(0)" class="social__item social__itemthree">
                              <span class="icon">
                                 <img src="{{asset('assets/img1/svg-icon/twitter.svg')}}" alt="svg">
                              </span>
                           </a>
                        </li>
                        <li>
                           <a href="javascript:void(0)" class="social__item social__itemfour">
                              <span class="icon">
                                 <img src="{{asset('assets/img1/svg-icon/linkedin.svg')}}" alt="svg">
                              </span>
                           </a>
                        </li>
                     </ul>
                  </div></center>
               </div>
              
            
            </div>
         </div>
         <div class="footer__bottom">
            <p>
               Copyright &copy;2024 <a href="javascript:void(0)" class="intellicon">Intellicon</a>. Designed By <a href="https://themeforest.net/user/pixelaxis" class="theme">Pixelaxis</a>
            </p>
         </div>
      </div>
   </div>
   <!--footer mask-->
   <div class="footer__mask">
      <img src="{{asset('assets/img1/elements/box-element.png')}}" alt="mask">
   </div>
   <!--footer mask-->
</footer>
<!-- Footer End -->



   <!--Jquery 3 6 0 Min Js-->
   <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('assets/js1/jquery-3.6.0.min.js')}}"></script>
   <!--Bootstrap bundle Js-->
   <script src="{{asset('assets/js1/bootstrap.bundle.min.js')}}"></script>
   <!--Viewport Jquery Js-->
   <script src="{{asset('assets/js1/viewport.jquery.js')}}"></script>
   <!--Odometer min Js-->
   <script src="{{asset('assets/js1/odometer.min.js')}}"></script>
   <!--Magnifiw Popup Js-->
   <script src="{{asset('assets/js1/jquery.magnific-popup.min.js')}}"></script>
   <!--Wow min Js-->
   <script src="{{asset('assets/js1/wow.min.js')}}"></script>
   <!--Owl carousel min Js-->
   <script src="{{asset('assets/js1/owl.carousel.min.js')}}"></script>
   <!--Prijm Js-->
   <script src="{{asset('assets/js1/prism.js')}}"></script>
   <!--main Js-->
   <script src="{{asset('assets/js1/main.js')}}"></script>
</body>

</html>