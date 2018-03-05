<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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

    public function store(Request $request,$slug)
    {
        $newRow = new Hero();
        $newRow = Hero::where ('slug','=',$slug)->first();
        $newRow ->subject= $request ->input('subject');//input the subject into database
        $newRow ->description = $request ->input('description');
        $newRow ->hero_id = $hero->id;
        $newRow ->save();
        return redirect(action('HeroController@index'));
    }
    public function create($slug)
    {
        $view =view('layouts.app');
        $view->slug =$slug;
        return $view;
    }
}
