@extends('index')
@section('content')
  

<table>
        <tr>
            <td><a href="{{route('characters.all')}}">Obtener Personajes</a></td>
            
        </tr>
        <tr>
            <td><a href="{{route('episodes.all')}}">Obtener Episodio</a></td>
            
        </tr>
        <tr>
            <td><a href="https://">Obtener Ubicacion</a></td>
            
        </tr>
        
    </table>
    @stop