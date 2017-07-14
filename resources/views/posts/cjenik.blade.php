@extends('layouts.master')

@section('content')
    <div class="sadrzaj">

        <h1>cjenik</h1>
        {{--prikaz cijena frizura
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        @if (!$haircut->isEmpty())
            <div class="container-fluid cjenik">

                <div class="row">
                    <div class="col-xs-2 dio">
                        <p>Cijene frizura</p>
                    </div>
                    <div class="col-xs-10 naziv">

                        <table class="table table-responsive">
                            <tbody>
                            <tr class="headline">
                                <td><p class="text-left text-uppercase text-primary">naziv </p></td>
                                <td><p class="text-right text-uppercase text-primary">cijena</p></td>
                            </tr>
                            @php ($counter = 0)
                            @foreach($haircut as $price)
                                @if($counter%2==0)
                                    <tr class="cjenik-row">
                                    @php ($counter++)
                                @else
                                    <tr>
                                        @php ($counter++)
                                        @endif
                                        <td><p class="text-left">{{ $price->naziv }}</p></td>
                                        <td><p class="text-right">{{ $price->cijena }} kn</p></td>
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
        {{--prikaz cijena masaza
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        @if (!$massage->isEmpty())
            <div class="container-fluid cjenik">
                <div class="row">
                    <div class="col-xs-2 dio">
                        <p>Cijene masaza</p>
                    </div>
                    <div class="col-xs-10 naziv">


                        <table class="table table-responsive">
                            <tbody>
                                <tr class="headline">
                                    <td><p class="text-left text-uppercase text-primary">naziv </p></td>
                                    <td><p class="text-center text-uppercase text-primary">trajanje</p></td>
                                    <td><p class="text-right text-uppercase text-primary">cijena</p></td>
                                </tr>
                                @php ($counter = 0)
                                @foreach($massage as $price)
                                    @if($counter%2==0)
                                        <tr class="cjenik-row">
                                        @php ($counter++)
                                    @else
                                        <tr>
                                            @php ($counter++)
                                            @endif
                                            <td><p class="text-left">{{ $price->naziv }}</p></td>
                                            @if($price->trajanje!=0)
                                                <td><p class="text-center">{{ $price->trajanje }} min</p></td>
                                            @else
                                                <td><p></p></td>
                                            @endif
                                            <td><p class="text-right">{{ $price->cijena }} kn</p></td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        @endif

        {{--prikaz cijena depilacija
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        @if (!$massage->isEmpty())
            <div class="container-fluid cjenik">
                <div class="row">
                    <div class="col-xs-2 dio">
                        <p>Cijene depilacija</p>
                    </div>
                    <div class="col-xs-10 naziv">


                        <table class="table table-responsive">
                            <tbody>
                                <tr class="headline">
                                    <td><p class="text-left text-uppercase text-primary">naziv </p></td>
                                    <td><p class="text-right text-uppercase text-primary">obična</p></td>
                                    <td><p class="text-right text-uppercase text-primary">s voskom</p></td>
                                </tr>
                            @php ($counter = 0)
                            @foreach($depilation as $price)
                                @if($counter%2==0)
                                    <tr class="cjenik-row">
                                    @php ($counter++)
                                @else
                                    <tr>
                                    @php ($counter++)
                                @endif
                                        <td><p class="text-left">{{ $price->naziv }}</p></td>
                                        <td><p class="text-right">{{ $price->cijena }} kn</p></td>
                                        @if($price->vosak != 0)
                                            <td><p class="text-right">{{ $price->vosak }} kn</p></td>
                                        @else
                                            <td><p></p></td>
                                        @endif
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif

        {{--OGLASI
--------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------}}
        @if (!$oglasi->isEmpty())
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Oglasi</h1>
                    </div>
                    <div class="col-xs-12">
                        @foreach($oglasi as $oglas)
                            <div class="row oglas">
                                @if($oglas->original_filename!="")
                                    <div class="col-xs-6">
                                        <img src="oglasi\{{ $oglas->original_filename }}" alt="{{ $oglas->id }}">
                                    </div>
                                    <div class="col-xs-6">
                                        <h1>{{ $oglas->naslov }}</h1>
                                        <p>{{ $oglas->opis }}</p>
                                        <p>{{ $oglas->kontakt }}</p>
                                    </div>
                                @else
                                    <div class="col-xs-12">
                                        <h1>{{ $oglas->naslov }}</h1>
                                        <p>{{ $oglas->opis }}</p>
                                        <p>{{ $oglas->kontakt }}</p>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif


    </div>
@endsection