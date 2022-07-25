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
        $iName = DB::table('invoices', 'i')
//            ->join('paslaugas', 'paslaugas.id', '=', 'invoices.paslauga_id')
//            ->join('paslaugas', 'paslaugas.id', '=', 'autoservisas.paslauga_id')
//            ->join('mechanikas', 'mechanikas.id', '=', 'mechanikas.paslauga_id')
//            ->join('user', 'user.id', '=', 'invoices.user_id')
            ->select('i.*')


            ->get();


//        $iName = I::all()->first();
//        $paslauga=$iName->paslauga;
//        $servisas = $iName->paslauga->autoservisas[0];
//        $meistras = $iName->paslauga->autoservisas[0]->mechanikas;
//        $uzsakymas = ['paslauga'=>$paslauga, 'meistras'=>$meistras, 'servisas'=>$servisas];
        dd($iName);
        return view('home', ['paslauga'=>$iName]);
    }
}
