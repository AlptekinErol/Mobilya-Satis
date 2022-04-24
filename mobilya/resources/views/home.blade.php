@extends('layouts.app')

@section('section')



 <!-- end header -->
 <section class="slider_section">
    <div class="banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                    <div class="text-bg">
                        <h1>İleri Dönem <br> <strong class="black_bold">Mobilya Tasarımları</strong><br></h1>
                        <a href="product">Alışverişe Başla <i class='fa fa-angle-right'></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-img">
                        <figure><img src="{{asset('assets/images/bg.jpg')}}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

 <!-- discount -->
 <div class="container">
    <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>50% İNDİRİM<br> <strong class="black_nolmal">en son koleksiyon</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{asset('assets/images/discount.jpg')}}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>50% İNDİRİM<br> <strong class="black_nolmal">en son koleksiyon</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{asset('assets/images/discount.jpg')}}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>50% İNDİRİM<br> <strong class="black_nolmal">en son koleksiyon</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{asset('assets/images/discount.jpg')}}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- end discount -->
 <!-- trending -->
 <div class="trending">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Trend<strong class="black">Ürünler</strong></h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                <div class="trending-box">
                    <figure><img src="{{asset('assets/images/1.jpg')}}" /></figure>
                    <h3>Ev</h3>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="trending-box">
                    <figure><img src="{{asset('assets/images/2.jpg')}}" /></figure>
                    <h3>Çalışma Odası</h3>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                <div class="trending-box">
                    <figure><img src="{{asset('assets/images/3.jpg')}}" /></figure>
                    <h3>Yatak Odası</h3>

                </div>
            </div>

        </div>
    </div>
 </div>
 <!-- end trending -->

 <!-- our brand -->
 <div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Öne <strong class="black">Çıkanlar</strong></h2>

                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="container-fluid">
    <div class="brand-bg">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="{{asset('assets/images/foto16.jpg')}}"/></i>
                    <h3>Siyah Karyola</h3>
                    <span>7.499₺</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="{{asset('assets/images/foto8.jpg')}}"/></i>
                    <h3>Siyah Sandalyeli Yemek Masası</h3>
                    <span>9.595₺</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="{{asset('assets/images/foto20.jpg')}}"/></i>
                    <h3>Yeşil Sandalye</h3>
                    <span>899₺</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="{{asset('assets/images/foto4.jpg')}}"/></i>
                    <h3>Ahşap Karyola</h3>
                    <span>1.599₺ </span>
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- end our brand -->
 <!-- map -->
 <div class="contact">
    <div class="container-fluid padddd">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>İletişime <strong class="black">Geçin</strong></h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                 <div class="map_section">
         <div id="map">
         </div>
       </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <form class="main_form">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" placeholder="İsim" type="text" name="Name">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" placeholder="Numara" type="text" name="Phone">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <textarea class="textarea" placeholder="Mesaj" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <button class="send">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
 <!-- end map -->

@endsection

@section('script')
 <!-- Javascript files-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
 <script src="{{asset('assets/js/popper.min.js')}}"></script>
 <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
 <!-- sidebar -->
 <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
 <script src="{{asset('assets/js/custom.js')}}"></script>
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function() {

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

    });
 </script>
 <script>
  // This example adds a marker to indicate the position of Bondi Beach in Sydney,
  // Australia.
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {lat: 40.645037, lng: -73.880224},
      });

  var image = '{{asset('assets/images/maps-and-flags.png')}}';
  var beachMarker = new google.maps.Marker({
      position: {lat: 40.645037, lng: -73.880224},
      map: map,
      icon: image
    });
  }
 </script>
 <!-- google map js -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
 <!-- end google map js -->

@endsection