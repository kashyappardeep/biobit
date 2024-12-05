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
                        potential of <span class="theme2"> Blockchain and Smart Contract</span>
                     </span>
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
                     About BioBitcoin
                  </h2>
                  <p class="wow fadeInDown" data-wow-duration="2s">
                     BioBitcoin is a cutting-edge cryptocurrency token developed on the Binance Smart Chain (BSC),
                     combining the efficiency of blockchain technology with innovative financial opportunities. With
                     a limited total supply of just 210,000 tokens, BioBitcoin is designed to be a scarce and
                     valuable digital asset, making it an attractive option for crypto enthusiasts and investors
                     alike.
                  </p>
               </div>

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
                     Why Choose BioBitcoin?
                  </h2>
                  <p>
                     Security First: Built on the robust infrastructure of the Binance Smart Chain, ensuring safety
                     and reliability.
                     Passive Income: Our staking plan empowers users to grow their holdings effortlessly.
                     Community-Focused: We believe in building a strong and inclusive community of users who can
                     benefit together.
                  </p>
                  <h2>
                     How to Get Started
                  </h2>
                  <p>
                     <strong>Acquire BioBitcoin</strong>
                     Purchase BioBitcoin tokens from our website on the Binance Smart Chain.

                  </p>

                  <p>
                     <strong>Participate in Staking</strong>
                     Connect your wallet to our staking platform, choose your plan, and start earning rewards today.

                  </p>
                  <p>
                     <strong>Join the Community</strong>
                     Stay updated and connected by joining our official channels and becoming a part of the growing
                     BioBitcoin family.

                  </p>
                  <p>Join Us in Shaping the Future of Finance
                     BioBitcoin is more than just a token; it’s a gateway to financial independence and innovation.
                     Whether you're a seasoned investor or a newcomer, our platform is designed to help you grow.</p>
               </div>
               <!--<div class="counting__wrap">-->
               <!--   <div class="counter__items odometer-item">-->
               <!--      <div class="counter__content">-->
               <!--         <div class="cont d-flex align-items-center">-->
               <!--            <span class="odometer" data-odometer-final="2.3">-->
               <!--               0-->
               <!--            </span>-->
               <!--            <span class="plus__icon">-->
               <!--               k-->
               <!--            </span>-->
               <!--            <span class="plus__icon">-->
               <!--               +-->
               <!--            </span>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <p>Completed Projects</p>-->
               <!--   </div>-->
               <!--   <div class="counter__items odometer-item">-->
               <!--      <div class="counter__content">-->
               <!--         <div class="cont d-flex align-items-center">-->
               <!--            <span class="odometer" data-odometer-final="1.5">-->
               <!--               0-->
               <!--            </span>-->
               <!--            <span class="plus__icon">-->
               <!--               k-->
               <!--            </span>-->
               <!--            <span class="plus__icon">-->
               <!--               +-->
               <!--            </span>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <p>Customer Satisfaction</p>-->
               <!--   </div>-->
               <!--   <div class="counter__items odometer-item">-->
               <!--      <div class="counter__content">-->
               <!--         <div class="cont d-flex align-items-center">-->
               <!--            <span class="odometer" data-odometer-final="500">-->
               <!--               0-->
               <!--            </span>-->
               <!--            <span class="plus__icon">-->
               <!--               +-->
               <!--            </span>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--      <p>Expert Employees</p>-->
               <!--   </div> -->
               <!--</div>-->
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
            Built on Binance Smart Chain Fast, secure, and cost-efficient transactions. By leveraging the Binance Smart Chain, BioBitcoin ensures optimal performance and scalability for all users.</p>
         {{-- <a href="{{ route('login') }}" class="cmn--btn border__btn">
            <span>
               Get Started
            </span>
         </a> --}}
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
                        Scarce Supply

                     </h4>
                     <p>
                        With only 210,000 tokens available, BioBitcoin embraces scarcity to provide long-term value
                        for holders and investors.
                     </p>
                  </div>
               </div>
               <div class="feature__items pl__space wow fadeInUp" data-wow-duration="2s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/ai.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Smart Contract Staking Plan
                     </h4>
                     <p>
                        Maximize your BioBitcoin holdings with our staking program.
                     </p>
                  </div>
               </div>
               <div class="feature__items wow fadeInUp" data-wow-duration="2.2s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/cloud.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Secure and Transparent
                     </h4>
                     <p>
                        Powered by smart contracts to ensure trustless and seamless staking.
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
                        Reward Potential
                     </h4>
                     <p>
                        Earn consistent rewards while holding your tokens, turning your investment into a passive
                        income stream.
                     </p>
                  </div>
               </div>
               <div class="feature__items pr__space wow fadeInUp" data-wow-duration="2.6s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/virtual.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        Flexible Options
                     </h4>
                     <p>
                        Choose from various staking periods to suit your needs.
                     </p>
                  </div>
               </div>
               <div class="feature__items wow fadeInUp" data-wow-duration="2.8s">
                  <div class="icon">
                     <img src="{{asset('assets/img1/feature/neurology.png')}}" alt="icon">
                  </div>
                  <div class="content">
                     <h4>
                        How to Get Started
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
               Copyright &copy;2024 <a href="javascript:void(0)" class="intellicon">Bio Bitcoin</a>. Designed By <a href="javascript:void(0);" class="theme">Bio Bitcoin</a>
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