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
        $characters = Character::all();
        //return view('homepage');
        return $characters;
    }


    /**
     * /characters/{id}
     * GET
     */
    public function item($id) {

        // récupération d'un personnage grâce à son id
        $character = Character::findOrFail($id);
        return $character;

    }

}
