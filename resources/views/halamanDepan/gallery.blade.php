@extends('halamanDepan.index')

@section('gallery')
  <div class="row mt-5">
    @foreach($gallery as $row)
        <div class="col-sm-3">
            <div class="card shadow" style="width: 18rem;">
                <img src="gallery_foto/{{$row->gambar}}" alt="">
                <div class="card-body">
                    <p class="card-text">{{$row->deskripsi}}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection