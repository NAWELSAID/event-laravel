<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Coordinate;
use App\News;
use App\Slide;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function slide()
    {
        return Slide::first();
    }
    public function coordinate()
    {
        return Coordinate::first();
    }
    public function new()
    {
        return News::latest()->take(20)->get();
    }
    public function contact(Request $request)
    {

        $contact=new Contact();
        $contact->name =$request->name;
        $contact->email =$request->email;
        $contact->phone =$request->phone;
        $contact->message =$request->message;
        $contact->save();
        return ['result'=> 'success'];
    }
}
