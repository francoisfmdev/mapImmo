<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/map.css') }}">

<div class="legend">
    <a href="{{'mapByScis'}}">     Retour Carte des biens par SCI     </a>
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
    
    @if (auth()->check())
        <!-- Vérifie si l'utilisateur est connecté -->
        <div>
            <a href="{{ url('/index') }}">Index</a>
        </div>
    @else
        <div>
            <a href="{{ url('/login') }}">Connexion</a>
        </div>
    @endif
</div>

<div id="map"></div>



<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-auto text-center">
            <div class=" mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre de SCI</th>
                            <th>CA n-1</th>
                            <th>CA n-2</th>
                            <th>CA n-3</th>
                            <th>Nombre de bien</th>
                            <th>Garage</th>
                            <th>T1</th>
                            <th>T2</th>
                            <th>T3</th>
                            <th>T4</th>
                            <th>T5</th>
                            <th>Villa</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ number_format($numberOfSCIs, 0, ',', ' ') }}</td>
                            <td>{{ number_format($totalRevenue1, 2, ',', ' ') }}</td>
                            <td>{{ number_format($totalRevenue2, 2, ',', ' ') }}</td>
                            <td>{{ number_format($totalRevenue3, 2, ',', ' ') }}</td>
                            <td>{{ $totalProperties }}</td>
                            <td>{{ $totalGarage }}</td>
                            <td>{{ $totalT1 }}</td>
                            <td>{{ $totalT2 }}</td>
                            <td>{{ $totalT3 }}</td>
                            <td>{{ $totalT4 }}</td>
                            <td>{{ $totalT5 }}</td>
                            <td>{{ $totalVilla }}</td>
                        </tr>
                    </tbody>
                </table>
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
