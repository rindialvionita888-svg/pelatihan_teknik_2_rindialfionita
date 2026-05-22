<?php

namespace App\Http\Controllers;

use App\Models\Portofolio; 
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
   
    public function index()
    {
      
        $data_portofolio = Portofolio::all(); 
        
        
        return view('portofolio.index', compact('data_portofolio')); 
    }
}