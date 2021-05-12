<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class HomeController extends Controller
{
    
        
    public function products() 
    {
        $products = Dress::all();
        $data = [
            'products'=> $products
        ];
        return view('products', $data);
    }

    public function contacts()
    {
        return view('contacts');
    }
}
