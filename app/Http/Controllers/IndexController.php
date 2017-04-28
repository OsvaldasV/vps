<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {	
    	  if(view()->exists('index')){
    	  		if(App::getLocale() == 'lt'){

    	  		 // $data = $this->getMenuLT();
   			 
    	  		 return view('index');
    	  		}

    	  		if(App::getLocale() == 'en'){

    	  		 
    	  		 return view('index');

    	  		}
    	  }
    	  
    	  
        
    }
}
