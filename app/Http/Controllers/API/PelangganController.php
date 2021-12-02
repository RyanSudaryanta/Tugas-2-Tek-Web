<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Pelanggan::paginate(5);
        return response()->json($pelanggans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggans = $request->validate([
            'nama' => ['required', 'max:150'],
            'nik' => ['required','unique:pelanggan,nik', 'max:16'],
            'jk' => ['required'],
            'no_rekening' => ['required'],
            'telp' => ['required'],
            'alamat' => ['required', 'max:255'],
            'tgllhr' => ['required'],
        ]);

        try {
            $response = Pelanggan::create($pelanggans);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggans = $request->validate([
            'nama' => ['required', 'max:150'],
            'nik' => ['required', 'max:16'],
            'jk' => ['required'],
            'no_rekening' => ['required'],
            'telp' => ['required'],
            'alamat' => ['required', 'max:255'],
            'tgllhr' => ['required'],
        ]);

        try {
            $pelanggan = Pelanggan::find($id);
            $response = $pelanggan->update($pelanggans);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $pelanggan = Pelanggan::find($id);
            $pelanggan->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data yang dihapus' => $pelanggan,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
