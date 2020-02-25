<?php

namespace App\Http\Controllers;

use App\Prices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PricesController extends Controller
{
    public function Download(Request $request){
        $prices = Prices::select('path')->latest()->get()->toArray();
        
        return Storage::Download("public/" . $prices[0]['path'], 'Limay - Lista de precios');
    }

    public function Upload(Request $request){
        $this->validate($request, [
            'listaPrecios' => ['required', 'mimes:pdf']
        ]);
        $prices = new Prices;
        $path = $request->file('listaPrecios')->store('public');
        $filename = basename($path);
        $extension = $request->file('listaPrecios')->getClientOriginalExtension();
        $prices->path = $filename;
        $prices->file_extension = $extension;
        $prices->save();
        return view('admin');
    }
}
