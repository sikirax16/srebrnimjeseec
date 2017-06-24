@extends('layouts.master')

@section('content')
    <div class="sadrzaj">
        <h1>galerija</h1>
        <div class="container-fluid gallery-container">

            <div class="tz-gallery">

                <div class="row">
                    @foreach($images as $image)
                        <div class="col-sm-4 col-md-3">
                            <a class="lightbox" href="frizure\{{ $image->original_filename }}">
                                <img src="frizure\{{ $image->original_filename }}" alt="{{ $image->id }}">
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>

@endsection