<h1>Listado de personajes</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Especie</th>
            <th>Género</th>
        </tr>
    </thead>
    <tbody>
       @foreach($characters as $character)
        <tr>
            <td>{{ $character->name }}</td>
            <td>{{ $character->status }}</td>
            <td>{{ $character->species }}</td>
            <td>{{ $character->gender }}</td>
        </tr>
     @endforeach
    </tbody>        
</table>

<p>

<a href="{{ route('download.excel' , ['data'=>serialize($characters)] ) }}" >Descargar Excel</a>




  



