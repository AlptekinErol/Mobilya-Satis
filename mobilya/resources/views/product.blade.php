
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
      <title>niture</title>
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
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
     

     
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('assets/images/loading.gif')}}" alt="#" /></div>
      </div>

     <div class="wrapper">

      <!-- end loader --> 
      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li>
                    <a href="home">Home</a>
                </li>
                <li>
                    <a href="musteri/{{$users->musteriId}}">Sayfam</a>
                </li>
                <li class="active">
                    <a href="product">Product</a>
                </li>
                <li>
                    <a href="adminpanel">Admin Paneli</a>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
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
                        <div class="logo"> <a href="home"><img src="{{asset('assets/images/logo.jpg')}}" alt="#"></a> </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>
                        <li><button id="musteri"><img style="margin-right: 15px;" src="{{asset('assets/icon/1.png')}}" alt="#" /></button></li>
                       

                        <li class="tytyu" ><a href="#"><img style="margin-right: 15px;" src="{{asset('assets/icon/2.png')}}" alt="#" /></a></li>
                        <li><a href="sepet"><img style="margin-right: 15px;" src="{{asset('assets/icon/3.png')}}" alt="#" /></a></li>

                         <li>
                           <button type="button" id="sidebarCollapse">
                              <img src="{{asset('assets/images/menu_icon.png')}}" alt="#" />
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
               <div id="myModal" class="modal">
                  <div class="modal-content">
                      <span class="close">&times;</span>
                      <h1>Kullanıcı Bilgileri</h1>
                      <table id="raportablo">
                  <thead> 
                      <tr>
                          <th>Kullanıcı Adı</th>
                          <th>Şifre</th>
                          <th>Eposta</th>
                         
                      </tr>
                  </thead>
                  <tbody>
                    
                      <tr>
                          <td>{{$users->kadi}}</td>
                          <td>{{$users->sifre}}</td>
                          <td>{{$users->eposta}}</td>
                         
                        
                         
                        </tr>
                     
                  </tbody>
         
                  </table>
                  </div>
              </div>
         
              <script>
                  var modal = document.getElementById('myModal');
                  // Kipi açan düğmeyi al
                  var btn = document.getElementById("musteri");
                  // Kipi kapatan <span> öğesini edinin
                  var span = document.getElementsByClassName("close")[0];
                  // Kullanıcı düğmeyi tıklattığında
                  btn.onclick = function() {
                          modal.style.display = "block";
                      }
                      // Kullanıcı <span> (x) düğmesini tıkladığında, popup
                  span.onclick = function() {
                          modal.style.display = "none";
                      }
                      // Kullanıcı modelden başka herhangi bir yeri tıklattıysa, onu kapatın.
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
              </script>
            </div>
         </div>
            </div>
        
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Ürünlerimiz</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3" >
      <!-- product -->
      @foreach($urunlers as $urun )
         
      
       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="{{$urun->foto}}" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="cart/{{$urun->urunId}}">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">{{$urun->fiyat}}₺<br><span class="old_price">2000₺</span></p>
            <p class="product_descr">{{$urun->urunadi}}</p>
          </div>
         </div>
        </div>
        @endforeach
      <!-- end product -->
     
  </div>
</div>

      <!--  footer --> 
      <footer>
         <div class="footer">
            <div class="container-fluid">
               <div class="border1">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  
                    <img class="logo1" src="{{asset('assets/images/logo1.jpg')}}"/>
                  </div>
            
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  
                    
                     <ul class="lik">
                        <li> <a href="index.html">Anasayfa</a></li>
                         <li> <a href="musteri">Müşteri</a></li>
                         <li> <a href="product.html">Ürünler</a></li>
                         <li> <a href="adminpanel">Blog</a></li>
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
                     <p>Haber ve indirimler için bize abone olabilirsiniz.t<br> </p>
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

      <!-- Javascript files--> 
      <script src="{{asset('assets/js/jquery.min.js')}}"></script> 
      <script src="{{asset('assets/js/popper.min.js')}}"></script> 
      <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script> 
      <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script> 
      <script src="{{asset('assets/js/plugin.js')}}"></script> 
      <!-- sidebar --> 
      <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script> 
      <script src="{{asset('assets/js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>


      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>