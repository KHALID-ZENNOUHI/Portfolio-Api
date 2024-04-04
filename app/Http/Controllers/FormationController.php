<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        return response()->json(Formation::all(), 200);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required|max:255',
        //     'Start_date' => 'required|string',
        //     'End_date' => 'required|string',
        //     'city' => 'required|max:255',
        // ]);
        $formation = Formation::create([
            'name' => $request->name,
            'description' => $request->description,
            'Start_date' => $request->Start_date,
            'End_date' => $request->End_date,
            'city' => $request->city,
        ]);

        return response()->json($formation, 201);
    }

    public function update(Request $request, Formation $formation)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'Start_date' => 'required|string',
            'End_date' => 'required|string',
            'city' => 'required|max:255',
        ]);

        $formation->update($request->all());

        return response()->json($formation, 200);
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();

        return response()->json(null, 204);
    }
}
