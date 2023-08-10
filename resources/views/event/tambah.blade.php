@extends('master.index')

@section('tambahEvent')
<div class="container-fluid py-5">
	<div class="card shadow">
		<div class="card-body">
			<form action="{{route('addEvent')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Judul</label>
				  <input type="text" name="judul" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
				  <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
				  <input type="text" name="lokasi" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="date mb-3" data-provide="datepicker">
					<label for="exampleFormControlTextarea1" class="form-label">Tanggal Event</label>
				    <input type="date" name="tanggal_event" class="form-control">
				</div>
				<div class="mb-3">
				  <label for="formFileMultiple" class="form-label">Gambar</label>
				  <input class="form-control" name="gambar" type="file" id="formFileMultiple">
				</div>

				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
			
		</div>
	</div>
</div>
	
@endsection