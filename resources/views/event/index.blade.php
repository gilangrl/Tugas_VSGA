@extends('master.index')

@section('event')
<div class="py-5">
	<a href="{{route('tambahEvent')}}" class="btn btn-primary mb-3">Tambah</a>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Judul</th>
	      <th scope="col">Deskripsi</th>
	      <th scope="col">Lokasi</th>
	      <th scope="col">Tanggal Event</th>
	      <th scope="col">Gambar</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($data as $row)
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td>{{$row->judul}}</td>
	      <td>{{$row->deskripsi}}</td>
	      <td>{{$row->lokasi}}</td>
	      <td>{{$row->tanggal_event}}</td>
	      <td>
	      	<img src="foto_event/{{$row->gambar}}" alt="" width="100">
	      </td>
	      <td>
	      	<a href="/editEvent/{{$row->id}}" class="btn btn-info">
	      		<i class="fa-solid fa-pencil"></i>
	      	</a>
	      	<a href="/hapusEvent/{{$row->id}}" class="btn btn-danger">
	      		<i class="fa-solid fa-trash"></i>
	      	</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>
	
@endsection