<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;
class gestionVisiteurController extends Controller
{
    function selectionnerMois(){
        if(session('visiteur') != null){
            $visiteur = session('visiteur');
            $idVisiteur = $visiteur['id'];
            $lesMois = PdoGsb::getLesMoisDisponibles($idVisiteur);
		    // Afin de sélectionner par défaut le dernier mois dans la zone de liste
		    // on demande toutes les clés, et on prend la première,
		    // les mois étant triés décroissants
		    $lesCles = array_keys( $lesMois );
		    $moisASelectionner = $lesCles[0];
            return view('listemois')
                        ->with('lesMois', $lesMois)
                        ->with('leMois', $moisASelectionner)
                        ->with('visiteur',$visiteur);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }

    }

    function gererVisiteur(){
        if(session('visiteur') != null){
            $visiteur = session('visiteur');
            $lesVisiteurs = PdoGsb::listeVisiteurs();
            return view('gestionVisiteur')
                        ->with('visiteur',$visiteur)
                        ->with('lesvisiteurs',$lesVisiteurs);
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }

    function ajouterVisiteur(){
        if(session('visiteur') != null){
            $visiteur = session('visiteur');
            return view('ajoutVisiteur')
                        ->with('visiteur',$visiteur);
            $id = $request['id'];
            $nom = $request['nom'];
            $prenom = $request['prenom'];
            $login = $request['login'];
            $adresse = $request['adresse'];
            $cp = $request['cp'];
            $ville = $request['ville'];
            $datembauche = $request['dateEmb'];
            $saisie = PdoGsb::ajouterUnVisiteur($id, $nom, $prenom, $login, $adresse, $cp, $ville, $datembauche);
            return view('gestionVisiteur');
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }

    
    
}