<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;

class BatchController extends Controller
{
    public function showAll() {
        $batches = Batch::all(); // Retrieve all documents
        return response()->json($batches);
    }

    public function create(Request $request) {
        $batch = new Batch;
        $key = $request->key;
        $value = $request->value;
        $batch->$key = $value;

        $batch->save();
        // return response()->json(["result" => "ok"], 201);
        return $batch;
    }

    public function createItem(Request $request, $id) {
        $batch = Batch::find($id);
        $key = $request->key;
        $value = $request->value;
        $batch->$key = $value; 

        $batch->save();
        // return response()->json(["result" => "ok"], 201);
        return $batch;
    }

    public function show($id) {
        $batch = Batch::find($id);
        return $batch;
    }

    public function update(Request $request, $id) {
        $batch = Batch::find($id);
        $key = $request->key;
        $value = $request->value;
        $batch->$key = $value; 

        $batch->save();
        // return response()->json(["result" => "ok"], 201);
        return $batch;
    }

    public function deleteItem(Request $request, $id) {
        $batch = Batch::find($id);
        $key = $request->key;
        unset($batch->$key);

        $batch->save();
        // return response()->json(["result" => "ok"], 201);
        return $batch;
    }

    public function delete($id) {
        $batch = Batch::find($id);

        $batch->delete();
        return $batch;
    }
}
