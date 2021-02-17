<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function index(){
        $quotes = Quote::all();
        return response()->json($quotes);
    }

    public function search($id){
        $quote = Quote::find($id);

        return response()->json($quote);
    }
}
