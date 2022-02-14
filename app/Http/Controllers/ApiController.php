<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Videogame;

class ApiController extends Controller
{
    public function getVideogames() {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }
}