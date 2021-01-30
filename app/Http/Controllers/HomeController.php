<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class HomeController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('home.index', compact('schools'));
    }

    public function show($id)
    {
        $school = School::where('id', $id)->first();
        return view('home.show', compact('school'));
    }

    public function create(Request $request)
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'logo_school' => 'required|image',
            'name_school' => 'required|min:3',
            'npsn' => 'required|numeric',
            'school_level' => 'required',
            'status_school' => 'required',
        ]);

        $imagePath = request('logo_school')->store('uploads', 'public');

        Auth()->user()->schools()->create([
            'logo_school' => $imagePath,
            'name_school' => $data['name_school'],
            'npsn' => $data['npsn'],
            'school_level' => $data['school_level'],
            'status_school' => $data['status_school'],
        ]);

        return redirect('/');

    }

}
