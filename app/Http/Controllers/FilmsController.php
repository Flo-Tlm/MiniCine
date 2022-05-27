<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Realisateurs;
use App\Models\Salles;
use Illuminate\Http\Request;


class FilmsController extends Controller
{
    public function getAll()
    {
        $films = Films::with('realisateur')->get();
        $realisateur = Realisateurs::all();
        $salles = Salles::all();
        return view('films', [

            'films' => $films,
            'realisateur' => $realisateur,
            'salles' => $salles,

        ]);
    }
    public function add(Request $request)
    {
           if ($request->hasFile('affiche')) {
            $path = $request->file('affiche')->store('/images','public');
            }
        $validate = $request->validate([
            'titre' => 'required|max:150',
            'resume' => 'required|max:150',
            'duree' => 'required|max:150',
            'casting' => 'required|max:150',
            'realisateurs' => 'required|exists:realisateurs,id',
            'salles' => 'required|exists:salles,id',
            'affiche'=>'required',



        ]);
        $films = new Films();
        $films->titre = $validate['titre'];
        $films->resume = $validate['resume'];
        $films->duree = $validate['duree'];
        $films->casting = $validate['casting'];
        $films->real_id = $validate['realisateurs'];
        $films->salle_id = $validate['salles'];
        $films->affiche = $path;





        $films->save();
        return redirect()->route('films');
    }
    public function show($id)
    {
        $film = Films::find($id);
        $real = Realisateurs::find($id);





        return view('film', [


            'films' => $film,
            'reals' => $real,


        ]);
    }
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'titre' => 'required|max:150',
            'extrait' => 'required|max:150',
            'realisateurs' => 'required|exists:réalisateurs,id',
            'salles' => 'required|exists:salles,id',


        ]);
        $film = Films::find($id);

        $film->titre = $validate['titre'];
        $film->extrait = $validate['extrait'];
        $film->real_id = $validate['realisateurs'];
        $film->salle_id = $validate['salles'];



        $film->update();
        return redirect()->route('films');
    }

    public function showUpdate($id)
    {
        $film = Films::find($id);
        $realisateur = Realisateurs::all();
        $salle = Salles::all();

        return view('update', [

            'update' => $film,
            'realisateur' => $realisateur,
            'id' => $id,
            'salle' => $salle,

        ]);
    }

    public function destroy($id)
    {
        $delete = Films::find($id);
        $delete->delete();

        return redirect()->route('films');
    }
}
