<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Hero;
use App\Emergency;
class HeroController extends Controller
{

    /** Creating Pages
     * 2) Then create a new action index in the HeroController
     * In the action create a new view for the file that you just created (hero/index) and return it.
     */


     /**In the index method of the HeroController, use Eloquent to select all heroes in the database, ordered by their names in ascending order.
      * Then give the result to the view.(If you don't have an index action in the HeroController, do it in the function that handles the homepage and give the result to the homepage's template).
      *
      */
    public function index()
    {
        $hero = \App\Hero::all()->sortByDesc("name");;//select all hero in the db order by desc
        $view = view('hero/index');
        $view->hero = $hero;
        return $view;
    }


    // Add a route, so that when a URL like this: /hero/batman is accessed with the GET method, the action show of the controller HeroController will be run using the slug part of the URL (for example batman) as the argument for the action

    public function show($slug)
    {
        $hero = \App\Hero::where('slug', $slug)->first();
        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function store(Request $request,$slug)
    {
        $hero = \App\Hero::where ('slug','=',$slug)->first();
        $emergency= new Emergency();
        $emergency ->subject= $request ->get('subject');//input the subject into database
        $emergency ->description = $request ->get('description');
        $emergency ->hero_id=$hero->id;
        $emergency->save();
        return redirect(action('HeroController@show',[$hero->slug]));
    }


}
