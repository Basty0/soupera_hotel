<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Http\Requests\PlatRequest;
use Illuminate\Support\Facades\File;

/**
 * Class PlatController
 * @package App\Http\Controllers
 */
class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plats = Plat::paginate();

        return view('plat.index', compact('plats'))
            ->with('i', (request()->input('page', 1) - 1) * $plats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plat = new Plat();
        return view('plat.create', compact('plat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlatRequest $request)
    {
        $validatedData = $request->validated(); // Récupérer les données validées du formulaire

        if ($request->hasFile('image_principale')) {
            $image = $request->file('image_principale');
            $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();

            // Déplacez le fichier vers le dossier de stockage (par exemple, public/images)
            $image->move(public_path('assets/img/plat'), $imageName);

            // Ajoutez le nom de l'image à la validation des données
            $validatedData['image_principale'] = $imageName;
        }

        // Créer un nouveau plat avec les données validées (y compris le nom de l'image)
        Plat::create($validatedData);

        return redirect()->route('plats.index')
            ->with('success', 'Plat created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $plat = Plat::find($id);

        return view('plat.show', compact('plat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plat = Plat::find($id);

        return view('plat.edit', compact('plat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlatRequest $request, Plat $plat)
    {
        $validatedData = $request->validated(); // Récupérer les données validées du formulaire

        if ($request->hasFile('image_principale')) {
            $image = $request->file('image_principale');
            $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();

            // Déplacez le nouveau fichier vers le dossier de stockage (par exemple, public/images)
            $image->move(public_path('assets/img/plat'), $imageName);

            // Supprimez l'ancienne image si elle existe
            if (File::exists(public_path('images/' . $plat->image_principale))) {
                File::delete(public_path('images/' . $plat->image_principale));
            }

            // Mettez à jour le nom de l'image dans les données validées
            $validatedData['image_principale'] = $imageName;
        }

        // Mettre à jour le plat avec les données validées
        $plat->update($validatedData);

        return redirect()->route('plats.index')
            ->with('success', 'Plat updated successfully');
    }


    public function destroy($id)
    {
        Plat::find($id)->delete();

        return redirect()->route('plats.index')
            ->with('success', 'Plat deleted successfully');
    }
}