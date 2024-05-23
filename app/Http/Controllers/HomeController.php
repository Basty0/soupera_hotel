<?php

namespace App\Http\Controllers;

use App\Models\Models\Message;
use App\Models\Models\ReservationClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // Récupérer toutes les réservations
    $reservations = ReservationClient::all();
    $messages = Message::all();

    // Récupérer tous les messages non lus
    $unreadMessages = Message::where('vu', 'non')->count();
    $unreadReservations = ReservationClient::where('vu', 'non')->count();

    // Passer les données à la vue
    return view('home', compact('reservations', 'unreadMessages','messages','unreadReservations'));
    }
}