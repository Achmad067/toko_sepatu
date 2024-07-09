<?php

namespace App\Http\Controllers;

use App\Models\SepatuModel;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = SepatuModel::all();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $validateData = $request->validate([
                'nama' => 'required',
                'ukuran' => 'required',
                'deskripsi' => 'required',
            ]);

            $SepatuModel = SepatuModel::create($validateData);
            return response()->json($SepatuModel, 201);

        } catch (\Exception $th) {
            return response()->json([
                'error' => 'failed create data',
                'eror' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try {
            $SepatuModel = SepatuModel::findOrFail($id);
            return response()->json($SepatuModel, 200);
        } catch (\Exception $th) {
            return response()->json([
                'error' => 'Data not found'
            ], 404);
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $validateData = $request->validate([
                'nama' => 'required',
                'ukuran' => 'required',
                'deskripsi' => 'required',
            ]);

            $SepatuModel = SepatuModel::findOrFail($id);
            $SepatuModel->update($validateData);
            return response()->json($SepatuModel, 200);
        } catch (\Exception $th) {
            return response()->json([
                'message' => 'fail to update data',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $SepatuModel = SepatuModel::findOrFail($id);
            $SepatuModel->delete();
            return response()->json([
                'message' => 'Data deleted'
            ], 200); 
        } catch (\Exception $th) {
            return response()->json([
                'error' => 'fail to delete data'
            ], 500);
        }
    }
}
