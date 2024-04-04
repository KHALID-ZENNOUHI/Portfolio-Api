<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    public function index()
    {
        return response()->json(PersonalInformation::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|int',
            'age' => 'required|int',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
        ]);
        $personalInformation = PersonalInformation::create($request->all());

        return response()->json($personalInformation, 201);
    }

    public function update(Request $request, PersonalInformation $personalInformation)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|int',
            'age' => 'required|int',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
        ]);
        $personalInformation->update($request->all());

        return response()->json($personalInformation, 200);
    }

    public function destroy(PersonalInformation $personalInformation)
    {
        $personalInformation->delete();

        return response()->json(null, 204);
    }
}
