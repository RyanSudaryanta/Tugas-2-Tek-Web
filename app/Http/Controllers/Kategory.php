<?php

namespace App\Http\Controllers;

use App\Http\Resources\KategoryResource;
use App\Models\Kategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class KategoryController extends Controller
{
    public function index()
    {
        return KategoryResource::collection(Kategory::orderBy('tahun')->paginate(3));
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
            $kategory =  Kategory::create($request->all());
            $response = [
                'message' => "Kategory Data created",
                'data' => $kategory,
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
        $kategory = Kategory::findOrFail($id);
        $response = [
            'message' => "Kategory with id " . $id,
            'data' => $kategory,
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $kategory = Kategory::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'tahun' => 'required|numeric|digits:4', 
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $kategory->update($request->all());
            $response = [
                'message' => "Barang Updated",
                'data' => $kategory,
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
        $kategory = Kategory::findOrFail($id);
        try {
            $kategory->delete();
            $response = [
                'message' => "Kategory Deleted",
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed " . $e->errorInfo,
            ]);
        }
    }
}
