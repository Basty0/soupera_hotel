<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Models\ReservationClient;
use App\Models\Plat;
use App\Models\Type;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Models\Message;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function chambre()
    {
        $typesChambres= Type::all();
        $types = Type::with('chambres')->get();
        return view('chambre' ,compact('typesChambres','types')); // Affiche la vue 'chambres.blade.php'
    }

    public function resto()
    {
        $plats = Plat::all();
        return view('restaurent',compact('plats')); // Affiche la vue 'restaurant.blade.php'
    }

    public function about()
    {
        return view('a-propos'); // Affiche la vue 'about.blade.php'
    }

    public function contact()
    {
        return view('contacte'); // Affiche la vue 'contact.blade.php'
    }

    public function clientRe(Request $request){
        $validatedData = $request->validate([
            'type_id' => 'required|exists:types,id',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'date_arrivee' => 'required|date',
            'date_depart' => 'required|date|after:date_arrivee',
        ]);

        // Création de la réservation du client
        $reservation = new ReservationClient;
        $reservation->type_id = $validatedData['type_id'];
        $reservation->nom = $validatedData['nom'];
        $reservation->prenom = $validatedData['prenom'];
        $reservation->email = $validatedData['email'];
        $reservation->telephone = $validatedData['telephone'];
        $reservation->date_arrivee = $validatedData['date_arrivee'];
        $reservation->date_depart = $validatedData['date_depart'];
        $reservation->save();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Votre réservation a été envoyée avec succès ! Nous allons la consulter et vous donner un retour dès que possible. Merci pour votre confiance !');

    }
    public function submit(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'tel' => 'required|string',
            'message' => 'required|string',
        ]);

        // Création du message de contact
        $message = new Message();
        $message->name = $validatedData['name'];
        $message->email = $validatedData['email'];
        $message->tel = $validatedData['tel'];
        $message->message = $validatedData['message'];
        $message->save();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Merci pour votre message ! Nous avons bien reçu votre demande et nous vous répondrons dans les plus brefs délais. Votre satisfaction est notre priorité !');
    }
}