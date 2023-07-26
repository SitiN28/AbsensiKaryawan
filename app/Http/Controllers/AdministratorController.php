<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
class AdministratorController extends Controller
{

    function show(){
        $data['table_administrator'] = Administrator::all();
        return view('administrator',$data);
    } 

    function add(){
        $data=[
            'action'=>url('administrator/create'),
            'tombol'=>'simpan',
            'administrator'=>(object)[
                'id_adm'=>'',
                'nama'=>'',
                'jk'=>'',
                'alamat'=>'',
            ]
        ];
        return view('form_administrator',$data);
    }

    function create(Request $request){
        Administrator::create([
            'id_adm' => $request->id_adm,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat
        ]);

        return redirect('administrator');
    }

    function hapus($id){
        Administrator::where('id_adm',$id)->delete();
        return redirect('administrator');
    }

    function edit($id){
        $data['table_administrator'] =Administrator::find($id);
        $data['action'] = url('administrator/update').'/'.$data['table_administrator']->id_adm;
        $data['tombol'] = 'Update';

        return view('form_administrator',$data);
    }

    function update(Request $request){
        Administrator::where('id_adm',$request->id_adm)->update([
            'id_adm' => $request->id_adm,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat
        ]);

        return redirect('administrator');
    }
}
