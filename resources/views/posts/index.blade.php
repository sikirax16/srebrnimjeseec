@extends('layouts.master')

@section('content')
<div class="sadrzaj2">
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
                        <h1>kćeri tebi u</br>pomen</h1>
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
                        <a href="#googleMap" class="btn btn-default btn-xl">Saznaj lokaciju</a>
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

            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/11.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/15.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/06.jpg" />
            </div>

            <div class="col-xs-8">
                <img src="images/5stars/20.jpg" />
            </div>
            {{--<div class="col-xs-6">--}}
            {{--<img src="images/srebrni_mjesec/16.jpg" />--}}
            {{--</div>--}}
            <div class="col-xs-4">
                <img src="images/5stars/17.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/5stars/19.jpg" />
            </div>

            <div class="col-xs-3">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/25.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/13.jpg" />
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/23.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/02.jpg" />
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/07.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/srebrni_mjesec/24.jpg" />
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
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/16.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/01.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/05.jpg" />
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

{{--Slike masaža 1. dio
--------------------------------------------------------------------------------------------}}
    <div class="container-fluid img-container dark">
        <div class="row row-eq-height">

            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/33.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/31.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/34.jpg" />
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

{{--Slike masaža 2. dio
--------------------------------------------------------------------------------------------}}
    <div class="container-fluid img-container">
        <div class="row row-eq-height">

            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/30.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/32.jpg" />
            </div>
            <div class="col-xs-4">
                <img src="images/srebrni_mjesec/35.jpg" />
            </div>
        </div>
    </div>

{{--Promocija masaža
--------------------------------------------------------------------------------------------}}
        <div class="container-fluid masage-promotion">
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

<div class="stars">
    <h1 class="text-center">Frizerski salon 5 Stars</h1>
    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-6">
                <img src="images/5stars/18.jpg" />
            </div>
            <div class="col-xs-6">

                <p>Frizerski salon 5 Stars otvoren je vec 17
                    godina u kome možete ostvariti sve vaše želje povodom frizerskih usluga sa svim mogućim popustima
                    i najnižim cjenama. </p>
                <p>Salon se nalazi u Flavijevskoj 20 dođite i posjetite nas i uvjerite se u
                    našu kvalitetu željno vas očekujemo.</p>
            </div>

        </div>
    </div>
</div>
{{-----------------------------------------------------------------}}


{{--Prikaz popusta
--------------------------------------------------------------------------------------------}}
       {{--<div class="container-fluid popust-img">--}}
           {{--<div class="row">--}}
               {{--<div class="col-xs-12">--}}
                   {{--<img class="popust-img" src="/images/5stars/21.jpg" />--}}
               {{--</div>--}}
           {{--</div>--}}
       {{--</div>--}}

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

        <div id="googleMap"></div>



        <script>
            function myMap() {


                    var mapProp= {
                    center:new google.maps.LatLng(44.873239, 13.849367),
                    zoom:16,
                    scrollwheel: false,
//                        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
//                        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
//                        styles: [{"featureType":"all","elementType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}]
                        styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]

                    };
                map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    //  Marker za salon Srebrni Mjesec
                srebrni_mjesec = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(44.8721746,13.84875569999997),
                    icon: 'images/pin.svg'
                });
                infowindowSM = new google.maps.InfoWindow({
                    content:'<strong>Frizerski Salon Srebrni Mjesec</strong><br>Istarska 17 Pula<br>'
                });
                google.maps.event.addListener(srebrni_mjesec, 'click', function(){
                    infowindowSM.open(map,srebrni_mjesec);
                });
                infowindowSM.open(map,srebrni_mjesec);

    //  Marker za salon 5Stars
                stars = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(44.875189, 13.850461),
                    icon: 'images/pin.svg'
                });
                infowindow = new google.maps.InfoWindow({
                    content:'<strong>Frizerski Salon 5 Stars</strong><br>Flavijevska 20 Pula<br>'
                });
                google.maps.event.addListener(stars, 'click', function(){
                    infowindow.open(map,stars);
                });
//                infowindow.open(map,stars);


                //Resize Function
                google.maps.event.addDomListener(window, "resize", function() {
                    var center = map.getCenter();
                    google.maps.event.trigger(map, "resize");
                    map.setCenter(center);
                });


                var markers = [srebrni_mjesec, stars];

                var newBoundary = new google.maps.LatLngBounds();

                for(index in markers){
                    var position = markers[index].position;
                    newBoundary.extend(position);
                }

                map.fitBounds(newBoundary);
            }
            google.maps.event.addDomListener(window, 'load', myMap);
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwnQQXU3ZGZZR_vQc1n6bO8jVGvGcIU6M&callback=myMap"></script>
{{-----------------------------------------------------------------}}

</div>
@endsection