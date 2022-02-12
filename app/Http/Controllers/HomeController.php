<?php

namespace App\Http\Controllers;

use App\Models\Termekek;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $termekekCount = Termekek::count();
        $termekekPrice = Termekek::sum('ar');

        return view('stats', [
            'termekekCount' => $termekekCount,
            'termekekPrice' => $termekekPrice,
        ]);
    }
}
