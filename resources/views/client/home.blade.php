@extends('layout/appLayout');

@section('appLayout')
<div class="hola">
    <div class="Shape_5 Top_Border"></div>
    <h2>Loading</h2>
</div>
<!-- preloader  -->
<div class="mouse-cursor cursor-outer" style="visibility: visible; transform: translate(672px, 260px);"></div>
<div class="mouse-cursor cursor-inner" style="visibility: visible; transform: translate(672px, 260px);"></div>

<div class="body-content body-bg-white">
    <!-- Header section  -->
    <header class="header-section">
        <div class="header-none fixed-top">
            <div id="header-sticky" class="demo-header small-menu menu-area">
                <div class="logo-text text-texture">
                    <a href="#home">
                        <h1>A</h1>
                    </a>
                </div>
            </div>
            <div class="main-menu">
                <ul class="nav">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Projects</a></li>
                    <li><a href="#client">clients</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>				
            <div class="copy-right">
                <p>©2021 Smith <br />Created By <a href="https://codecanyon.net/user/themexhunter">ThemexHunter</a>.</p>
            </div>
        </div>
        <nav role="navigation" class="d-block d-xl-none">
            <div id="menuToggle" class="">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
                <div class="mobile-menu mainmenu" id="mobile-menu">
                    <ul id="nav">
                        <li class="active"><a href="#home"><i class="las la-home"></i></a></li>
                        <li><a href="#about"><i class="las la-address-book"></i></a></li>
                        <li><a href="#portfolio"><i class="las la-briefcase"></i></a></li>
                        <li><a href="#client"><i class="las la-exchange-alt"></i></a></li>
                        <li><a href="#blog"><i class="las la-blog"></i></a></li>
                        <li><a href="#contact"><i class="las la-comments"></i></a></li>								
                    </ul>
                </div>										
            </div>
        </nav>
    </header>
    <!-- Header section end  -->		
    <!-- START DEMO-TOP -->
    <div class="section-wrapper">
        <section>
            <div id="home" class="banner-area content active">
                <div class="banne-middle vh d-flex" style="background-image:url(img/bg3.jpg)">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <div class="col-md-12 text-center">
                                <div class="banner-text">
                                    <h1>Amran Smith</h1>
                                    <h4> I'm a <span id="typed"></span></h4>
                                </div>
                                <div class="home-social d-none d-sm-block">
                                    <ul class="social list-unstyled m-0">
                                        <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="linkedin"><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="dribbble"><a title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                        </li>
                                        <li class="instagram"><a title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="about" class="about-area content section-divide bg-gray-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-5 col-sm-12 mb-30">
                            <div class="about-img">
                                <img src="img/ab2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 col-sm-12 mb-30">
                            <div class="about-title">
                                <span>About Me</span>
                                <h2>Amran Smith & Photographer</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-sm-12 extra-mb">
                                    <div class="about-bio">
                                        <ul>
                                            <li><p><span>Birthday:</span>05.04.1992</p></li>
                                            <li><p><span>Phone:</span><a href="tel:+770221770505">+77 022 177 05 05</a></p></li>
                                            <li><p><span>Address:</span>New Jersey, USA</p></li>
                                            <li><p><span>Email:</span><a href="mailto:mail@gmail.com">mail@gmail.com</a></p></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-sm-12 extra-mb">
                                    <div class="about-bio">
                                        <ul>											
                                            <li><p><span>Age:</span>29</p></li>
                                            <li><p><span>Study:</span>University of Texas</p></li>												
                                            <li><p><span>Skype : </span>steve.Andrew:</p></li>
                                            <li><p><span>Freelance:</span>Available</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="about-btns">
                                <div class="about-btn">
                                    <a href="#" class="btn btn-color btn-space">Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tittle-warp">
                                <h2>Photography & Language Skills</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">							
                            <div class="progress-bar-style">
                                <div class="skillbar-group">
                                    <div class="single-skill-bar">
                                        <div class="skill-bar-content">
                                            <span class="skill-title tittle-bg">Adventure</span>
                                        </div>					
                                        <div class="bar1 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill progress-bg" data-percentage="90"></span>
                                        </div>										
                                    </div>
                                    <div class="single-skill-bar">
                                        <div class="skill-bar-content">
                                            <span class="skill-title tittle-bg">Family</span>
                                        </div>
                                        <div class="bar2 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill progress-bg" data-percentage="95"></span>
                                        </div>										
                                    </div>
                                    <div class="single-skill-bar">
                                        <div class="skill-bar-content">
                                            <span class="skill-title tittle-bg">Lifestyle</span>
                                        </div>
                                        <div class="bar3 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill progress-bg" data-percentage="80"></span>
                                        </div>										
                                    </div>	
                                </div>
                            </div>
                        </div>	
                        <div class="col-lg-6 col-sm-12">
                            <div class="progress-bar-style">
                                <div class="single-skill-bar">
                                    <div class="skill-bar-content">
                                        <span class="skill-title tittle-bg">English</span>
                                    </div>
                                    <div class="bar4 barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill progress-bg" data-percentage="90"></span>
                                    </div>
                                </div>
                                <div class="single-skill-bar">
                                    <div class="skill-bar-content">
                                        <span class="skill-title tittle-bg">Spanish</span>
                                    </div>
                                    <div class="bar5 barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill progress-bg" data-percentage="85"></span>
                                    </div>										
                                </div>
                                <div class="single-skill-bar">
                                    <div class="skill-bar-content">
                                        <span class="skill-title tittle-bg">Hindi</span>
                                    </div>
                                    <div class="bar6 barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill progress-bg" data-percentage="95"></span>
                                    </div>										
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tittle-warp extra-margin">
                                <h2>Happy Client</h2>
                            </div>
                        </div>							
                        <div class="col-lg-4 col-sm-12 mb-30">
                            <div class="counter-wrapper text-center">
                                <div class="counter-icon">
                                    <a href="#"><i class="la la-user-friends"></i></a>
                                </div>
                                <div class="counter-text">
                                    <h2 class="counter">1520</h2>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 mb-30">
                            <div class="counter-wrapper text-center">
                                <div class="counter-icon">
                                    <a href="#"><i class="las la-medal"></i></a>
                                </div>
                                <div class="counter-text">
                                    <h2 class="counter">1250</h2>
                                    <span>Award Win</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 mb-30">
                            <div class="counter-wrapper text-center">
                                <div class="counter-icon">
                                    <a href="#"><i class="las la-check-square"></i></a>
                                </div>
                                <div class="counter-text">
                                    <h2 class="counter">1480</h2>
                                    <span>Complete Project</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tittle-warp">
                                <h2>Our Partners</h2>
                            </div>
                        </div>	
                        <div class="col-xl-12">
                            <div class="brand-active mb-30 owl-carousel">
                                <div class="brand-wrapper">
                                    <div class="brand-img">
                                        <div class="img">
                                            <a href="#"><img src="img/brand/b1.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-wrapper">
                                    <div class="brand-img">
                                        <div class="img">
                                            <a href="#"><img src="img/brand/b2.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-wrapper">
                                    <div class="brand-img">
                                        <div class="img">
                                            <a href="#"><img src="img/brand/b3.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-wrapper">
                                    <div class="brand-img">
                                        <div class="img">
                                            <a href="#"><img src="img/brand/b4.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-wrapper">
                                    <div class="brand-img">
                                        <div class="img">
                                            <a href="#"><img src="img/brand/b2.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-wrapper">
                                    <div class="brand-img">
                                        <div class="img">
                                            <a href="#"><img src="img/brand/b3.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </section>

        <section>
            <div id="portfolio" class="portfolio-area content section-divide bg-gray-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title w-90 text-left">
                                <span>portfolio</span>
                                <h2>My Works <img src="img/ti.png" alt="" /></h2>
                            </div>
                        </div>
                    </div>
                    <div class="Portfolio-menu text-left mb-40">
                        <button class="active" data-filter="*"><a href="#">All</a></button>
                        <button data-filter=".cat1" class=""><a href="#">Youtube</a></button>
                        <button data-filter=".cat2" class=""><a href="#">Mockup</a></button>
                        <button data-filter=".cat3" class=""><a href="#">Photo</a></button>
                        <button data-filter=".cat4" class=""><a href="#">Popup</a></button>
                        <button data-filter=".cat5" class=""><a href="#">Other</a></button>				
                    </div>
                    <div class="Portfolio-grid grid filter custom">
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 grid-item cat1">						
                                <div class="Portfolio-wrapper mb-45">
                                    <div class="portfolio-img">								
                                        <a class="video-btn" data-type="iframe" 
                                        href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1"><img src="img/portfolio/1.jpg" alt=""></a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2><a href="#">Personal videos</a></h2>	
                                        <span>youtube</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 grid-item cat2 cat5">
                                <div class="Portfolio-wrapper mb-45">
                                    <div class="portfolio-img">	
                                        <a href="img/portfolio/2.jpg" class="popup-img">
                                            <img src="img/portfolio/2.jpg" alt="">
                                        </a>		
                                    </div>	
                                    <div class="portfolio-content">
                                        <h2><a href="#">Buisness Card</a></h2>	
                                        <span>mockup</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 grid-item cat5 cat2 cat3">
                                <div class="Portfolio-wrapper mb-45">
                                    <div class="portfolio-img">	
                                        <a class="popup-img" href="img/portfolio/3.jpg"><img src="img/portfolio/3.jpg" alt=""></a>	
                                    </div>								
                                    <div class="portfolio-content">
                                        <h2><a href="#">Ya Moda Flyer</a></h2>	
                                        <span>Photo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 grid-item cat3 cat2">
                                <div class="Portfolio-wrapper mb-45">
                                    <div class="portfolio-img">	
                                        <a class="popup-img" href="img/portfolio/4.jpg"><img src="img/portfolio/4.jpg" alt=""></a>		
                                    </div>
                                    <div class="portfolio-content">
                                        <h2><a href="#">Hello I Am</a></h2>	
                                        <span>Photo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 grid-item cat4">
                                <div class="Portfolio-wrapper mb-30">
                                    <div class="portfolio-img">	
                                        <a data-toggle="modal" data-target="#portfolioModalone" href="#"><img src="img/portfolio/5.jpg" alt=""></a>	
                                    </div>
                                    <div class="portfolio-content">
                                        <h2><a href="#">Waffle bookpack</a></h2>	
                                        <span>Popup</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 grid-item cat5 cat4">
                                <div class="Portfolio-wrapper mb-30">
                                    <div class="portfolio-img">
                                        <a data-toggle="modal" data-target="#portfolioModaltwo" href="#"><img src="img/portfolio/6.jpg" alt=""></a>										
                                    </div>
                                    <div class="portfolio-content">
                                        <h2><a href="#">Luiz Abdo</a></h2>	
                                        <span>Popup</span>
                                    </div>
                                </div>
                            </div>						
                        </div>						
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div id="client" class="client-area content section-divide bg-gray-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title w-90 text-left">
                                <span>client</span>
                                <h2>My client <img src="img/ti.png" alt="" /></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="testi-active owl-carousel owl-loaded owl-drag">
                                <div class="testi-warp">
                                    <div class="testi-text mb-30">
                                        <p>We must experience the truth in a direct,
                                        practical and real way. This is only possible
                                        in stillness and silence of the mind and this 
                                        is achieved.</p>
                                    </div>
                                    <div class="testi d-sm-flex align-items-center">
                                        <div class="testi-img">
                                            <img src="img/testi/t1.jpg" alt="">
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Kaiara Spencer</h4>
                                            <h6>CEO, Compamy</h6>
                                        </div>
                                    </div>
                                    <div class="testi-quote text-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testi-warp">
                                    <div class="testi-text mb-30">
                                        <p>We must experience the truth in a direct,
                                        practical and real way. This is only possible
                                        in stillness and silence of the mind and this 
                                        is achieved.</p>
                                    </div>
                                    <div class="testi d-sm-flex align-items-center">
                                        <div class="testi-img">
                                            <img src="img/testi/t2.jpg" alt="">
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Michael Redux</h4>
                                            <h6>Menagement</h6>
                                        </div>
                                    </div>
                                    <div class="testi-quote text-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testi-warp">
                                    <div class="testi-text mb-30">
                                        <p>We must experience the truth in a direct,
                                        practical and real way. This is only possible
                                        in stillness and silence of the mind and this 
                                        is achieved.</p>
                                    </div>
                                    <div class="testi d-sm-flex align-items-center">
                                        <div class="testi-img">
                                            <img src="img/testi/t3.jpg" alt="">
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Corine Willis</h4>
                                            <h6>Accountant</h6>
                                        </div>
                                    </div>
                                    <div class="testi-quote text-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>												
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div id="blog" class="blog-area content section-divide bg-gray-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title w-90 text-left">
                                <span>News</span>
                                <h2>My Blog <img src="img/ti.png" alt="" /></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="blog-warp pb-30">
                                <div class="blog-img">
                                    <a data-toggle="modal" data-target="#blogModalone" href=""><img src="img/blog/1.jpg" alt=""></a>
                                    <span>fushion</span>
                                </div>																	
                                <div class="blog-content">
                                    <div class="des-img">
                                        <img src="img/testi/t1.jpg" alt="" />
                                        <h5><span>by</span>Kaiara Spencer</h5>
                                        <div class="des-date">
                                            <span>07 Aug 2021</span>
                                        </div>
                                    </div>
                                    <h4><a data-toggle="modal" data-target="#blogModalone" href="#">Build your website into design automatically to your buisness simplicity</a></h4>
                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod teminc ididunt ut labore et dolore.Lorem ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="blog-warp pb-30">
                                <div class="blog-img">
                                    <a data-toggle="modal" data-target="#blogModaltwo" href=""><img src="img/blog/2.jpg" alt=""></a>
                                    <span>Creative</span>
                                </div>																	
                                <div class="blog-content">
                                    <div class="des-img">
                                        <img src="img/testi/t2.jpg" alt="" />
                                        <h5><span>by</span>Michael Redux</h5>
                                        <div class="des-date">
                                            <span>16 July 2021</span>
                                        </div>
                                    </div>										
                                    <h4><a data-toggle="modal" data-target="#blogModaltwo" href="#">Guide to proper idea simplicity web design and development tools here</a></h4>
                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod teminc ididunt ut labore et dolore.Lorem ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="blog-warp pb-30">
                                <div class="blog-img">
                                    <a data-toggle="modal" data-target="#blogModalthree" href=""><img src="img/blog/3.jpg" alt=""></a>
                                    <span>Lifestyle</span>
                                </div>																	
                                <div class="blog-content">
                                    <div class="des-img">
                                        <img src="img/testi/t3.jpg" alt="" />
                                        <h5><span>by</span>Corine Willis</h5>
                                        <div class="des-date">
                                            <span>02 June 2021</span>
                                        </div>
                                    </div>										
                                    <h4><a data-toggle="modal" data-target="#blogModalthree" href="#">Never give in except to convictions simplicity good sense of people in company</a></h4>
                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod teminc ididunt ut labore et dolore.Lorem ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="blog-warp pb-30">
                                <div class="blog-img">
                                    <a data-toggle="modal" data-target="#blogModalfour" href=""><img src="img/blog/4.jpg" alt=""></a>
                                    <span>Concept</span>
                                </div>																	
                                <div class="blog-content">
                                    <div class="des-img">
                                        <img src="img/testi/t2.jpg" alt="" />
                                        <h5><span>by</span>Jimm Smith</h5>
                                        <div class="des-date">
                                            <span>21 April 2021</span>
                                        </div>
                                    </div>										
                                    <h4><a data-toggle="modal" data-target="#blogModalfour" href="#">Gearing your company through simplicity an Innovative of local strategy</a></h4>
                                    <p>Lorem ipsum dolor sit amet, sed do eiusmod teminc ididunt ut labore et dolore.Lorem ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="contact" class="contact-area content section-divide bg-gray-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title w-90 text-left">
                            <span>contact</span>
                            <h2>Contact Me<img src="img/ti.png" alt="" /></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="features-wrapper text-center">
                            <div class="features-content">
                                <div class="features-icon">
                                    <i class="las la-envelope-open"></i>
                                </div>
                                <h4>Our Mail Here</h4>
                                <p><a href="mailto:admin00@gamil.com">admin00@gamil.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="features-wrapper text-center">
                            <div class="features-content">
                                <div class="features-icon">
                                    <i class="las la-globe"></i>
                                </div>
                                <h4>Visit Our Site</h4>
                                <p>27 Division St, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="features-wrapper text-center">
                            <div class="features-content">
                                <div class="features-icon">
                                    <i class="las la-headset"></i>
                                </div>
                                <h4>Call To Us</h4>
                                <p><a href="tel:+8 (123) 985 789">+8 (123) 985 789</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">	
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                        <form class="contact-form" method="post" action="">																																	
                            <!-- form element -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Name" required="">
                                    <div class="icon-bg"><i class="las la-user"></i></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email" required="">
                                    <div class="icon-bg"><i class="las la-envelope"></i></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone" required="">
                                    <div class="icon-bg"><i class="las la-phone"></i></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject" required="">
                                    <div class="icon-bg"><i class="lab la-hire-a-helper"></i></div>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Message" required=""></textarea>
                                    <div class="icon-bg"><i class="las la-edit"></i></div>
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-success contact-msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                                <div class="col-12 text-left">
                                    <a href=""><button name="submit" type="submit" class="btn btn-space btn-success" value="Send Message">Send Message</button></a>
                                </div>
                            </div>
                            <!-- end form element -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


</div>
<!-- END DEMO-TOP -->









<!-- Start Modal portfolio one -->
<div class="modal fade" id="portfolioModalone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <a href=""><span aria-hidden="true">&times;</span></a>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-modal-content">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="p-model-img">
                                <img src="img/portfolio/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="left-part">
                                <h4>Waffle Book Gift pack</h4>
                                <span>Popup</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 col-sm-12">
                            <div class="left-part-desc">
                                <p>We must experience the truth in a direct, practical and real way. 
                                This is only dolore possible in the stillness and silence of the mind and
                                this is achieved by means of meditation.Rearrange the entire color palette, making your site unique</p>
                                <p class="italic">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ".</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-4 col-sm-12">
                            <div class="right-part">
                                <div class="post-detail">
                                    <ul class="list-style-2">
                                        <li><p><span>Client : </span>Corine Willis</p></li>
                                        <li><p><span>Category : </span>Popup</p></li>												
                                        <li><p><span>Type : </span>HTML5, CSS3, PHP, jQuery</p></li>
                                        <li><p><span>Date : </span>Aug 07, 2021</p></li>
                                        <li><p><span>URL : </span>www.mysite.com</p></li>
                                        <li><p><span>Share : </span>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a title="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a title="linkedin" href="#"><i class="fa fa-linkedin"></i></a>												
                                        <a title="instagram" href="#"><i class="fa fa-instagram"></i></a>													
                                        </p></li>
                                    </ul>
                                </div>
                            </div>									
                        </div>																	
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-45">
                            <div class="left-part">
                                <h4>Related Posts</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/portfolio/1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/portfolio/2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal portfolio one -->

<!-- Start Modal portfolio two -->		
<div class="modal fade" id="portfolioModaltwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <a href=""><span aria-hidden="true">&times;</span></a>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-modal-content">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="p-model-img">
                                <img src="img/portfolio/6.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="left-part">
                                <h4>Luiz Abdo Profile Card</h4>
                                <span>Popup</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 col-sm-12">
                            <div class="left-part-desc">
                                <p>We must experience the truth in a direct, practical and real way. 
                                This is only dolore possible in the stillness and silence of the mind and
                                this is achieved by means of meditation.Rearrange the entire color palette, making your site unique</p>
                                <p class="italic">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ".</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-4 col-sm-12">
                            <div class="right-part">
                                <div class="post-detail">
                                    <ul class="list-style-2">
                                        <li><p><span>Client : </span>Corine Willis</p></li>
                                        <li><p><span>Category : </span>Popup</p></li>												
                                        <li><p><span>Type : </span>HTML5, CSS3, PHP, jQuery</p></li>
                                        <li><p><span>Date : </span>Aug 07, 2021</p></li>
                                        <li><p><span>URL : </span>www.mysite.com</p></li>
                                        <li><p><span>Share : </span>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a title="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a title="linkedin" href="#"><i class="fa fa-linkedin"></i></a>												
                                        <a title="instagram" href="#"><i class="fa fa-instagram"></i></a>													
                                        </p></li>
                                    </ul>
                                </div>
                            </div>									
                        </div>																	
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-45">
                            <div class="left-part">
                                <h4>Related Posts</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/portfolio/3.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/portfolio/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal portfolio two -->


<!-- Start Modal BlogOne -->
<div class="modal fade" id="blogModalone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <a href=""><span aria-hidden="true">&times;</span></a>
                </button>
            </div>
            <div class="modal-body blog-popup">
                <div class="p-modal-content">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="p-model-img">
                                <img src="img/blog/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="blog-popup left-part">
                                <div class="des-img">
                                    <img src="img/testi/t2.jpg" alt="" />
                                    <h5><span>by</span>Kaiara Spencer</h5>
                                    <div class="des-date">
                                        <span>07 Aug 2021</span>
                                    </div>
                                </div>
                                <h4>Build your website into design automatically to your buisness</h4>
                                <span>Fushion</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 col-sm-12">
                            <div class="left-part-desc">
                                <p>We must experience the truth in a direct, practical and real way. 
                                This is only dolore possible in the stillness and silence of the mind and
                                this is achieved by means of meditation.Rearrange the entire color palette, making your site unique</p>
                                <p class="italic">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ".</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-4 col-sm-12">
                            <div class="right-part">
                                <div class="post-detail">
                                    <ul class="list-style-2">
                                        <li><p><span>Author : </span>Kaiara Spencer</p></li>
                                        <li><p><span>Category : </span>Fushion </p></li>												
                                        <li><p><span>Tag : </span>Mordern, Loan, News, Funds, Posts</p></li>
                                        <li><p><span>Date : </span>Aug 07, 2021</p></li>
                                        <li><p><span>URL : </span>www.myblog.com</p></li>
                                        <li><p><span>Share : </span>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a title="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a title="linkedin" href="#"><i class="fa fa-linkedin"></i></a>												
                                        <a title="instagram" href="#"><i class="fa fa-instagram"></i></a>													
                                        </p></li>
                                    </ul>
                                </div>
                            </div>									
                        </div>																	
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-45">
                            <div class="left-part">
                                <h4>Related Posts</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal BlogOne -->

<!-- Start Modal Blogtwo -->
<div class="modal fade" id="blogModaltwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <a href=""><span aria-hidden="true">&times;</span></a>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-modal-content">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="p-model-img">
                                <img src="img/blog/2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="blog-popup left-part">
                                <div class="blog-content">
                                    <div class="des-img">
                                        <img src="img/testi/t2.jpg" alt="" />
                                        <h5><span>by</span>Michael Redux</h5>
                                        <div class="des-date">
                                            <span>16 July 2021</span>
                                        </div>
                                    </div>
                                </div>
                                <h4>Guide to proper idea web design and development tools here</h4>
                                <span>Creative</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 col-sm-12">
                            <div class="left-part-desc">
                                <p>We must experience the truth in a direct, practical and real way. 
                                This is only dolore possible in the stillness and silence of the mind and
                                this is achieved by means of meditation.Rearrange the entire color palette, making your site unique</p>
                                <p class="italic">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ".</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-4 col-sm-12">
                            <div class="right-part">
                                <div class="post-detail">
                                    <ul class="list-style-2">
                                        <li><p><span>Author : </span>Michael Redux</p></li>
                                        <li><p><span>Category : </span>Creative</p></li>												
                                        <li><p><span>Tag : </span>Mordern, Loan, News, Funds, Posts</p></li>
                                        <li><p><span>Date : </span>16 July, 2021</p></li>
                                        <li><p><span>URL : </span>www.myblog.com</p></li>
                                        <li><p><span>Share : </span>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a title="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a title="linkedin" href="#"><i class="fa fa-linkedin"></i></a>												
                                        <a title="instagram" href="#"><i class="fa fa-instagram"></i></a>													
                                        </p></li>
                                    </ul>
                                </div>
                            </div>									
                        </div>																	
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-45">
                            <div class="left-part">
                                <h4>Related Posts</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/3.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Blogtwo -->

<!-- Start Modal Blogthree -->
<div class="modal fade" id="blogModalthree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <a href=""><span aria-hidden="true">&times;</span></a>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-modal-content">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="p-model-img">
                                <img src="img/blog/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="blog-popup left-part">
                                <div class="blog-content">
                                    <div class="des-img">
                                        <img src="img/testi/t3.jpg" alt="" />
                                        <h5><span>by</span>Corine Willis</h5>
                                        <div class="des-date">
                                            <span>02 June 2021</span>
                                        </div>
                                    </div>
                                </div>
                                <h4>Never give in except to convictions good sense of people</h4>
                                <span>Lifestyle</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 col-sm-12">
                            <div class="left-part-desc">
                                <p>We must experience the truth in a direct, practical and real way. 
                                This is only dolore possible in the stillness and silence of the mind and
                                this is achieved by means of meditation.Rearrange the entire color palette, making your site unique</p>
                                <p class="italic">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ".</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-4 col-sm-12">
                            <div class="right-part">
                                <div class="post-detail">
                                    <ul class="list-style-2">
                                        <li><p><span>Author : </span>Corine Willis</p></li>
                                        <li><p><span>Category : </span>Lifestyle</p></li>												
                                        <li><p><span>Tag : </span>Mordern, Loan, News, Funds, Posts</p></li>
                                        <li><p><span>Date : </span>02 June, 2021</p></li>
                                        <li><p><span>URL : </span>www.myblog.com</p></li>
                                        <li><p><span>Share : </span>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a title="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a title="linkedin" href="#"><i class="fa fa-linkedin"></i></a>												
                                        <a title="instagram" href="#"><i class="fa fa-instagram"></i></a>													
                                        </p></li>
                                    </ul>
                                </div>
                            </div>									
                        </div>																	
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-45">
                            <div class="left-part">
                                <h4>Related Posts</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Blogthree -->

        <!-- Start Modal Blogfour -->
<div class="modal fade" id="blogModalfour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <a href=""><span aria-hidden="true">&times;</span></a>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-modal-content">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="p-model-img">
                                <img src="img/blog/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="blog-popup left-part">
                                <div class="blog-content">
                                    <div class="des-img">
                                        <img src="img/testi/t1.jpg" alt="" />
                                        <h5><span>by</span>Jimm Smith</h5>
                                        <div class="des-date">
                                            <span>21 April 2021</span>
                                        </div>
                                    </div>
                                </div>
                                <h4>Gearing your company through an Innovative of local strategy</h4>
                                <span>Concept</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 col-md-8 col-sm-12">
                            <div class="left-part-desc">
                                <p>We must experience the truth in a direct, practical and real way. 
                                This is only dolore possible in the stillness and silence of the mind and
                                this is achieved by means of meditation.Rearrange the entire color palette, making your site unique</p>
                                <p class="italic">" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ".</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-4 col-sm-12">
                            <div class="right-part">
                                <div class="post-detail">
                                    <ul class="list-style-2">
                                        <li><p><span>Author : </span>Jimm Smith</p></li>
                                        <li><p><span>Category : </span>Concept</p></li>												
                                        <li><p><span>Tag : </span>Mordern, Loan, News, Funds, Posts</p></li>
                                        <li><p><span>Date : </span>21 April, 2021</p></li>
                                        <li><p><span>URL : </span>www.myblog.com</p></li>
                                        <li><p><span>Share : </span>
                                        <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a title="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a title="linkedin" href="#"><i class="fa fa-linkedin"></i></a>												
                                        <a title="instagram" href="#"><i class="fa fa-instagram"></i></a>													
                                        </p></li>
                                    </ul>
                                </div>
                            </div>									
                        </div>																	
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 mb-45">
                            <div class="left-part">
                                <h4>Related Posts</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="p-model-img extra-hover">
                                <img src="img/blog/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Blogfour -->
    
@endsection