<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    public function search(Request $request){        
        $keywords = $request->keywords;
        dd(explode(" ", $keywords));
    }
}
