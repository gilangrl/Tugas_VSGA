@extends('master.index')

@section('editGallery')
<div class="container-fluid py-5">
	<div class="card shadow">
		<div class="card-body">
			<form action="/updateGallery/{{$data->id}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
				  <input type="text" name="deskripsi" value="{{$data->deskripsi}}" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="mb-3">
				  <label for="formFileMultiple" class="form-label">Gambar</label>
				  <input class="form-control" name="gambar" type="file" id="formFileMultiple">
				  <p style="margin-left:5rem;">{{('gallery_foto / '. $data->gambar)}}</p>
				</div>

				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
			
		</div>
	</div>
</div>
	
@endsection