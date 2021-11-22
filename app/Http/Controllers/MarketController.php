<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        $markets = Market::all();
        return view('market.list',compact('markets'));
    }

    public function create()
    {
        return view('market.create');
    }
    public function store(Request $request){
        $market = new Market();
        $market->name = $request->name;
        $market->phone = $request->phone;
        $market->email = $request->email;
        $market->address = $request->address;
        $market->customer_manager = $request->customer_manager;
        $market->status = "1";
        $market->save();
        return redirect()->route('market.list');
    }

    public function delete($id)
    {
       $market = Market::findOrFail($id);
       $market->delete();
       return redirect()->route('market.list');
    }

    public function edit($id)
    {
        $market = Market::findOrFail($id);
        return view('market.edit',compact('market'));
    }

    public function update( Request $request)
    {
        $market = Market::findOrFail($request->id);
        $market->name = $request->name;
        $market->phone = $request->phone;
        $market->email = $request->email;
        $market->address = $request->address;
        $market->customer_manager = $request->customer_manager;
        $market->status = $request->status;
        $market->save();
        return redirect()->route('market.list');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $markets = Market::where('name','LIKE','%'.$keyword.'%')->get();
        return view('market.list',compact('markets'));
    }
}
