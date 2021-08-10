<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Poste;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $reservations = Reservation::all();
        $users = User::all();
        $postes = Poste::all();
        return view('reservations.index',compact('users','postes','reservations'),
        ['reservations'=>$reservations],['postes'=> $postes],['users'=> $users])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
    {
        $reservations = Reservation::all();
        $users = User::all();
        $postes = Poste::all();
        return view('reservations.create',compact('users','postes','reservations'),
        ['reservations'=>$reservations],['postes'=> $postes],['users'=> $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'poste_id' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'jour' => 'required',

        ],

        [
            'required' => 'Le champ :attribute est requis!',
        ]);
        $postes = Poste::all();
        $users = User::all();
        $reservations = Reservation::all();
        Reservation::create($request->all());
        return redirect()->route('reservations.index')
                        ->with('messageSuccess','L\'utilisateur a bien été crée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
     public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request)
    {
        $postes = Poste::all();
        $users = User::all();
        $reservations = Reservation::all();
        return view('reservations.edit',compact('users','postes','reservations'),
        ['reservations' => $reservations],['postes' => $postes],['users' => $users]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, User $user)
    {
        $request->validate([
            'user_id' => 'required',
            'poste_id' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'jour' => 'required',

        ]);
        $postes = Poste::all();
        $users = User::all();
        $reservations = Reservation::all();
        $reservations->update($request->all());
        return redirect()->route('reservations.index')
                        ->with('messageSuccess','La reservation a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
     public function destroy(Reservation $reservation)
    {
       
        $reservation->delete();
        $reservations = Reservation::all();
        return redirect()->route('reservations.index')
                        ->with('messageSuccess','La reservation a bien été supprimé');
    }
}
