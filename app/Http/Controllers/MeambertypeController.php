<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meamber_type;

class MeambertypeController extends Controller
{
    public function meamber_type(Request $request) {
        return view('meamber_type');
    }

    public function store(Request $request){
        // dd($request);
        $data = $request -> validate([
            'name' => ['required'],
            'price' => ['required', 'decimal:2'],
        ]);

        $newMeambertype = Meamber_type::create($data);

        return response() -> view('meamber_type', [
            'success' => true,
            'messsage' => 'Save complet',
        ]);
    }
}
