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

    public function store(Request $request)
    {
            $hero = new Hero();
            $hero ->user_id =1;
			$hero->subject = $request->input('subject');
			$hero->description = $request->input('description');
            $hero->save();
            return Hero::all();
            return redirect(action('HeroController@show'));
    }
}

// $name= $request->input('name','Fadz');
//        $message= $request->input('message');
//return view('form/index')->with('messages',$messages);