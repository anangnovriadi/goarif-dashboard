<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TranscribeController extends Controller
{
    public function index() {
        try {
            $client = new \GuzzleHttp\Client();
            $data = $client->get('http://localhost:3000/api/transcribes');

            $transcripts = json_decode($data->getBody());
            // $transcripts = json_encode($transcripts);
            // dd(json_encode($transcripts));
            // dd($transcripts->getBody());
            
            return view('transcribe', compact('transcripts'));
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function transcribe() {
        return redirect()->route('transcribe.result');
    }

    public function result() {
        return view('transcribe-result');
    }
}
