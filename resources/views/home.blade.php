@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row stiling">
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h4>{!! Session::get('success') !!}</h4>
                </div>
            @endif
            @if(Session::has('error'))
                <h5>{!! Session::get('error') !!}</h5>
            @endif
        </div>
        {{--dashboard za dodavanje i uklanjanje slika
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><b>Slike</b></h3></div>

                <div class="panel-body">

                    <div class="row">
                        @foreach($images as $image)
                            <div class="col-sm-4 col-md-3 slike-dashboard">
                                <img src="frizure\{{ $image->original_filename }}" alt="{{ $image->id }}">
                                {!! Form::open(array('url'=>'home/upload_de','method'=>'DELETE')) !!}
                                {{ Form::hidden('id', $image->id) }}
                                {!! Form::submit('Delete', array('class'=>'btn btn-lg btn-danger col-xs-12'))!!}
                                {!! Form::close() !!}
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <h2>Dodaj slike</h2><hr>
                        {!! Form::open(array('url'=>'home/upload','method'=>'POST', 'files'=>true)) !!}
                        {!! Form::file('images[]', array('multiple'=>true)) !!}
                        <p>{!! $errors->first('images') !!}</p>

                        {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-4'))!!}
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
                <div class="panel-heading"><h3><b>Cijene salona</b></h3></div>

                <div class="panel-body">

                    <div class="row">
                        @php ($counter = 0)
                        <div class="form-group">
                        @foreach($haircut as $price)
                                @if($counter%2==0)
                                    <div class="col-xs-12 form-row">
                                @php ($counter++)
                                @else
                                    <div class="col-xs-12 dashboard-row form-row">
                                    @php ($counter++)
                                @endif
                                <div class="form-group">
                                    {!! Form::open(array('url'=>'home/frizura_up','method'=>'PUT')) !!}
                                    <div class="col-md-7">
                                        {{ Form::hidden('id', $price->id) }}
                                        <b>Naziv:</b> {!! Form::text('naziv_f', $price->naziv ) !!}
                                        <b>Cijena:</b> {!! Form::number('cijena_f', $price->cijena) !!}kn
                                    </div>
                                    {!! Form::submit('Update', array('class'=>'btn btn-lg btn-success col-xs-2 gumb'))!!}

                                    {!! Form::close() !!}


                                    {!! Form::open(array('url'=>'home/frizura_de','method'=>'DELETE')) !!}
                                    {{ Form::hidden('id', $price->id) }}
                                    {!! Form::submit('Delete', array('class'=>'btn btn-lg btn-danger col-xs-2'))!!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>


                    <div class="form-group">
                        <h2>Dodaj novu cijenu frizure</h2><hr>
                        {!! Form::open(array('url'=>'home/frizura','method'=>'POST', )) !!}
                        <div class="col-xs-6">
                            <b>Naziv:</b> {!! Form::text('naziv_f') !!}
                            <b>Cijena:</b> {!! Form::number('cijena_f') !!}kn
                        </div>
                        {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-xs-3'))!!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        {{--dashboard za dodavanje i mjenjanje cijena masaža
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><b>Cijene masaža</b></h3></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            @php ($counter = 0)
                            @foreach($massage as $price)
                                    @if($counter%2==0)
                                        <div class="col-xs-12 form-row">
                                        @php ($counter++)
                                    @else
                                        <div class="col-xs-12 dashboard-row form-row">
                                        @php ($counter++)
                                    @endif
                                    {!! Form::open(array('url'=>'home/masaza_up','method'=>'PUT')) !!}
                                    <div class="col-md-9">
                                        {{ Form::hidden('id', $price->id) }}
                                        <b>Naziv:</b> {!! Form::text('naziv_m', $price->naziv) !!}
                                        <b>Trajanje:</b> {!! Form::number('trajanje_m', $price->trajanje) !!}min
                                        <b>Cijena:</b> {!! Form::number('cijena_m', $price->cijena) !!}kn
                                    </div>
                                    {!! Form::submit('Update', array('class'=>'btn btn-lg btn-success col-md-1 gumb'))!!}
                                    {!! Form::close() !!}

                                    {!! Form::open(array('url'=>'home/masaza_de','method'=>'DELETE')) !!}
                                    {{ Form::hidden('id', $price->id) }}
                                    {!! Form::submit('Delete', array('class'=>'btn btn-lg btn-danger col-md-1 '))!!}
                                    {!! Form::close() !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <h2>Dodaj novu cijenu masaze</h2><hr>
                        {!! Form::open(array('url'=>'home/masaza','method'=>'POST')) !!}
                        <div class="col-xs-9">
                            <b>Naziv:</b> {!! Form::text('naziv_m') !!}
                            <b>Trajanje:</b> {!! Form::number('trajanje_m') !!}min
                            <b>Cijena:</b> {!! Form::number('cijena_m') !!}kn
                        </div>
                        {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-2'))!!}
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
        {{--dashboard za dodavanje i mjenjanje cijena depilacija
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><b>Cijene depilacija</b></h3></div>

                <div class="panel-body">

                    <div class="row">
                        <div class="form-group">
                            @php ($counter = 0)
                            @foreach($depilation as $price)
                                @if($counter%2==0)
                                    <div class="col-xs-12 form-row">
                                @php ($counter++)
                                @else
                                    <div class="col-xs-12 dashboard-row form-row">
                                    @php ($counter++)
                                @endif
                                    {!! Form::open(array('url'=>'home/depilacija_up','method'=>'PUT')) !!}
                                    <div class="col-md-9">
                                        {{ Form::hidden('id', $price->id) }}
                                        <b>Naziv:</b> {!! Form::text('naziv_d', $price->naziv) !!}
                                        <b>Cijena:</b> {!! Form::number('cijena_d', $price->cijena) !!}kn
                                        <b>+ (vosak)</b> {!! Form::number('vosak', $price->vosak) !!}kn
                                    </div>
                                    {!! Form::submit('Update', array('class'=>'btn btn-lg btn-success col-md-1 gumb'))!!}
                                    {!! Form::close() !!}

                                    {!! Form::open(array('url'=>'home/depilacija_de','method'=>'DELETE')) !!}
                                    {{ Form::hidden('id', $price->id) }}
                                    {!! Form::submit('Delete', array('class'=>'btn btn-lg btn-danger col-md-1 gumb'))!!}
                                    {!! Form::close() !!}
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="form-group">
                        <h2>Dodaj novu cijenu depilacije</h2><hr>
                        {!! Form::open(array('url'=>'home/depilacija','method'=>'POST')) !!}
                        <div class="col-xs-9">
                            <b>Naziv:</b> {!! Form::text('naziv_d') !!}
                            <b>Cijena:</b> {!! Form::number('cijena_d') !!}kn
                            <b>+ (vosak)</b> {!! Form::number('vosak') !!}kn
                        </div>
                        {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-2'))!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>


            {{--dashboard za dodavanje i uklanjanje oglasa
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
            <div class="col-md-12 oglasi">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Oglasi</b></h3></div>

                    <div class="panel-body">

                        <div class="row">
                            @php ($counter = 0)
                            @foreach($oglasi as $part)
                                @if($counter%2==0)
                                    <div class="col-xs-12 form-row">
                                    @php ($counter++)
                                @else
                                    <div class="col-xs-12 dashboard-row form-row">
                                    @php ($counter++)
                                @endif
                                    {!! Form::open(array('url'=>'home/oglas_update','method'=>'PUT')) !!}
                                    {{ Form::hidden('id', $part->id) }}
                                    <b>Naslov:</b> {!! Form::text('naslov', $part->naslov,['class'=>'col-xs-12 naslov']) !!}

                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
                                            <img src="oglasi\{{ $part->original_filename }}" alt="{{ $part->id }}">
                                        </div>
                                    </div>
                                    <b>Opis:</b> {!! Form::textarea('opis', $part->opis, ['size' => '30x4', 'class' => 'form-control form_opis']) !!}
                                    <b>Kontakt:</b> {!! Form::text('kontakt', $part->kontakt, ['class' => 'form-control']) !!}
                                    </br>
                                    {!! Form::submit('Update', array('class'=>'btn btn-lg btn-success col-xs-5 col-xs-offset-1 gumb'))!!}
                                    {!! Form::close() !!}


                                    {!! Form::open(array('url'=>'home/oglas_delete','method'=>'DELETE')) !!}
                                    {{ Form::hidden('id', $part->id) }}
                                    {!! Form::submit('Delete', array('class'=>'btn btn-lg btn-danger col-xs-5 gumb'))!!}
                                    {!! Form::close() !!}
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <h2>Dodaj novi oglas</h2><hr>
                            {!! Form::open(array('url'=>'home/oglas_add','method'=>'POST', 'files'=>true)) !!}
                                <div class="oglas-add">
                                    <b>Naslov:</b> {!! Form::text('naslov', null, ['class' => 'form-control']) !!}
                                    <b>Opis:</b> {!! Form::textarea('opis', null, ['size' => '30x4', 'class' => 'form-control']) !!}
                                    <b>Kontakt:</b> {!! Form::text('kontakt', null, ['class' => 'form-control']) !!}
                                </div>
                                <div>
                                    <b>Odaberi sliku:</b>{!! Form::file('image') !!}
                                </div>
                            </br>
                            {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-4 gumb'))!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
