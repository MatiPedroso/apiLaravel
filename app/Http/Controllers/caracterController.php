<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
}


