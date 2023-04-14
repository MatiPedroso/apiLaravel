@include('nav')

<div class="container mt-5">
    <div class="row">

        <div class="row cards" style="width: auto; margin: auto auto;">
            @foreach ($characteres as $character)
            <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-5" style="max-width:319px;">
                <img src="{{ $character->image }}" class="card-img-top" alt="{{ $character->name }}" />

                <div class="card-block">
                <h4 class="card-title">{{ $character->name }}</h4>
                <p class="card-text">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Estado: </b>{{$character->status}}</li>
                        <li class="list-group-item"><b>Especie:</b>{{$character->species}}</li>                
                        <li class="list-group-item"><b>Origen: </b>{{$character->origin->name }}</li>
                        <li class="list-group-item"><b>Ubicación: </b> {{$character->location->name }}</li>                    
                    </ul>
                </p>
                </div>
            </div>
            @endforeach
        
        </div>
    </div>
</div>