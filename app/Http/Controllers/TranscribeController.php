<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranscribeController extends Controller
{
    public function index() {
        return view('transcribe');
    }
}