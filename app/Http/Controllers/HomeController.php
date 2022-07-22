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

    public function index(Request $request)
    {

        $invoicesDIR = [DB::table('invoices')
            ->join('paslaugas as p', 'p.id', '=', 'invoices.paslauga_id')
            ->select('p.*', 'invoices.*')
            ->orderBy('invoices.id', 'asc')
            ->get(), 'default'];


        return view('home', ['invoices'=>$invoicesDIR[0]]);
    }
}
