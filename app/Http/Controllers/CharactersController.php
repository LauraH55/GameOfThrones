<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class CharactersController extends BaseController
{
    /**
     * /characters
     * GET
     */
    public function list() {

        // récupération de tous les personnages
        $characters = Character::all()->load('houses');
        // Je retourne ma view grâce à la méthode native de Lumen
        return view('layout/homepage', ['characters' => $characters]);
        //return $characters;

    }


    /**
     * /characters/{id}
     * GET
     */
    public function item($id) {

        // récupération d'un personnage grâce à son id
        $character = Character::findOrFail($id)->load('title');
        return view('layout/character', ['characters' => $character]);
        //return $character;

    }

}
