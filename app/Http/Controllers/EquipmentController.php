<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment ;

class EquipmentController extends Controller
{
    public function equipment () {
        $equipments = Equipment::all();
        return view('equipment', ['equipments' => $equipments]);
    }

    public function create_equipment () {
        return view('admin.create_equipment');
    } 

    public function store_equipment (Request $request) {

        $data = $request -> validate([
            'name' => ['required'],
            'qty' => ['integer'],
            'phone' => ['required'],
            'description' => ['nullable'],
            'fee' => ['required','decimal:2,4'],
            'is_active' => ['required'],
            'image' => ['required', 'mimes:png,jbg,jpeg,webp'],
        ]);

        if($request -> has('image')){
            $file = $request -> file('image');
            $extension = $file -> getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'equipments/image/';
            $file -> move($path, $filename);

            $data['image'] = $path.$filename;
        }

        $save_data = Equipment::create($data);

        return redirect(route('equipment'));
    }

    public function edit (Equipment $equipment) {
        return view('admin.edit_equipment', ['equipment' => $equipment]);
    }

    public function update (Equipment $equipment, Request $request) {
        
        $data = $request -> validate([
            'name' => ['required'],
            'qty' => ['integer'],
            'phone' => ['required'],
            'description' => ['nullable'],
            'fee' => ['required','decimal:2,4'],
            'is_active' => ['required'],
            'image' => ['nullable', 'mimes:png,jbg,jpeg,webp'],
        ]);

         if($request -> has('image')){
            $file = $request -> file('image');
            $extension = $file -> getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'equipments/image/';
            $file -> move($path, $filename);

            $data['image'] = $path.$filename;
        }

        $equipment -> update($data);

        return redirect(route('equipment'));
    }

    public function delete_equipment (Equipment $equipment) {
        return view('admin.delete_equipment', ['equipment' => $equipment]);
    }

    public function delete (Equipment $equipment) {
        $equipment -> delete();

        return redirect(route('equipment'));
    }
}
