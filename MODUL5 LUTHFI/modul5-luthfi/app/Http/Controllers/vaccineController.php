<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\vaccines;

class vaccineController extends Controller
{
    //
    public function read(){
        dd(patients::all());
    }

    public function create(){
        $fileName = request('image')->store('upload-images');
        vaccines::create([
            'name' => request('namaVaksin'),
            'price' => request('harga'),
            'description' => request('desc'),
            'image' => $fileName
        ]);

        $listVaccines = vaccines::all();

        // return view('vaccine', ['vaccines' => $listVaccines]);

        return redirect('/vaccine');
    }

    public function view(){
        $listVaccines = vaccines::all();

        return view('vaccine', ['vaccines' => $listVaccines]);
    }
// 
    public function getById($id){
        $detailVaccines = vaccines::where('id', $id)->get();

        return view('editFormVaccine', ['vaccines' => $detailVaccines]);
    }

    public function edit(){

        if(request('image')){
            $fileName = request('image')->store('upload-images');

            $updateVaccines = vaccines::where('id', request('id'))
            ->update([
                'name' => request('namaVaksin'),
                'price' => request('harga'),
                'description' => request('desc'),
                'image' => $fileName
            ]);

            if($updateVaccines){
                return redirect('/vaccine');
            }
        }else{
            $updateVaccines = vaccines::where('id', request('id'))
            ->update([
                'name' => request('namaVaksin'),
                'price' => request('harga'),
                'description' => request('desc')
            ]);

            if($updateVaccines){
                return redirect('/vaccine');
            }
        }
    }

    public function delete($id){
        $deleteVaccines = vaccines::where('id', $id)->delete();

        return redirect('/vaccine');
    }
}
