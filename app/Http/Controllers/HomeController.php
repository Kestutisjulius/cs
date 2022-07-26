<?php

namespace App\Http\Controllers;

use App\Models\Invoice AS I;
use App\Models\Paslauga AS P;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $iName = I::all()->first() ?? [];
//        dd($iName);
        return view('home', ['invoices'=>$iName]);
    }
}
