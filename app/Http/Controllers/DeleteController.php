<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    {
        // Logic to delete the item with the given id
        // For example: Item::destroy($id);
        $data = Sample::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect('/read')->with('status', 'Item deleted successfully!');
    }
}
