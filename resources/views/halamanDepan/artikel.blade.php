@extends('halamanDepan.index')

@section('artikel')
  <div class="row mt-5">
    @foreach($data as $row)
        <div class="col-sm-3">
            <div class="card shadow" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{$row->judul}}</p>
                    <p class="card-text">{{$row->konten}}</p>
                    <p class="card-text">{{$row->tanggal_publikasi}}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection