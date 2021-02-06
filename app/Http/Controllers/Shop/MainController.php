<?php

namespace App\Http\Controllers\Shop;

use App\Category;
use App\Voyage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(Request $request)
    {
        $voyages = Voyage::where([
            ['prix_ht', '>', 1],
            [function ($query) use ($request) {
                if ($request->term) {
                    return $query->where('prix_ht', '>', $request->term)->get();
                }
            }]
        ]);
//        dd($voyages);

        $voyages = Voyage::all();

        return view('home.content', compact('voyages'));
    }

    public function voyage(Request $request)
    {

        //echo "page voyage";

        //dd($request->id);
        //$categories = Category::where('is_online',1)->get();


        $voyage = Voyage::find($request->id);
        $voyages = Voyage::all();

        return view('shop.voyage', compact('voyage', 'voyages'));

    }

    public function viewByCategory()
    {
        //Recup full categorie

        //$categories = Category::where('is_online',1)->get();
        //dd($categories);

        return view('shop.categorie');
    }
}
