@extends('profile.layouts.main')

@section('content')
    <!------------------- CAROUSEL ------------------------>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/beranda/image1.png" class="d-block w-100" alt="..." />
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image-pelanggan.png" class="d-block w-100" alt="..." />
				</div>
				<div class="carousel-item">
					<img src="image1.jpg" class="d-block w-100" alt="..." />
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<!------------------- END CAROUSEL ------------------------>

		<!------------------- JUMBOTRON DESC PROFILE ------------------------>
		<div class="container my-5 py-md-5">
			<div class="row mt-md-5 d-flex justify-content-center">
				<div class="col-lg-7 text-center">
					<h1 class="headline-slogan">VENCIA JONJONLER</h1>
					<p class="headline-paragraph text-black-50 pt-2 px-2">
						Selamat Datang di My Profil
					</p>
					<div class="d-flex justify-content-center">
						<a href="#r-more" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<!------------------- END JUMBOTRON DESC PROFILE ------------------------>
		<hr class="invisible" id="r-more" />

		<!------------------- BERANDA THIRD SECTION  ------------------------>
		<div class="container mb-5">
			<div class="row d-flex justify-content-between align-items-center">
				<div class="col-lg-6">
					<h2 class="title-section mx-3">About Me</h2>
					<p class="headline-paragraph text-black-50 mx-3">
						Hallo, Saya Vencia . Saya adalah seorang analisis sistem berpengalaman dengan latar belakang kuat untuk pengembangan perangkat lunak 
						keahlian saya terletak pada kemampuan untuk memahami kebutuhan bisnis secara mendalam . Saya memiliki ketrampilan yang luas dalam pemodelan sistem .
						di luar pekerjaan, saya senang sekali mengikuti perkembangan terbaru dalam teknologi dan berpartipasi dalam komonitas teknologi lokar untuk berbargi pengetahuan dan belajar dari sesama profesional.
					</p>
				</div>
				
			</div>
		</div>
		<!------------------- END BERANDA THIRD SECTION  ------------------------>

		<!------------------- BERANDA FOURTH SECTION  ------------------------>
		
						
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		

		
@endsection
