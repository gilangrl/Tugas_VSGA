@extends('master.index')

@section('gallery')
<div class="py-5">
	<a href="{{route('tambahGallery')}}" class="btn btn-primary mb-3">Tambah</a>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Deskripsi</th>
	      <th scope="col">Gambar</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($data as $row)
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td>{{$row->deskripsi}}</td>
	      <td>
	      	<img src="gallery_foto/{{$row->gambar}}" alt="" width="100">
	      </td>
	      <td>
	      	<a href="/editGallery/{{$row->id}}" class="btn btn-info">
	      		<i class="fa-solid fa-pencil"></i>
	      	</a>
	      	<a href="/deleteGallery/{{$row->id}}" class="btn btn-danger">
	      		<i class="fa-solid fa-trash"></i>
	      	</a>
	      </td>
	    </tr>
		@endforeach
	  </tbody>
	</table>
</div>
	
@endsection