<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class HousesController extends BaseController
{
    /**
     * /houses
     * GET
     */
    public function list() {

        // récupération de toutes les maisons
        $houses = House::all();
        return view('layout/houses', ['houses' => $houses]);
        return $houses;
    }

    /**
     * /houses/{id}
     * GET
     */
    public function item($id) {


        // récupération d'une maison grâce à son id
        $house = House::findOrFail($id);

        // $characters = $house->characters();


        return view('layout/house', ['houses' => $house]);
        //return $character;

    }

}
