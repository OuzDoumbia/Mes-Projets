<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    public function index(){
        //return Apprenant::all();
        $candidat = Candidat::all();
        return view('electeur.ajouter', compact('candidat'));
    }



    public function create()
    {

    }



    public function liste()
    {
        $electeur = Electeur::all();
      return view("electeur.listeelecteur", compact('electeur'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $electeur = new Electeur(); //le dernier Produit est le modele Produit
        $electeur->nom = $request->nom;//pour l'enregister au niveau de la bdd
//$produit->Nom :c'est le champs Nom de la table Produit
//$request->Nom;requete de notre formulaire name=Nom;
        $electeur->prenom = $request->prenom;
        $electeur->CNI = $request->CNI;

   
        $electeur->candidat_id = $request->candidat_id;




        $electeur->save();


    // Incrémentez les votes du candidat choisi
    $candidat = Candidat::find($request->candidat_id);
    $candidat->increment('votes');


        // Redirige vers la route 'liste' avec un message de succès dans la session
        return redirect()->route('resultats.sondage')->with('success', 'Electeur ajouté avec succès');
        }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }




    public function updateelecteur($id)
    {

        $electeur = Electeur::find($id);
        return view("electeur.update", compact('electeur'));


    }

    public function updatestoreelecteur(Request $request)
    {
        $electeur = new Electeur(); //le dernier Produit est le modele Produit
        $electeur->nom = $request->nom;//pour l'enregister au niveau de la bdd
//$produit->Nom :c'est le champs Nom de la table Produit
//$request->Nom;requete de notre formulaire name=Nom;
        $electeur->prenom = $request->prenom;
        $electeur->CNI = $request->CNI;

   
        $electeur->candidat_id = $request->candidat_id;




        $electeur->update();
        // Redirige vers la route 'liste' avec un message de succès dans la session
        return redirect()->route('liste1')->with('success', 'Electeur ajouté avec succès');


    }



public function deleteelecteur($id)
{

    $electeur = Electeur::find($id);
    $electeur->delete();
    return redirect('/liste-electeur')->with('success', 'electeur supprimé avec succès');


}

public function resultatsSondage()
{
    // Récupérer les candidats triés par nombre de votes (du plus élevé au plus bas)
    $resultats = Candidat::orderBy('votes', 'desc')->get();

    return view('electeur.resultats-sondage', compact('resultats'));
}
}
