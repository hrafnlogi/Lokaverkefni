<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));

    }
    public function show($id){
        //return view('cards.show', compact('card'));

        $card = Card::find($id);
        return view('cards.show', compact('card'));
    }
}
