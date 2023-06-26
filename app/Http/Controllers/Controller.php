<?php

namespace App\Http\Controllers;

use App\Evenement;
/* use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests; */
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /* use AuthorizesRequests, DispatchesJobs, ValidatesRequests; */
/*     public function Allevent()
    {
        return Evenement::all();
    }
    public function Lastevent()
    {
        return Evenement::whereYear('created_at' , '2023')->latest()->get();
    }
    public function ventbycategory($id)
    {
        return Evenement::where('category' , $id)->latest()->get();
    } */
/*     public function Event(Request $request)
    {
        $Evenement=new Evenement();
        $Evenement->title_fr =$request->title_fr;
        $Evenement->description_fr =$request->description_fr;
        $Evenement->photo =$request->photo;
        $Evenement->date_start =$request->date_start;
        $Evenement->date_end =$request->date_end;
        $Evenement->category =$request->category;
        $Evenement->save();
        return ['result'=> 'success'];
    } */

                     /* get all events */
/*     public function index() {
        $evenements = Evenement::all();
        $evenements = Evenement::latest()->get();
        $mode="create";
        return view("evenements.index", compact("evenements"));
    } */
                      /* create a event */
   /*  public function store(Request $request) {
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
                       /* edit a event */
/*     public function edit(Evenement $evenement) {
        $evenements = Evenement::latest()->get();
       // dd($evenements);
        return view("evenements.index", compact("evenement" , "evenements"));
    }
    public function update(Request $request, Evenement $evenements) {
        $rules = [
            'titre' => 'bail|required|string|max:255',
        ];
        $this->validate($request, $rules);
            $evenement->update([
                "title_fr" => $request->title_fr,
                "description_fr" => $request->description_fr,
                "photo" => $request->photo,
                "date_start" => $request->date_start,
                "date_end" => $request->date_end,
                "category" => $request->category,
        ]);
        return redirect(route("evenements.index", $evenement));
    } */
                           /* delat a event */
/*     public function destroy(Evenement $evenement) {

        $evenement->delete();
        return redirect(route('evenements.index'));
    } */
                           /* etat of event */
/*     public function etat(Request $request,Evenement $evenement) {

        $evenement->update(["etat" => 1]);
        $evenements_fini = Evenement::where('etat' , 1)->get();
         return redirect(route("evenements.index"));
    } */
}
