@extends('profile.layouts.main')

@section('content')
    @php
        // Mengubah nomor telepon ke format internasional (jika diperlukan)
        $no_hp = $profilecompany->no_hp;
        if (substr($no_hp, 0, 1) === '0') {
            $no_hp = '62' . substr($no_hp, 1);
        }
    @endphp
    <!------------------- KONTAK KAMI SECTION ------------------------>
		<section class="--kontak-section">
			<div class="container my-5">
				<div class="row d-flex justify-content-center align-items-center ps-2 ps-lg-0">
					<div class="col-lg-6">
						<h2 class="title-section">Hubungi Saya</h2>
						<div class="headline-paragraph text-black-50">
							<p>No. Handphone: 082211914237</p>
							<p>Email: venciajonjonler@gmail.com</p>
							<p>Alamat: Jl Barada</p>
						</div>
					
		</section>
		<!------------------- END KONTAK KAMI SECTION ------------------------>
@endsection
