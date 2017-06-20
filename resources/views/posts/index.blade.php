@extends('layouts.master')

@section('content')
<div class="sadrzaj">
{{--Početak carousel-a, prikaz tri glavne slike
--------------------------------------------------------------------------------------------}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner ">
                <div class="item active pomen">
                    <img src="/images/jumbotron/jumbotron1.png" alt="Srebrni Mjesec #1">
                    <div class="carousel-caption">
                        <h1>Ćerko tebi u</br>pomen</h1>
                    </div>
                </div>

                <div class="item salon">
                    <img src="/images/jumbotron/jumbotron2.png" alt="Srebrni Mjesec #2">
                    <div class="carousel-caption">
                        <h1>Novootvoreni salon</h1>
                        <h2>Srebrni Mjesec</h2>
                        {{--<a href="#" class="btn btn-default btn-xl">Saznaj više</a>--}}
                    </div>
                </div>

                <div class="item arena">
                    <img src="/images/jumbotron/jumbotron3.png" alt="Srebrni Mjesec #3">
                    <div class="carousel-caption">
                        <h1>Pronađi nas</h1>
                        <a href="#mjesto" class="btn btn-default btn-xl">Saznaj lokaciju</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon  glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
{{-----------------------------------------------------------------}}

{{--Promocija salona
--------------------------------------------------------------------------------------------}}
        <div class="container text-container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>O nama</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Salon je opremljen vrhunskom kvalitetom sa velikom ugodnošću u kojem su zaposlene 4 vrhunske frizerke od kojih su 2 majstorice i vrhunskom i kvalitetnom maserkom i kozmetičarkom.</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>U salonu Srebrni Mjesec možete dobiti sve najbolje usluge sa najnovijim vrstama boja bez amonijaka koje prekrivaju sijede, razne vrste svečanih frizura, sve vrste pramenova, bojanja, flambayage, ombre i sve frizure po želji.</p>
                </div>
            </div>
        </div>
{{-----------------------------------------------------------------}}



{{--Slike prostora
--------------------------------------------------------------------------------------------}}
        <div class="container-fluid img-container">
        <div class="row row-eq-height">
            <div class="col-xs-3">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/01.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/13.jpg" />
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/06.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/11.jpg" />
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/12.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/14.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-----------------------------------------------------------------}}



{{--Masaže u salonu
--------------------------------------------------------------------------------------------}}

{{--Općenito
--------------------------------------------------------------------------------------------}}
        <div class="container-fluid masage">
            <div class="row">
                <div class="col-xs-6 col-sm-7">
                    <h1>Masaža</h1>
                    <p>U Srebrnom Mjesecu možete uživati i opustiti se u našem kutku za masažu za koje će se pobrinuti naša vrhunska maserka sa svim vrhunskim masažama.</p>
                </div>
                <div class="col-xs-6 col-sm-5">
                    <img class="show-image" src="images/srebrni_mjesec/09.jpg" />
                </div>

            </div>
        </div>

{{--Ponuda masaža
--------------------------------------------------------------------------------------------}}
        <div class="container masage-ponuda">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Naša ponuda</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <p><i class="glyphicon glyphicon-ok"></i> aroma</p>
                    <p><i class="glyphicon glyphicon-ok"></i> sportske</p>
                    <p><i class="glyphicon glyphicon-ok"></i> klasična</p>
                    <p><i class="glyphicon glyphicon-ok"></i> antistresna</p>
                </div>
                <div class="col-xs-6 col-md-4">
                    <p><i class="glyphicon glyphicon-ok"></i> masaža glave</p>
                    <p><i class="glyphicon glyphicon-ok"></i> masaža lica</p>
                    <p><i class="glyphicon glyphicon-ok"></i> masaža vrata</p>
                    <p><i class="glyphicon glyphicon-ok"></i> anticelulitna</p>
                </div>
                <div class="col-xs-6 col-md-4">
                    <p><i class="glyphicon glyphicon-ok"></i> masaža stopala</p>
                    <p><i class="glyphicon glyphicon-ok"></i> kompletni tretman lica</p>
                    <p><i class="glyphicon glyphicon-ok"></i> novitet hotchocolate</p>
                </div>
            </div>
        </div>

{{--Promocija masaža
--------------------------------------------------------------------------------------------}}
        <div class="container masage-promotion">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="glyphicon glyphicon-star-empty"></i>
                    <p>Koristimo najbolje vrste ulja i svjetski poznate masaže sa 5 vrsta ulja.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="glyphicon glyphicon-plus-sign"></i>
                    <p>Izvodimo sve vrste depilacija, čupanja i farbanja obrva.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="glyphicon glyphicon-piggy-bank"></i>
                    <p>Za osobe koje nas posječuju više puta ima i poklon</br>(5 masaža + 1 gratis)</p>
                </div>
            </div>
        </div>
{{-----------------------------------------------------------------}}

{{--Drugi salon 5 Stars
--------------------------------------------------------------------------------------------}}
        <div class="container stars">
            <div class="row">
                <div class=" col-xs-6">
                        <img src="images/5stars/18.jpg" />
                </div>
                <div class="col-xs-6 text-center">
                    <h1>Frizerski salon</br>5 Stars</h1>
                    <button class="btn btn-default btn-xl" data-toggle="collapse" data-target="#5stars">Saznaj više</button>
                </div>
            </div>
        </div>

        <div id="5stars" class="container collapse stars">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>Uz naš glavni salon Srebrni Mjesec, imamo kapacitet za raditi više frizura istovremeno u dva salona.</p>
                </div>
            </div>
        </div>
{{-----------------------------------------------------------------}}


{{--Prikaz popusta
--------------------------------------------------------------------------------------------}}
        <div class="container-fluid popust">
            <div class="popust-content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h1>Popusti</h1>
                            <h2>Utorkom i Četvrtkom</h2>
                            <h2>do 15 %</h2>
                            <a href="cjenik" class="btn btn-default btn-xl">Pogledaj cijene</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

{{-----------------------------------------------------------------}}




{{--Google Maps Start
--------------------------------------------------------------------------------------------}}
        <div id="mjesto" class="container-fluid lokacija">
            <div class="row">
                <div class="col-xs-12">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>


        <script>
            function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(44.873239, 13.849367),
                    zoom:16,
                    scrollwheel: false
                };
                map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    //  Marker za salon Srebrni Mjesec
                srebrni_mjesec = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(44.8721746,13.84875569999997),
                    icon: 'http://m.schuepfen.ch/icons/helveticons/black/60/Pin-location.png'
                });
                infowindowSM = new google.maps.InfoWindow({
                    content:'<strong>Frizerski Salon Srebrni Mjesec</strong><br>Istarska 17 Pula<br>'
                });
                google.maps.event.addListener(srebrni_mjesec, 'click', function(){
                    infowindowSM.open(map,srebrni_mjesec);
                })
                infowindowSM.open(map,srebrni_mjesec);

    //  Marker za salon 5Stars
                stars = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(44.875189, 13.850461),
                    icon: 'http://m.schuepfen.ch/icons/helveticons/black/60/Pin-location.png'
                });
                infowindow = new google.maps.InfoWindow({
                    content:'<strong>Frizerski Salon 5 Stars</strong><br>Flavijevska 20 Pula<br>'
                });
                google.maps.event.addListener(stars, 'click', function(){
                    infowindow.open(map,stars);
                })
                infowindow.open(map,stars);


                //Resize Function
                google.maps.event.addDomListener(window, "resize", function() {
                    var center = map.getCenter();
                    google.maps.event.trigger(map, "resize");
                    map.setCenter(center);
                });
            }
            google.maps.event.addDomListener(window, 'load', myMap);
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwnQQXU3ZGZZR_vQc1n6bO8jVGvGcIU6M&callback=myMap"></script>

{{-----------------------------------------------------------------}}

</div>
@endsection