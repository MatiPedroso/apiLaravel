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
        @foreach ($characters as $caracter)
        <tr>
            <td>{{ $caracter->name }}</td>
            <td>{{ $caracter->status }}</td>
            <td>{{ $caracter->species }}</td>
            <td>{{ $caracter->gender }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
