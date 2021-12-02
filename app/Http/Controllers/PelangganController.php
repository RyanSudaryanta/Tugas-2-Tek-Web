<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('user', [
            'pelanggan' => $pelanggan
        ]);
    }


    public function create() {
        return view('tambahPelanggan');
    }

    public function store(Request $request) {
        $validation = $request->validate([
            'nama' => ['required'],
            'jk' => ['required'],
            'nik' => ['required', 'unique:pelanggan,nik','string' ,'max:16'],
            'alamat' => ['required'],
            'tgllhr' => ['required', 'date'],
            'no_rekening' => ['required', 'string', 'max:16'],
            'telp' => ['required', 'digits:12', 'numeric'],
        ]);

        Pelanggan::create($validation);

        return redirect('/user');
    }

    public function edit($id) {
        $pelanggan = Pelanggan::find($id);
        return view('editPelanggan', [
            'pelanggan' => $pelanggan,
        ]);
    }

    public function update(Request $request, $id) {
        $pelanggan = Pelanggan::find($id);

        $pelanggan->nama = $request->nama;
        $pelanggan->nik = $request->nik;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->jk = $request->jk;
        $pelanggan->tgllhr = $request->tgllhr;
        $pelanggan->no_rekening = $request->no_rekening;
        $pelanggan->telp = $request->telp;

        $pelanggan->save();

        return redirect('/user');
    }

    public function destroy($id) {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return back();
    }

}
