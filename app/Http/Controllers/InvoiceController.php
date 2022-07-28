<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Paslauga;
use App\Models\Autoservisas AS Auto;
use Faker\Core\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{

    public function index()
    {
        $invoices = Invoice::where('user_id', Auth::user()->id)->get();

        return view('invoice.index', ['invoices'=>$invoices]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $paslauga = Paslauga::where('id', $request->paslauga_id)->first();
        $invoice = new Invoice;
        $invoice->number = time();
        $invoice->deadline = $request->deadline;
        $invoice->suma = $paslauga->price * $request->paslauga_count;
        $invoice->paslauga_id = $paslauga->id;
        $invoice->user_id = Auth::user()->id;
            $invoice->save();

        return redirect()->route('home')->with('success', 'paslauga uzsakyta');
    }

    public function show( int $invoiceId)
    {
        $invoice = Invoice::where('id', $invoiceId)->first();

        $autoservisas = Auto::where('paslauga_id', $invoice->paslauga_id)->first();

        return view('invoice.show', ['invoice'=>$invoice, 'autoservisas'=>$autoservisas]);
    }

    public function edit(Invoice $invoice)
    {
        //
    }

    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    public function destroy(Invoice $invoice)
    {
        //
    }
}
