<?php

namespace App\Http\Controllers\Shop;

use App\Category;
use App\Voyage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {

        $voyages = Voyage::all();
        //dd($voyages);
        // $categories = Category::where('is_online',1)->get();

        return view('home.content', compact('voyages'));
    }

    public function voyage(Request $request)
    {

        //echo "page voyage";

        //dd($request->id);
        //$categories = Category::where('is_online',1)->get();


        $voyage = Voyage::find($request->id);


        return view('Shop.voyage', compact('voyage'));

    }

    public function viewByCategory()
    {
        //Recup full categorie

        //$categories = Category::where('is_online',1)->get();
        //dd($categories);

        return view('Shop.categorie');
    }
}
