<?php

namespace App\Http\Controllers;

use App\Models\Abclearn;
use App\Models\User_abc;
use Illuminate\Http\Request;

class User_abcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=User_abc::all();
        $titre="le titre";
        return view('users.index',compact('users','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $abclearns=Abclearn::all();
        $titre='Ajouter un User';
        return view('users.create',compact('titre','abclearns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //['nm','np','email','abclearn_id'];         
        $request->validate([
            'nm' => 'required|max:30',
            'np' => 'required|max:30',
            'email' => 'required|unique:user_abcs',
            'abclearn_id' => 'required|integer'
        ]);

        $data=$request->all();
        $data['photo']=$request->photo->store('users/images');
        User_abc::create($data);
        return   redirect()->route('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user=User_abc::find($id);
        $titre= "consultation de ".$user->nm." ".$user->np;
        return view('users.show',compact('user','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $abclearns=Abclearn::all();
        $user=User_abc::find($id);
        $titre= "Modification de ".$user->nm." ".$user->np;
        return view('users.edit',compact('user','titre','abclearns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User_abc::find($id);
        $request->validate([
                'nm' => 'required|max:30',
                'np' => 'required|max:30',
                'email' => 'required|unique:user_abcs',
                'abclearn_id' => 'required|integer'
            ]);

        $data=$request->all();
        if($request->has('photo')){
            unlink(public_path('storage/'.$user->photo));
            $data['photo']=$request->photo->store('users/images');
        }else {
            unset($data['photo']);
        }
        $user->update($data);
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User_abc::find($id);
        unlink(public_path('storage/'.$user->photo));
        $user->delete();
        return redirect()->route('user');
    }
}
