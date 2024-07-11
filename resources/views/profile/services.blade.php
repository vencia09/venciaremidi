@extends('profile.layouts.main')

@section('content')
    <!------------------- LAYANAN KAMI ------------------------>
		<section id="menu--layanan">
			<div class="container">
				<h2 class="title-section text-center mt-4 mb-2 mx-auto">Portofolio</h2>
				<p class="headline-paragraph text-black-50 text-center mx-auto" style="max-width: 800px">
					
				</p>
				<!-- baris kedua -->
				<div class="row mt-5 mb-5 gap-3 gap-lg-0 gy-0 gy-lg-4">
					<!-- kotak 1 -->
                    @foreach ($layanan as $data)
                        <div class="col-lg-6">
                            <div class="--box-layanan shadow-sm border border-primary d-flex justify-content-between align-items-center">
                                <img src="/images/layanan/{{ $data->image }}" alt="" width="130" />
                                <div class="ms-3">
                                    <h3>{{ $data->name }}</h3>
                                    <p class="headline-paragraph text-black-50">{{ $data->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</section>
		<!------------------- END LAYANAN KAMI ------------------------>

		

@endsection
