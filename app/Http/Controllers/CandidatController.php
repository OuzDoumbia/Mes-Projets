<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Candidat;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidat.ajouter');
    }
    public function liste()
    {
        $candidat = Candidat::all();
        return view('candidat.liste',compact('candidat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->dateNaissance = $request->dateNaissance;
        $candidat->partie = $request->partie;
        $candidat->programme = $request->programme;

        $candidat->save();
        
        return redirect()->route('liste.candidat')->with('success','Candidat saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidat = Candidat::find($id);
        return view('candidat.editer',compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidat = Candidat::find($id);

        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->dateNaissance = $request->dateNaissance;
        $candidat->partie = $request->partie;
        $candidat->programme = $request->programme;

        $candidat->update();
        return redirect()->route('liste.candidat')->with('success','Candidat updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidat= Candidat::find($id);
        $candidat->delete();
        return back();
    }

    public function programmeCandidat()
    {
        $candidat = Candidat::all();

        return view('candidat.programme', compact('candidat'));
    }
}
