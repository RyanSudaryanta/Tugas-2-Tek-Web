<?php

namespace App\Http\Controllers;

use App\Http\Resources\BarangResource;
use App\Models\Barang;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AngkatanController extends Controller
{
    public function index()
    {
        return BarangResource::collection(Barang::orderBy('tahun')->paginate(3));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tahun' => 'required|numeric|digits:4',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $barang =  Barang::create($request->all());
            $response = [
                'message' => "Angkatan Data created",
                'data' => $barang,
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed " . $e->errorInfo,
            ]);
        }
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        $response = [
            'message' => "Barang with id " . $id,
            'data' => $barang,
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'tahun' => 'required|numeric|digits:4', 
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $barang->update($request->all());
            $response = [
                'message' => "Barang Updated",
                'data' => $barang,
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed " . $e->errorInfo,
            ]);
        }
    }

    public function destroy($id)
    {
        $angkatan = Barang::findOrFail($id);
        try {
            $angkatan->delete();
            $response = [
                'message' => "Barang Deleted",
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed " . $e->errorInfo,
            ]);
        }
    }
}