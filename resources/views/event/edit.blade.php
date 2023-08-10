@extends('master.index')

@section('editEvent')
<div class="container-fluid py-5">
	<div class="card shadow">
		<div class="card-body">
			<form action="/updateEvent/{{$data->id}}" method="post" enctype="multipart/form-data">
				@csrf	
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Judul</label>
				  <input type="text" name="judul" value="{{$data->judul}}" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
				  <textarea class="form-control" name="deskripsi" value="" id="exampleFormControlTextarea1" rows="3">{{$data->deskripsi}}</textarea>
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
				  <input type="text" name="lokasi" value="{{$data->lokasi}}" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="date mb-3" data-provide="datepicker">
					<label for="exampleFormControlTextarea1" class="form-label">Tanggal Event</label>
				    <input type="date" name="tanggal_event" value="{{$data->tanggal_event}}" class="form-control">
				</div>
				<div class="mb-3">
				  <label for="formFileMultiple" class="form-label">Gambar</label>
				  <input class="form-control" name="gambar" type="file" id="formFileMultiple">
				 	<p style="margin-left:5rem;">{{('foto_event / '. $data->gambar)}}</p>
				</div>

				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
			
		</div>
	</div>
</div>
	
@endsection