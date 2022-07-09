<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Restorant</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>
    <!-- =================Body Started==================== -->
    <body>
        <!-- *********************************************************** -->
        <!-- //////////////////////header-started/////////////////////// -->
        <header>
            <div class="main-nav">
               <div class="logo">
                   <img src="{{asset('assets/images/logo/logo1.png')}}">
               </div>
               <div class="menu-toggle"></div>
                <div class="menu">
                    <ul>
                        <li><a href="{{asset('home')}}">Home</a></li>
                        <li><a href="{{asset('about-us')}}">About Us</a></li>
                        <li><a href="{{asset('services')}}">Services</a></li>
                        <li><a href="{{asset('blog')}}">Blog</a></li>
                        <li><a href="{{asset('contact-us')}}">Contact Us</a></li>            
                        <li><a href="{{asset('Admin')}}">Admin</a></li>

                    </ul>
                </div>
                <div class="book">
                    <ul>
                        @if(Auth::check())
                        <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a></li>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none">
                            @csrf
                         </form>
                        
                        @else
                        <li><a href="{{route('login')}}" >login</a></li>
                         <li><a href="{{route('register')}}" >Register</a></li>
                         @endif
                    </ul>
                </div>
                <div class="social-media">

                    <ul>
                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- //////////////////////header-End/////////////////////// -->
        <!-- ====================================================== -->
        <!-- //////////////////////Main-Started/////////////////////// -->
        <main>
            <section class="slider">
                <div class="shape"></div>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/images/banner/banner-01.jpg')}}" class="" alt="...">
                            <div class="wrapper">
                                <h6>Exclusive Offer</h6>
                                <h1>We are here to provide the best service</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout.</p>
                                <a href="#">Order Now</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/images/banner/banner-02.jpg')}}" class="" alt="...">
                            <div class="wrapper">
                                <h6>Exclusive Offer</h6>
                                <h1>We are here to provide the best service</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout.</p>
                                <a href="#">Order Now</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/images/banner/banner-03.jpg')}}" class="" alt="...">
                            <div class="wrapper">
                                <h6>Exclusive Offer</h6>
                                <h1>We are here to provide the best service</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout.</p>
                                <a href="#">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            <!-- ========================================================================= -->
            <section class="se-second">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="wrapper">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{asset('assets/images/abt-img/1.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="wrapper">
                                <div class="content">
                                    <h5>About Us</h5>
                                    <h3>We are here with 20 years of experience</h3>
                                    <p>There are many variations of passages of 
                                    Lorem Ipsum available, but the majority have suffered 
                                    alteration in some form, by injected humour, or randomised 
                                    words which don't look even slightly believable. 
                                    If you are going to use a passage of Lorem Ipsum, 
                                    you need to be sure there isn't anything embarrassing hidden in the 
                                    middle of text. All the Lorem Ipsum generators on the Internet tend to 
                                    repeat predefined chunk</p>
                                    <a href="#">Read More</a>
                                    <li>
                                        <h4>David Ambrose</h4>
                                        <span>CEO & Founder</span>
                                        <img src="{{asset('assets/images/team/person.jpg')}}">
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========================================================================= -->
            <section class="se-third">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h5>Work</h5>
                                <h2>How It Works</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Asperiores officiis explicabo blanditiis consequuntur fugit fugiat, 
                                incidunt totam consectetur veritatis minus corporis doloribus, 
                                qui maxime velit nesciunt, officia praesentium odit facilis.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <ol>
                                        <li>
                                            <i class="flaticon-fish"></i>
                                            <h4>Pick Meals</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                            Asperiores officiis explicabo blanditiis consequuntur fugit</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <ol>
                                        <li>
                                            <i class="flaticon-shipped"></i>
                                            <h4>Fast Deliveries</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                            Asperiores officiis explicabo blanditiis consequuntur fugit</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <ol>
                                        <li>
                                            <i class="flaticon-tap"></i>
                                            <h4>choose How Often</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                            Asperiores officiis explicabo blanditiis consequuntur fugit</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========================================================================= -->
            <section class="se-five">
                <div class="shap"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrapper">
                                <h5>29% Discount</h5>
                                <h2>Enjoy with Family and Friends</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                sed eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim minim veniam, quis nostrud exercitation ullamco</p>
                                <a>View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========================================================================= -->
            <section class="se-four">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h2>Services</h2>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <img src="{{asset('assets/images/icons/ico-1.png')}}">
                                    <h4>High Quality Foods</h4>
                                    <p>There are many variations of passages of Lorem Ipsum 
                                    available, but the majority have suffered alteration in some 
                                    form, by injected humou</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <img src="{{asset('assets/images/icons/ico-2.png')}}">
                                    <h4>Inspiring Recipes</h4>
                                    <p>There are many variations of passages of Lorem Ipsum 
                                    available, but the majority have suffered alteration in some 
                                    form, by injected humou</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <img src="{{asset('assets/images/icons/ico-3.png')}}">
                                    <h4>Salutary Meals</h4>
                                    <p>There are many variations of passages of Lorem Ipsum 
                                    available, but the majority have suffered alteration in some 
                                    form, by injected humou</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <img src="{{asset('assets/images/icons/ico-4.png')}}">
                                    <h4>Veteran Staff</h4>
                                    <p>There are many variations of passages of Lorem Ipsum 
                                    available, but the majority have suffered alteration in some 
                                    form, by injected humou</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <img src="{{asset('assets/images/icons/ico-5.png')}}">
                                    <h4>Pristine Ingredientss</h4>
                                    <p>There are many variations of passages of Lorem Ipsum 
                                    available, but the majority have suffered alteration in some 
                                    form, by injected humou</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <img src="{{asset('assets/images/icons/ico-6.png')}}">
                                    <h4>Express Delivery</h4>
                                    <p>There are many variations of passages of Lorem Ipsum 
                                    available, but the majority have suffered alteration in some 
                                    form, by injected humou</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========================================================================= -->
            <section class="menu-items">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <div class="heading">
                                 <h2>Our Menu</h2>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="wrapper">
                                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="starters-item" data-toggle="tab" href="#starters" role="tab" aria-controls="all" aria-selected="true">Starters</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="breakfast-items" data-toggle="tab" href="#breakfast" role="tab" aria-controls="profile" aria-selected="false">breakfast</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="lunch-items" data-toggle="tab" href="#lunch" role="tab" aria-controls="contact" aria-selected="false">lunch</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="dinner-item" data-toggle="tab" href="#dinner" role="tab" aria-controls="contact" aria-selected="false">dinner</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="beverage-item" data-toggle="tab" href="#beverage" role="tab" aria-controls="contact" aria-selected="false">Beverage</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="starters" role="tabpanel" aria-labelledby="starters-item">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/1.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Almond Baked Brie</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/2.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Tuscan Flatbread</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/3.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="breakfast" role="tabpanel" aria-labelledby="breakfast-items">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/4.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/5.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Tuscan Flatbread</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/6.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Almond Baked Brie</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-items">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/4.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/5.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/6.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-item">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/4.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/5.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/6.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="beverage" role="tabpanel" aria-labelledby="beverage-item">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/4.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Almond Baked Brie</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/5.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Tuscan Flatbread</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <figure>
                                                    <div class="images">
                                                        <img src="{{asset('assets/images/menu/6.jpg')}}">
                                                    </div>
                                                    <div class="content">
                                                        <h4>Spicy Clup</h4>
                                                        <p>Pork, chicken and vegetable fried rolls served with lettuce wraps</p>
                                                        <a>order now</a>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
            </section>
            <!-- ========================================================================= -->
            <section class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h2>BLOG POSTS</h2>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="content">
                                            <article class="blog-sub">
                                                <div class="blog-content">
                                                    <img src="{{asset('assets/images/blog/1.jpg')}}">
                                                </div>
                                                <div class="blog-content-date">
                                                    Dec
                                                    <span> 28</span>
                                                </div>
                                                <div class="blog-content-section">
                                                    <div class="blo-content-title">
                                                        <h4>How to make a hot pizza?</h4>
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Neque at numquam, asperiores aut praesentium facilis 
                                                        ratione! Voluptatibus neque dignissimos ipsa</p>
                                                    </div>
                                                    <div class="blog-admin">
                                                        <ol>
                                                            <li><i class="flaticon-user"></i> By Admin</li>
                                                            <li><i class="flaticon-calendar"></i> dec 28, 2020</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="content">
                                            <article class="blog-sub">
                                                <div class="blog-content">
                                                    <img src="{{asset('assets/images/blog/2.jpg')}}">
                                                </div>
                                                <div class="blog-content-date">
                                                    Dec
                                                    <span> 28</span>
                                                </div>
                                                <div class="blog-content-section">
                                                    <div class="blo-content-title">
                                                        <h4>How to make a hot pizza?</h4>
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Neque at numquam, asperiores aut praesentium facilis 
                                                        ratione! Voluptatibus neque dignissimos ipsa</p>
                                                    </div>
                                                    <div class="blog-admin">
                                                        <ol>
                                                            <li><i class="flaticon-user"></i> By Admin</li>
                                                            <li><i class="flaticon-calendar"></i> dec 28, 2020</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="content">
                                            <article class="blog-sub">
                                                <div class="blog-content">
                                                    <img src="{{asset('assets/images/blog/3.jpg')}}">
                                                </div>
                                                <div class="blog-content-date">
                                                    Dec
                                                    <span> 28</span>
                                                </div>
                                                <div class="blog-content-section">
                                                    <div class="blo-content-title">
                                                        <h4>How to make a hot pizza?</h4>
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Neque at numquam, asperiores aut praesentium facilis 
                                                        ratione! Voluptatibus neque dignissimos ipsa</p>
                                                    </div>
                                                    <div class="blog-admin">
                                                        <ol>
                                                            <li><i class="flaticon-user"></i> By Admin</li>
                                                            <li><i class="flaticon-calendar"></i> dec 28, 2020</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrapper">
                                        <div class="content">
                                            <article class="blog-sub">
                                                <div class="blog-content">
                                                    <img src="{{asset('assets/images/blog/1.jpg')}}">
                                                </div>
                                                <div class="blog-content-date">
                                                    Dec
                                                    <span> 28</span>
                                                </div>
                                                <div class="blog-content-section">
                                                    <div class="blo-content-title">
                                                        <h4>How to make a hot pizza?</h4>
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Neque at numquam, asperiores aut praesentium facilis 
                                                        ratione! Voluptatibus neque dignissimos ipsa</p>
                                                    </div>
                                                    <div class="blog-admin">
                                                        <ol>
                                                            <li><i class="flaticon-user"></i> By Admin</li>
                                                            <li><i class="flaticon-calendar"></i> dec 28, 2020</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========================================================================= -->
            <section class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h2>our team</h2>
                            </div>
                        </div>
                       
                        <div class="main-team-card d-flex">
                        @foreach($users as $user)
                            <div class="team-setup">
                                <div class="team-items">
                                    <div class="team-user">
                                    <img src="{{asset('assets/images/team/SnakeRed.png')}}">
                                    </div>
                                    <div class="team-user-social">
                                    <ol>
                                        <li><i class="flaticon-facebook"></i></li>
                                        <li><i class="flaticon-twitter"></i></li>
                                        <li><i class="flaticon-behance"></i></li>
                                        <li><i class="flaticon-youtube"></i></li>
                                    </ol>
                                    </div>
                                    <div class="team-name">
                                    <h2>{{$user->name}}</h2>
                                    <b>Founder & CEO</b>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                   
                </div>
                
            </section>
        </main>
        <!-- //////////////////////Main-End/////////////////////// -->
        <!-- ====================================================== -->
        <!-- //////////////////////Footer-Started/////////////////////// -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="wrapper">
                            <h3><img src="{{asset('assets/images/logo/logo1.png')}}"></h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                               Laborum repellendus necessitatibus doloribus</p>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Your Email" role="text" name="email" type="email" value="{{ __('Email Address') }}">
                                <i class="flaticon-email"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="wrapper">
                            <h2>Usefull Links</h2>
                            <div class="content">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Menu</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="wrapper">
                            <h2> Opening Time</h2>
                            <div class="content">
                                <ul class="d-flex se">
                                    <li><a>Monday</a>
                                        <span>8 AM &nbsp;-&nbsp; 10 PM</span>
                                    </li>
                                    <li><a>Tuseday</a>
                                        <span>8 AM &nbsp;-&nbsp; 10 PM</span>
                                    </li>
                                    <li><a>Wednesday</a>
                                        <span>8 AM &nbsp;-&nbsp; 10 PM</span>
                                    </li>
                                    <li><a>Thursday</a>
                                        <span>8 AM &nbsp;-&nbsp; 10 PM</span>
                                    </li>
                                    <li><a>Friday</a>
                                        <span>8 AM &nbsp;-&nbsp; 10 PM</span>
                                    </li>
                                    <li><a>Saturday</a>
                                        <span>8 AM &nbsp;-&nbsp; 10 PM</span>
                                    </li>
                                    <li><a>Sunday</a>
                                        <span>8 AM &nbsp;-&nbsp; 10 PM</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>@2022 Vive xelouga all reserve for xelouga ! ! !</a></p>
                    </div>
                </div>
            </div>
        </div>





        <!-- *********************************************************** -->
    </body>
    <!-- =================Body End==================== -->

    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
