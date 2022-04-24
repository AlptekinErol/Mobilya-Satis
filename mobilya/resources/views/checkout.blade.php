<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Check Out</title>

	
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/assetssec/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/assetssec/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/assetssec/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/assetssec/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/assetssec/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/assetssec/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/assetssec/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/assetssec/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>M O B İ L Y A</p>
						<h1>Ürün Siparişi</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Fatura Adresi
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="index.html">
						        		<p><input type="text" placeholder="İsim"></p>
						        		<p><input type="email" placeholder="Email"></p>
						        		<p><input type="text" placeholder="Adres"></p>
						        		<p><input type="tel" placeholder="Telefon No"></p>
						        		<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Sipariş Notunuzu Yazabilirsiniz"></textarea></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Sipariş Adresi
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">
						        	<p>Your shipping address form is here.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Kart Detayları
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<p>Your card details goes here.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Sipariş Detayı</th>
									<th>Fiyat</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Ürün</td>
									<td>Toplam</td>
								</tr>
								<tr>
									<td>Çalışma Sandalyesi</td>
									<td>$85.00</td>
								</tr>
								<tr>
									<td>Kırmızı Koltuk</td>
									<td>$70.00</td>
								</tr>
								<tr>
									<td>Yeşil Sandalye</td>
									<td>$35.00</td>
								</tr>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Genel Toplam</td>
									<td>$190</td>
								</tr>
								<tr>
									<td>Nakliye</td>
									<td>$50</td>
								</tr>
								<tr>
									<td>Toplam</td>
									<td>$240</td>
								</tr>
							</tbody>
						</table>
						<a href="#" class="boxed-btn">Sipariş Ver</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	
	
	<!-- jquery -->
	<script src="assets/assetssec/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/assetssec/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/assetssec/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/assetssec/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/assetssec/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/assetssec/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/assetssec/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/assetssec/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/assetssec/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/assetssec/js/main.js"></script>

</body>
</html>