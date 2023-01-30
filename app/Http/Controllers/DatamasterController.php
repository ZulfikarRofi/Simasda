<?php

namespace App\Http\Controllers;

use App\Models\Datakader;
use Illuminate\Http\Request;

class DatamasterController extends Controller
{
    public function kaderManage()
    {
        $datakader = Datakader::all();
        return view('pages.datamanage', compact('datakader'));
    }

    public function createKader(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'status' => 'required|string|min:3',
            'komisariat' => 'required|string|min:3',
            'jurusan' => 'required|string|min:3',
            'angkatan' => 'required|numeric|min:4',
            'email' => 'required|email',
            'number_phone' => 'required|string|min:8',
        ]);

        $model = new Datakader();
        $model->name = $request->name;
        $model->status = $request->status;
        $model->komisariat = $request->komisariat;
        $model->jurusan = $request->jurusan;
        $model->angkatan = $request->angkatan;
        $model->email = $request->email;
        $model->number_phone = $request->number_phone;
        $model->save();

        return redirect('/datamanage')->with('success', 'New Kader Has Been Created');
    }
}
