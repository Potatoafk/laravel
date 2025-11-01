<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function sample() {
        return view('landing');
    }

    public function post(Request $request){
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $incomingFields = Sample::create([
            'email' => $incomingFields['email'],
            'password' => bcrypt($incomingFields['password'])
        ]);
        return view('read.read');
    }
}
