@include('nav')
<div class="container ">
<table class="table table-striped mt-3">
    <div class="filters">
        @include('filterCharacter')
    </div>
    
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Especie</th>
            <th>Género</th>
            <th><a href="{{ route('download.excel' , ['data'=>serialize($characteres)] ) }}" class="btn btn-outline-success" >Descargar Excel</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($characteres as $character)
        <tr>
            <td>{{ $character->name }}</td>
            <td>{{ $character->status }}</td>
            <td>{{ $character->species }}</td>
            <td>{{ $character->gender }}</td>
            <td><a href="{{ route('character.show', ['id' => $character->id]) }}" class="btn btn-primary">Ver Personaje</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div> 


    



  



