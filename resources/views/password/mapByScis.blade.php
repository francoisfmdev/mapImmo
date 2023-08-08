<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/map.css') }}">

<div class="legend">
    <a href="{{'mapByProperties'}}">Retour carte des biens par type</a>
    @foreach ($users as $user)
        <div class="legend-item montSerraFont mx-3">
            <div class="legend-color" style="background-color:{{ $user->color }};">{{ $user->name }}</div>

        </div>
    @endforeach

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
        <div class="col-12 col-md-10 mx-auto text-center">
            <div class=" mt-5 table ">

                <table class="table">
                    <thead>
                        <tr>
                            <th class="t_title">Sci</th>
                            <th class="t_title">CA n-1</th>
                            <th class="t_title">CA n-2</th>
                            <th class="t_title">CA n-3</th>
                            <th class="t_title">Nombre de bien</th>
                            <th class="t_title">Garage</th>
                            <th class="t_title">T1</th>
                            <th class="t_title">T2</th>
                            <th class="t_title">T3</th>
                            <th class="t_title">T4</th>
                            <th class="t_title">T5</th>
                            <th class="t_title">Villa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->revenue1 }}</td>
                                <td>{{ $user->revenue2 }}</td>
                                <td>{{ $user->revenue3 }}</td>
                                <td>{{ $user->user_properties->count() }}</td>
                                <td>{{ $user->user_properties->where('type', 'Garage')->count() }}</td>
                                <td>{{ $user->user_properties->where('type', 'T1')->count() }}</td>
                                <td>{{ $user->user_properties->where('type', 'T2')->count() }}</td>
                                <td>{{ $user->user_properties->where('type', 'T3')->count() }}</td>
                                <td>{{ $user->user_properties->where('type', 'T4')->count() }}</td>
                                <td>{{ $user->user_properties->where('type', 'T5')->count() }}</td>
                                <td>{{ $user->user_properties->where('type', 'Villa')->count() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<div class="marker" data-label="A"></div>

<script src={{ asset('/js/fetchingData.js') }}></script>
<script src={{ asset('/js/mapScis.js') }}></script>
<script src={{ asset('/js/animation.js') }}></script>
<script src={{ asset('/js/mapApplication.js') }}></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiKGYNw5UqK24iZPhxr_5uML3q_8KZjn0&callback=initMap" async
    defer></script>
