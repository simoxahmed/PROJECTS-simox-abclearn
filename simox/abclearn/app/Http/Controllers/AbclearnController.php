<?php

namespace App\Http\Controllers;

use App\Models\Abclearn;
use Illuminate\Http\Request;

class AbclearnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $abclearns=Abclearn::all();
        $titre="le titre";
        return view('abclearn.index',compact('abclearns','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre='Ajouter un programe';
        return view('abclearn.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ['name','niveau','photo'];      
        $request->validate([
            'name' => 'required|max:30',
            'niveau' => 'required|max:30',
            'photo' => 'required|image'
        ]);

        Abclearn::create($request->all());
        return   redirect()->route('abclearn');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $abclearn=Abclearn::find($id);
        $titre= "consultation de ".$abclearn->name;
        return view('abclearn.show',compact('abclearn','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $abclearns=Abclearn::all();
        $abclearn=Abclearn::find($id);
        $titre= "Modification de ".$abclearn->name;
        return view('abclearn.edit',compact('abclearn','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $abclearn=Abclearn::find($id);
        $request->validate([
            'name' => 'required|max:30',
            'niveau' => 'required|max:30',
            'photo' => 'required|image'
        ]);
        $abclearn->update($request->all());
        return redirect()->route('abclearn');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abclearn=Abclearn::find($id);
        $abclearn->delete();
        return redirect()->route('abclearn');
    }
}
