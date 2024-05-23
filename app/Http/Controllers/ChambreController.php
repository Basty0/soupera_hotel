<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Http\Requests\ChambreRequest;
use App\Models\Type;
use Illuminate\Support\Facades\File;

/**
 * Class ChambreController
 * @package App\Http\Controllers
 */
class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambres = Chambre::paginate(6);

        return view('chambre.index', compact('chambres'))
            ->with('i', (request()->input('page', 1) - 1) * $chambres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chambre = new Chambre();
        $types = Type::all();
        return view('chambre.create', compact('chambre','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChambreRequest $request)
    {
        $validatedData = $request->validated(); // Récupérer les données validées du formulaire

        // Gérer l'upload de l'image principale
        if ($request->hasFile('image_principale')) {
            $image = $request->file('image_principale');
            $imageName = 'chambre_' . time() . '.' . $image->getClientOriginalExtension(); // Générer un nom unique pour l'image
            $image->storeAs('/assets/img/chambres', $imageName); // Enregistrer l'image dans le dossier de stockage
            $image->move(public_path('assets/img/chambres'), $imageName);
            // Ajouter le nom de l'image à la validation des données
            $validatedData['image_principale'] = $imageName;
        }else{
            $imageName = "defautChambre.png"; // Générer un nom unique pour l'image
            $validatedData['image_principale'] = $imageName;
        }


        // Créer une nouvelle chambre avec les données validées (y compris le nom de l'image)
        Chambre::create($validatedData);

        return redirect()->route('chambres.index')
            ->with('success', 'Chambre created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $chambre = Chambre::find($id);
//dd($chambre);
        return view('chambre.show', compact('chambre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chambre = Chambre::find($id);
        $types = Type::all();

        return view('chambre.edit', compact('chambre','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChambreRequest $request, Chambre $chambre)
    {
     // Valider les données du formulaire
            $request->validate([
                'type_id' => 'required',
                'prix_par_nuit' => 'required|numeric',
                'prix_par_heure' => 'required|numeric',
                'num' => 'required|numeric',
                'disponibilite' => 'required|in:disponible,reservee',
                'image_principale' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Valider que l'image est de type image et respecte les contraintes de taille et de format
            ]);

            // Mettre à jour les attributs de la chambre avec les données du formulaire
            $chambre->update([
                'type_id' => $request->type_id,
                'prix_par_nuit' => $request->prix_par_nuit,
                'prix_par_heure' => $request->prix_par_heure,
                'disponibilite' => $request->disponibilite,
                'num' => $request->num,
            ]);

            // Vérifier s'il y a une nouvelle image principale téléchargée
            if ($request->hasFile('image_principale')) {
                // Supprimer l'ancienne image principale si elle existe
                if (File::exists(public_path('assets/img/chambres/' . $chambre->image_principale))) {
                    File::delete(public_path('assets/img/chambres/' . $chambre->image_principale));
                }

                // Récupérer le fichier de la nouvelle image principale depuis la requête
                $image = $request->file('image_principale');

                // Générer un nom unique pour la nouvelle image principale
                $imageName = 'chambre_' . time() . '.' . $image->getClientOriginalExtension();

                // Déplacer la nouvelle image principale vers le dossier de stockage (public/assets/img/chambres)
                $image->move(public_path('assets/img/chambres'), $imageName);

                // Mettre à jour le nom de la nouvelle image principale dans la base de données
                $chambre->update([
                    'image_principale' => $imageName,
                ]);
            }

            // Rediriger l'utilisateur vers la liste des chambres avec un message de succès
            return redirect()->route('chambres.index')->with('success', 'Chambre mise à jour avec succès.');
        }
    public function destroy($id)
    {
        Chambre::find($id)->delete();

        return redirect()->route('chambres.index')
            ->with('success', 'Chambre deleted successfully');
    }
}