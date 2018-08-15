<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use DB;

class CardsController extends Controller
{
    public function index()
    {
      // $cards = DB::table('cards')->get();
      $cards = Card::all();
      return view('cards.index',compact('cards'));
    }

    public function details(Card $card)
    {
      return view('cards.card',compact('card'));
    }
}
