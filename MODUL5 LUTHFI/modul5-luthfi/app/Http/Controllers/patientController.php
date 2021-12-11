<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\vaccines;

class patientController extends Controller
{
    //
    public function view(){
        $listPatient = patient::all();
        
        return view('patient', ['patients' => $listPatient]);
    }

    public function chooseVac(){
        $listVaccines = vaccines::all();

        return view('chooseVac', ['vaccines' => $listVaccines]);
    }

    public function registrasi($id){
        $namaVaccines = vaccines::where('id', $id)->get();
        
        return view('formRegist', ['id' => 1, 'vaksin' => $namaVaccines]);
    }

    public function daftar(){
        $fileName = request('ktp')->store('upload-images');

        patient::create([
            'vaccine_id' => request('id'),
            'name' => request('nama'),
            'nik' => request('nik'),
            'alamat' => request('alamat'),
            'image_ktp' => $fileName,
            'no_hp' => request('nohp'),
        ]);

        $listVaccines = vaccines::all();

        return redirect('/patient');
    }

    public function delete($id){
        $deleteVaccines = patient::where('id', $id)->delete();

        return redirect('/patient');
    }

    public function getById($id){
        $detailPatient = patient::where('id', $id)->get();
        $namaVaccines = vaccines::where('id', $detailPatient[0]['vaccine_id'])->get();

        return view('editPatient', ['patient' => $detailPatient, 'vaksin' => $namaVaccines]);
    }

    public function edit(){
        if(request('ktp')){
            $fileName = request('ktp')->store('upload-images');

            $updatePatient = patient::where('id', request('id'))
            ->update([
                'name' => request('nama'),
                'nik' => request('nik'),
                'alamat' => request('alamat'),
                'image_ktp' => $fileName,
                'no_hp' => request('nohp')
            ]);

            if($updatePatient){
                return redirect('/patient');
            }
        }else{
            $updatePatient = patient::where('id', request('id'))
            ->update([
                'name' => request('nama'),
                'nik' => request('nik'),
                'alamat' => request('alamat'),
                'no_hp' => request('nohp')
            ]);

            if($updatePatient){
                return redirect('/patient');
            }
        }
    }
}
