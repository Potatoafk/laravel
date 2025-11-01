<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit($id) {
        $data = Sample::find($id);
        return view('edit.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $sample = Sample::find($id);
        $sample->email = $incomingFields['email'];
        $sample->password = bcrypt($incomingFields['password']);
        $sample->save();

        return redirect('/read');
    }
}
