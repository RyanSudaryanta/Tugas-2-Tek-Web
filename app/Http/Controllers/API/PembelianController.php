<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalians = Pengembalian::getPengembalian()->paginate(5);
        return response()->json($pengembalians);
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
        $pengembalians = $request->validate([
            'pelanggan_id' => ['required'],
            'tgl_pengembalian' => ['required'],
            'jml_pengembalian' => ['required'],
            'bunga' => ['required'],
        ]);

        try {
            $response = Pengembalian::create($pengembalians);
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
        $pengembalians = $request->validate([
            'pelanggan_id' => ['required'],
            'tgl_pengembalian' => ['required'],
            'jml_pengembalian' => ['required'],
            'bunga' => ['required'],
        ]);

        try {
            $pengembalian = Pengembalian::find($id);
            $response = $pengembalian->update($pengembalians);
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
            $pengembalian = Pengembalian::find($id);
            $pengembalian->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data yang dihapus' => $pengembalian,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
