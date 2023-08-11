@extends('halamanDepan.index')

@section('event')
  <div class="row mt-5">
    @foreach($event as $row)
        <div class="col-sm-3">
            <div class="card shadow" style="width: 18rem;">
                <img src="foto_event/{{$row->gambar}}" alt="">
                <div class="card-body">
                    <p class="card-text">{{$row->judul}}</p>
                    <p class="card-text">{{$row->deskripsi}}</p>
                    <p class="card-text">{{$row->lokasi}}</p>
                    <p class="card-text">{{$row->tanggal_event}}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection