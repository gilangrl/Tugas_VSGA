@extends('master.index')

@section('artikel')
<div class="py-5">
	<a href="{{route('Tambahartikel')}}" class="btn btn-primary mb-3">Tambah</a>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Judul</th>
	      <th scope="col">Konten</th>
	      <th scope="col">Tanggal Publikasi</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($data as $row)
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td>{{$row->judul}}</td>
	      <td>{{$row->konten}}</td>
	      <td>{{$row->tanggal_publikasi}}</td>
	      <td>
	      	<a href="editArtikel/{{$row->id}}" class="btn btn-info">
	      		<i class="fa-solid fa-pencil"></i>
	      	</a>
	      	<a href="hapusArtikel/{{$row->id}}" class="btn btn-danger">
	      		<i class="fa-solid fa-trash"></i>
	      	</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>
	
@endsection