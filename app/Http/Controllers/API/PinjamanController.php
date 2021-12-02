<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjamans = Pinjaman::getPijaman()->paginate(5);
        return response()->json($pinjamans);
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
        $pinjamans = $request->validate([
            'pelanggan_id' => ['required'],
            'tgl_peminjaman' => ['required'],
            'jml_peminjaman' => ['required'],
            'status' => ['required'],
        ]);

        try {
            $response = Pinjaman::create($pinjamans);
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
        $pinjamans = $request->validate([
            'pelanggan_id' => ['required'],
            'tgl_peminjaman' => ['required'],
            'jml_peminjaman' => ['required'],
            'status' => ['required'],
        ]);

        try {
            $pinjaman = Pinjaman::find($id);
            $response = $pinjaman->update($pinjamans);
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
            $pinjaman = Pinjaman::find($id);
            $pinjaman->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data yang dihapus' => $pinjaman,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
