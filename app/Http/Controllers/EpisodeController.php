<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EpisodeController extends Controller
{
    public function getAllEpisodes()
    {
        $client = new Client();
        try {
           $response = $client->request('GET', 'https://rickandmortyapi.com/api/episode/', ['verify' => false]);
           $data = json_decode($response->getBody());        
            return view('episode ', ['episodes' => $data->results]);
       } catch (\Throwable $th) {
            return "Ocurrio un error al obtener los episodios.";
       }
    }

    public function getEpisodeById($id)
    {
        if (!is_numeric($id)) {
            return "El parámetro debe ser un número";
        }
        $client = new Client();
        
        try {
        $response = $client->request('GET', 'https://rickandmortyapi.com/api/episode/' . $id, ['verify' => false]);
        $data = json_decode($response->getBody());
        $Characters= array();
        
        foreach($data->characters as $character){            
            $Res = $client->request('GET',$character, ['verify' => false]);
            $Data = json_decode($Res->getBody()); 
            $Characters[]=$Data;
        }                
        return view('episodeDetail', ['characteres'=>$Characters]);
        } catch (\Throwable $th) {
            return "No se encontró el episodio con id :".$id;
        }

    }

    public function filterEpisode(Request $request)
    {
        $client = new Client();
        $name = $request->input('name');
        $episode = $request->input('episode');
        $url = 'https://rickandmortyapi.com/api/episode/?';
        if ($name) {
            $url .= 'name=' . urlencode($name) . '&';
        }
        if ($episode) {
            $url .= 'episode=' . urlencode($episode) . '&';
        }
        try {
        
            $response = $client->request('GET', $url, ['verify' => false]);
            $data = json_decode($response->getBody());           
            return view('episode', ['episodes' => $data->results]);
        } catch (\Throwable $th) {            
            return 'No se encontraron episodios con los filtros proporcionados.';
        }
        
    }
}