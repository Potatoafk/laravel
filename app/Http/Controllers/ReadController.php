<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function read()
    {
        $samples = Sample::all();
        return view('read.read', compact('samples'));
    }
}
