<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Exports\CaracterExport;

  class CharacterController extends Controller
{



  public function getCaracter(){
    $client = new Client();    
    try {
      $response = $client->request('GET', 'https://rickandmortyapi.com/api/character');
      $character = json_decode($response->getBody());
      return view("character", [ "characteres" => $character->results]);
      
    } catch (\Throwable $th) {
      return "Ocurrio un error al obtener los personajes";
    }

  }  

  public function getCaracterById($id){
    if(!is_numeric($id)) {
        return "El parámetro debe ser un número";
    }
    $client = new Client();
    
    try {
      $response = $client->request('GET', 'https://rickandmortyapi.com/api/character/' . $id, ['verify' => false]);        
        $data = json_decode($response->getBody());        
        return view('characterDetail', ['data' => $data]);
    }catch (RequestException $e) {
        return "El personaje con ID " . $id . " no fue encontrado.";
    }
  
  
  }
  public function filterCharacters(Request $request){
        
    $client = new Client();
    $name = $request->input('name');
    $status = $request->input('status');
    $gender = $request->input('gender');
    $url = 'https://rickandmortyapi.com/api/character/?';
    if ($name) {
        $url .= 'name=' . urlencode($name) . '&';
    }
    if ($status) {
        $url .= 'status=' . urlencode($status) . '&';
    }
    if ($gender) {
        $url .= 'gender=' . urlencode($gender) . '&';
    }
    try {
      $response = $client->request('GET', $url, ['verify' => false]);
      $data = json_decode($response->getBody());      
      return view('character', ['characteres' => $data->results]);
    } catch (\Throwable $th) {
      return "No se encontraron personajes con estos filtros.";
      
    }    
}

  public function downloadExcel(Request $request){
    
    $response = $request->data;
    $personajes = unserialize($response);

    // Crear una instancia de la clase PersonajesExport
    $export = new CaracterExport($personajes);
    
   // Generar el archivo Excel
    
    $excel = \Maatwebsite\Excel\Facades\Excel::raw($export, \Maatwebsite\Excel\Excel::XLSX);
    // Guardar el archivo Excel en el almacenamiento de Laravel

    $archivo = 'public/excel/personajes.xlsx';
    Storage::put($archivo, $excel);

    // Descargar el archivo Excel
    return Storage::download($archivo);
}

}
