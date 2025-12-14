<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jersey;
use Illuminate\Http\Request;

class JerseyApiController extends Controller
{
    // GET /api/jerseys
    public function index()
    {
        return response()->json(Jersey::all(), 200);
    }

    // GET /api/jerseys/{id}
    public function show(Jersey $jersey)
    {
        return response()->json($jersey, 200);
    }

    // POST /api/jerseys
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'team' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $jersey = Jersey::create($validated);

        return response()->json([
            'message' => 'Jersey created successfully',
            'data' => $jersey
        ], 201);
    }

    // PUT /api/jerseys/{id}
    public function update(Request $request, Jersey $jersey)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string',
            'team' => 'sometimes|string',
            'price' => 'sometimes|numeric'
        ]);

        $jersey->update($validated);

        return response()->json([
            'message' => 'Jersey updated successfully',
            'data' => $jersey
        ], 200);
    }

    // DELETE /api/jerseys/{id}
    public function destroy(Jersey $jersey)
    {
        $jersey->delete();

        return response()->json([
            'message' => 'Jersey deleted successfully'
        ], 200);
    }

    // GET /api/jerseys/search/{keyword}
    public function search($keyword)
    {
        return response()->json(
            Jersey::where('name', 'like', "%$keyword%")->get(),
            200
        );
    }
}
