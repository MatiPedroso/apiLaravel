@include('nav')
<div class="container ">
<table class="table table-striped mt-3">
    <div>
        @include('filterEpisode')
    </div >
   
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Fecha estreno</th>
            <th>Episodio</th>
            <th><a href="{{ route('download.excel' , ['data'=>serialize($episodes)] ) }}" class="btn btn-outline-success">Descargar Excel</a></th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($episodes as $episode)
        <tr>
            <td>{{ $episode->name }}</td>
            <td>{{ $episode->air_date }}</td>
            <td>{{ $episode->episode }}</td>
            <td><a href="{{ route('episode.show', ['id' => $episode->id]) }}" class="btn btn-primary">Ver protagonistas</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
