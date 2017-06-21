@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{--dashboard za dodavanje i uklanjanje slika
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Slike</div>

                <div class="panel-body">

                    @if(Session::has('success'))
                        <div class="alert-box success">
                            <h2>{!! Session::get('success') !!}</h2>
                        </div>
                    @endif

                    <div class="form-group">
                        <h2>Dodaj slike</h2>
                        {!! Form::open(array('url'=>'home/upload','method'=>'POST', 'files'=>true)) !!}
                        {!! Form::file('images[]', array('multiple'=>true)) !!}
                        <p>{!! $errors->first('images') !!}</p>
                        @if(Session::has('error'))
                            <p>{!! Session::get('error') !!}</p>
                        @endif

                        {!! Form::submit('Submit', array('class'=>'btn btn-lg btn primary col-md-4'))!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        {{--dashboard za dodavanje i mjenjanje cijena frizura
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cijene salona</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
        {{--dashboard za dodavanje i mjenjanje cijena masaža
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cijene masaža</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
        {{--dashboard za dodavanje i mjenjanje cijena depilacija
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cijene depilacija</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
