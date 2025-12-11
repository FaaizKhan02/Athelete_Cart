<?php

namespace App\Http\Controllers;

use App\Models\Jersey;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class JerseyController extends Controller
{
    /**
     * Display jerseys on frontend
     */
    public function index()
    {
        $jerseys = Jersey::where('in_stock', true)->get();
        return view('jerseys', compact('jerseys'));
    }

    /**
     * Display admin panel for jerseys
     */
    public function admin(Request $request)
{
    $jerseys = Jersey::all();
    
    // Check if we're in edit mode
    $editJersey = null;
    if ($request->has('edit')) {
        $editJersey = Jersey::find($request->edit);
    }
    
    return view('admin.jerseys.index', compact('jerseys', 'editJersey'));
}

    /**
     * Store a newly created jersey
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'team' => 'nullable|string|max:255',
            'sport' => 'required|string|max:100',
            'size' => 'required|string|max:10',
            'color' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'image_url' => 'required|url',
            'description' => 'nullable|string',
            'stock_quantity' => 'required|integer|min:0',
            'material' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Jersey::create([
            'name' => $request->name,
            'team' => $request->team,
            'sport' => $request->sport,
            'size' => $request->size,
            'color' => $request->color,
            'price' => $request->price,
            'image_url' => $request->image_url,
            'description' => $request->description,
            'in_stock' => $request->stock_quantity > 0,
            'stock_quantity' => $request->stock_quantity,
            'material' => $request->material,
        ]);

        return redirect()->route('jerseys.admin')
            ->with('success', 'Jersey added successfully!');
    }

    /**
     * Display the specified jersey
     */
    public function show(Jersey $jersey)
    {
        return view('admin.jerseys.show', compact('jersey'));
    }

    /**
     * Update the specified jersey
     */
    public function update(Request $request, Jersey $jersey)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'team' => 'nullable|string|max:255',
            'sport' => 'required|string|max:100',
            'size' => 'required|string|max:10',
            'color' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'image_url' => 'required|url',
            'description' => 'nullable|string',
            'stock_quantity' => 'required|integer|min:0',
            'material' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $jersey->update([
            'name' => $request->name,
            'team' => $request->team,
            'sport' => $request->sport,
            'size' => $request->size,
            'color' => $request->color,
            'price' => $request->price,
            'image_url' => $request->image_url,
            'description' => $request->description,
            'in_stock' => $request->stock_quantity > 0,
            'stock_quantity' => $request->stock_quantity,
            'material' => $request->material,
        ]);

        return redirect()->route('jerseys.admin')
            ->with('success', 'Jersey updated successfully!');
    }

    /**
     * Remove the specified jersey
     */
    public function destroy(Jersey $jersey)
    {
        $jersey->delete();
        return redirect()->route('jerseys.admin')
            ->with('success', 'Jersey deleted successfully!');
    }

    /**
     * Search jerseys (for frontend search)
     */
    public function search(Request $request): JsonResponse
    {
        $query = $request->input('q');
        
        if (strlen($query) < 2) {
            return response()->json([]);
        }
        
        $jerseys = Jersey::where('in_stock', true)
            ->where(function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('team', 'LIKE', "%{$query}%")
                  ->orWhere('sport', 'LIKE', "%{$query}%")
                  ->orWhere('color', 'LIKE', "%{$query}%");
            })
            ->limit(10)
            ->get(['id', 'name', 'team', 'sport', 'price', 'image_url', 'color']);
        
        return response()->json($jerseys);
    }
}