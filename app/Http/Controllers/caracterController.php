<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Exports\CaracterExport;

  class caracterController extends Controller
{



  public function getCaracter(){
    $client = new Client();
      $API = env("URL_API_RyM");
    $response = $client->request('GET', $API);
    $character = json_decode($response->getBody());
        return view("caracter", [ "characters" => $character->results]);

  }  

  public function getCaracterById($id){
    $client = new Client();
    $API = env("URL_API_RyM");
    $response = $client->request('GET', $API."/{$id}");
    $character = json_decode($response->getBody());
      return view("caracterById", ["caracter" => $character]);
  
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
