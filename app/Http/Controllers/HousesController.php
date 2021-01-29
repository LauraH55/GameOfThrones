<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Illuminate\Http\Request;
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
        return $houses;
    }

}
