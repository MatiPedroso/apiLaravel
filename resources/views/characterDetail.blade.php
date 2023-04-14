@include('nav')

    
<div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ $data->image }}" alt="{{$data->name}}" srcset="" width="150px" class="card-img-top" >
                <div class="card-body">
                    <p class="card-text"><b>Nombre:</b> {{ $data->name }}</p>
                    <p class="card-text"><b>Estado: </b>{{ $data->status }}</p>
                    <p class="card-text"><b>Especie: </b> {{ $data->species }}</p>
                    <p class="card-text"><b>Género: </b>{{ $data->gender }}</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>                
        </div>
    </div>
</div>

