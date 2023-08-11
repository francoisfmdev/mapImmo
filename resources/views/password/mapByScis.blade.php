<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/map.css') }}">

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
            <div class="row d-flex justify-content-center">
                @foreach ($users as $user)
                    <div class="legend-item montSerraFont col-3 mt-3 ">
                        <div class="legend-color1 " style="background-color:{{ $user->color }};"></div>
                        <span class="legend-label">{{ $user->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-1">
            <a href="{{ 'mapByProperties' }}" class="buttonSvgStyle d-flex justify-content-end mt-2"
                title="Carte par type de propriété" data-toggle="tooltip"><img
                    src="{{ asset('images/button/building-circle-arrow-right-solid.svg') }}" alt=""></a>
        </div>
    </div>
</div>


<div id="map"></div>

<div class="container text-center">
    <div class="row">
        <!-- ... Autres éléments ... -->

        <div class="col-md-12 mt-4 w-60">
            <button id="pauseButton" class="btn btn-primary w-60">Pause</button>
        </div>
    </div>
</div>

<div class="container">
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
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->revenue1 }}</td>
                                        <td>{{ $user->revenue2 }}</td>
                                        <td>{{ $user->revenue3 }}</td>

                                    </tr>
                                @endforeach
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
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->user_properties->where('type', 'Garage')->count() }}</td>
                                        <td>{{ $user->user_properties->where('type', 'T1')->count() }}</td>
                                        <td>{{ $user->user_properties->where('type', 'T2')->count() }}</td>
                                        <td>{{ $user->user_properties->where('type', 'T3')->count() }}</td>
                                        <td>{{ $user->user_properties->where('type', 'T4')->count() }}</td>
                                        <td>{{ $user->user_properties->where('type', 'T5')->count() }}</td>
                                        <td>{{ $user->user_properties->where('type', 'Villa')->count() }}</td>
                                        <td>{{ $user->user_properties->count() }}</td>
                                    </tr>
                                @endforeach
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
<script src={{ asset('/js/mapScis.js') }}></script>
<script src={{ asset('/js/animation.js') }}></script>
<script src={{ asset('/js/mapApplication.js') }}></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiKGYNw5UqK24iZPhxr_5uML3q_8KZjn0&callback=initMap" async
    defer>
</script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
    const pauseButton = document.getElementById("pauseButton");

    // Ajoute un gestionnaire d'événements pour le clic sur le bouton de pause
    pauseButton.addEventListener("click", function () {
        togglePause(); // Appelle la fonction pour mettre en pause ou reprendre l'animation

        // Mettez à jour le texte du bouton en fonction de l'état de la pause
        pauseButton.textContent = isPaused ? "Reprendre" : "Pause";
    });
    pauseButton.textContent = isPaused ? "Reprendre" : "Pause";
});
</script>
