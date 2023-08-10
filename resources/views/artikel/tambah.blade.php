@extends('master.index')

@section('tambahArtikel')
<div class="container-fluid py-5">
	<div class="card shadow">
		<div class="card-body">
			<form action="{{route('addArtikel')}}" method="post">
				@csrf
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Judul</label>
				  <input type="text" name="judul" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
				  <textarea class="form-control" name="konten" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<div class="date mb-3" data-provide="datepicker">
					<label for="exampleFormControlTextarea1" class="form-label">Tanggal Publikasi</label>
				    <input type="date" name="tanggal_publikasi" class="form-control">
				</div>

				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
			
		</div>
	</div>
</div>
	
@endsection