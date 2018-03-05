<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
class HeroController extends Controller
{

    public function index()
    {
        $hero = \App\Hero::all()->sortByDesc("name");;//select all hero in the db order by desc
        $view = view('hero/index');
        $view->hero = $hero;
        return $view;
    }

    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }
}

 