<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/map.css') }}">

{{-- <div class="legend">

    <div class="legend-item montSerraFont mx-3">
        <div class="legend-color" style="background-color: #F94144;">Garage</div>

    </div>
    <div class="legend-item montSerraFont mx-3">
        <div class="legend-color" style="background-color: #90BE6D;">Appart T1</div>

    </div>
    <div class="legend-item montSerraFont mx-3">
        <div class="legend-color" style="background-color: #43AA8B;">Appart T2</div>

    </div>
    <div class="legend-item montSerraFont mx-3">
        <div class="legend-color" style="background-color: #4D908E;">Appart T3</div>

    </div>
    <div class="legend-item montSerraFont mx-3">
        <div class="legend-color" style="background-color: #577590;">Appart T4</div>

    </div>
    <div class="legend-item montSerraFont mx-3">
        <div class="legend-color" style="background-color: #277DA1;">Appart T5</div>

    </div>
    <div class="legend-item montSerraFont mx-3">
        <div class="legend-color" style="background-color: #F8961E;">Villa</div>
    </div>
</div> --}}


<div class="container">
    <div class="row mb-2">
        <div class="col-1">
            @if (auth()->check())
                <!-- Vérifie si l'utilisateur est connecté -->
                <div>
                    <a href="{{ url('/index') }}" class="buttonSvgStyle  d-flex justify-content-start mt-2"
                        title="Index" data-toggle="tooltip"><img
                            src="{{ asset('images/button/address-book-solid.svg') }}"></a>
                </div>
            @else
                <div>
                    <a href="{{ url('/login') }}" class="buttonSvgStyle  d-flex justify-content-start mt-2"
                        title="Connexion" data-toggle="tooltip"><img
                            src="{{ asset('images/button/right-to-bracket-solid.svg') }}"></a>
                </div>
            @endif
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-md-2 col-4 mt-2">
                    <div class="legend-item montSerraFont ">
                        <div class="legend-color1" style="background-color: #F94144;"></div>
                        <span class="legend-label">Garage</span>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-2">
                    <div class="legend-item montSerraFont ">
                        <div class="legend-color1" style="background-color: #90BE6D;"></div>
                        <span class="legend-label">Appart T1</span>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-2">
                    <div class="legend-item montSerraFont ">
                        <div class="legend-color1" style="background-color: #43AA8B;"></div>
                        <span class="legend-label">Appart T2</span>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-2">
                    <div class="legend-item montSerraFont">
                        <div class="legend-color1" style="background-color: #4D908E;"></div>
                        <span class="legend-label">Appart T3</span>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-2">
                    <div class="legend-item montSerraFont">
                        <div class="legend-color1" style="background-color: #577590;"></div>
                        <span class="legend-label">Appart T4</span>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-2">
                    <div class="legend-item montSerraFont">
                        <div class="legend-color1" style="background-color: #277DA1;"></div>
                        <span class="legend-label">Appart T5</span>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-2">
                    <div class="legend-item montSerraFont">
                        <div class="legend-color1" style="background-color: #F8961E;"></div>
                        <span class="legend-label">Villa</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-1 mt-2">
            <a href="{{ 'mapByScis' }}" class="buttonSvgStyle  d-flex justify-content-end" title="Carte par SCI"
                data-toggle="tooltip"><img src="{{ asset('images/button/users-between-lines-solid.svg') }}"
                    alt=""></a>
        </div>
    </div>
</div>










<div id="map" class="map"></div>



<div class="container-fluid">
    
        <div class="col-12 mx-auto text-center">
            <div class="row">
            <div class="col-md-6 col-12">
                <div class="table-responsive">
                    <div class=" mt-3">
                        <table class="table table_property">
                            <thead>
                                <tr>
                                    <th class="t_title">SCI</th>
                                    <th class="t_title">N-1</th>
                                    <th class="t_title">N-2</th>
                                    <th class="t_title">N-3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ number_format($numberOfSCIs, 0, ',', ' ') }}</td>
                                    <td>{{ number_format($totalRevenue1, 2, ',', ' ') }}</td>
                                    <td>{{ number_format($totalRevenue2, 2, ',', ' ') }}</td>
                                    <td>{{ number_format($totalRevenue3, 2, ',', ' ') }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="table-responsive">
                    <div class=" mt-3">
                        <table class="table table_property">
                            <thead>
                                <tr>
                                    
                                    <th class="t_title">Garage</th>
                                    <th class="t_title">T1</th>
                                    <th class="t_title">T2</th>
                                    <th class="t_title">T3</th>
                                    <th class="t_title">T4</th>
                                    <th class="t_title">T5</th>
                                    <th class="t_title">Villa</th>
                                    <th class="t_title">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>{{ $totalGarage }}</td>
                                    <td>{{ $totalT1 }}</td>
                                    <td>{{ $totalT2 }}</td>
                                    <td>{{ $totalT3 }}</td>
                                    <td>{{ $totalT4 }}</td>
                                    <td>{{ $totalT5 }}</td>
                                    <td>{{ $totalVilla }}</td>
                                    <td>{{ $totalProperties }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>








<div class="marker" data-label="A"></div>

<script src={{ asset('/js/fetchingData.js') }}></script>
<script src={{ asset('/js/map.js') }}></script>
<script src={{ asset('/js/animation.js') }}></script>
<script src={{ asset('/js/mapApplication.js') }}></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiKGYNw5UqK24iZPhxr_5uML3q_8KZjn0&callback=initMap" async
    defer></script>
