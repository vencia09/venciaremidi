@extends('profile.layouts.main')

@section('content')
    

		<!------------------- FAQ ------------------------>
		<section>
			<div class="container my-5">
				<h3 class="title-section mb-4 text-black fs-3 text-center"><span class="text-primary">GENERAL</span> QUESTIONS</h3>

				<!-- Accordion  -->
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10">
						<div class="accordion" id="accordionExample">
                            @foreach ($faqs as $faq)
							<div class="accordion-item">
								<h2 class="accordion-header" id="{{ $faq->heading }}">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq->target }}" aria-expanded="false" aria-controls="{{ $faq->target }}">
										{{ $loop->iteration }} . {{ $faq->pertanyaan }}
									</button>
								</h2>
								<div id="{{ $faq->target }}" class="accordion-collapse collapse" aria-labelledby="{{ $faq->heading }}" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										{{ $faq->jawaban }}
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END FAQ ------------------------>
@endsection
