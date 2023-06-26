<?php

namespace App\Http\Controllers;

use App\CategorieEvent;
use App\Evenement;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class eventController extends Controller
{
    /* get all events */
/*     public function index() {
        $evenements = Evenement::all();
        $evenements = Evenement::latest()->get();
        $mode="create";
        return view("evenements.index", compact("evenements"));
    } */

    public function Allevent()
    {
        return Evenement::all();
    }
    public function Lastevent()
    {
        return Evenement::whereYear('created_at' , '2023')->latest()->with('categorie')->get();
    }
    public function categorievent()
    {
        return CategorieEvent::all();
    }
/*     public function eventbycategory($id)
    {
        return Evenement::where('category' , $id)->latest()->get();
    } */
    /* create a event */
/*     public function store(Request $request) {
        $this->validate($request, [
            'title_fr' => 'bail|string|max:255',
            "description_fr" => 'bail|string|max:255',
            "photo" => 'bail|text|min:255',
            "date_start" => 'bail|date|max:255',
            "date_end" => 'bail|string|max:255',
            "category" => 'bail|date|max:255',
        ]);
        Evenement::create([
            "title_fr" => $request->title_fr,
            "description_fr" => $request->description_fr,
            "photo" => $request->photo,
            "date_start" => $request->date_start,
            "date_end" => $request->date_end,
            "category" => $request->category,
            "etat" => 0
        ]);
        return redirect(route("evenements.index"));
    } */

}
