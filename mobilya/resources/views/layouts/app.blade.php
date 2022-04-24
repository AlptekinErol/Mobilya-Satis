<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Mobilya</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('assets/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{asset('assets/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.cs')}}s" media="screen">
    <!--[if lt IE 9]>
      <script src="{{asset('assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
      <script src="{{asset('assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('assets/images/loading.gif')}}" alt="#" /></div>
    </div>
     <!-- end loader -->

    <div class="wrapper">

       
        <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active"> <a href="home">Anasayfa</a></li>
                 <li> <a href="musteri">About</a></li>
                                        <li> <a href=product>Ürünler</a></li>
                                        <li> <a href="adminpanel">panel</a></li>
                                        <li> <a href="contact.html">Contact us</a></li>

            </ul>

        </nav>
      </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href=home><img src="{{asset('assets/images/logo.jpg')}}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <button id="musteri"><img style="margin-right: 15px;" src="{{asset('assets/icon/1.png')}}" alt="#" /></button>
                                        </li>

                                        <li>
                                            <a href="adminlogin"><img style="margin-right: 15px;" src="{{asset('assets/icon/1.png')}}" alt="#" /></a>
                                        </li>



                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="{{asset('assets/icon/2.png')}}" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="cart"><img style="margin-right: 15px;" src="{{asset('assets/icon/3.png')}}" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="{{asset('assets/images/menu_icon.png')}}" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>
            @yield('section')
            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="border1">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                                    <img class="logo1" src="{{asset('assets/images/logo1.jpg')}}" />
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                    <ul class="lik">
                                        <li> <a href="home">Anasayfa</a></li>
                                        <li> <a href="musteri">About</a></li>
                                        <li> <a href="product">Ürünler</a></li>
                                        <li> <a href="blog.html">Blog</a></li>
                                        <li> <a href="contact.html">Contact us</a></li>
                                    </ul>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                    <ul class="sociel">
                                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="new">
                                    <h3>Haber ve indirimler için</h3>
                                    <form class="newtetter">
                                        <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                        <button class="submit">Abone</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="newtt">
                                    <p>Haber ve indirimler için bize abone olabilirsiniz.
                                        <br> </p>
                                </div>
                            </div>
                        </div>

                    </div>
                  
                    <div class="copyright">
                        <p>Copyright 2022 All Right </a></p>
                    </div>
            
             </div>

            </footer>
            <!-- end footer -->
        </div>

    </div>

    <div class="overlay"></div>

    @yield('script') 
    
</body>

</html>