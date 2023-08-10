@extends('master.index')

@section('klien')
<div class="row mt-4">
	<div class="card shadow">
		<div class="card-body">
			<div class="col-lg-12">
				<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
				  <div class="carousel-indicators">
				    @foreach ($data as $key => $row)
				    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" @if ($key === 0) class="active" aria-current="true" @endif aria-label="Slide {{ $key + 1 }}"></button>
				    @endforeach
				  </div>
				  <div class="carousel-inner">
				    @foreach ($data as $key => $row)
				    <div class="carousel-item @if ($key === 0) active @endif" data-bs-interval="{{ $row['interval'] }}">
				      <img src="gallery_foto/{{$row->gambar}}" class="d-block" width="100%" height="500" alt="{{ $row['alt'] }}">
				      <div class="carousel-caption d-none d-md-block mt-5">
				        <p class="fw-bold mt-5">{{$row->deskripsi}}</p class="fw-5">
				      </div>
				    </div>
				    @endforeach
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>

			</div>
			
		</div>
	</div>
</div>
@endsection