<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index()  {
        $invoices = Invoice::where('user_id',Auth::id())->get();
 
         return view('invoices.index', ['invoices' => $invoices]);
    } 
    public function newinvoice()  {

         return view('invoices.newinvoice');
    } 
    public function addinvoice(Request $request)  {

        $request->validate([
            'optician' => 'required|string',
            'clerk'    => 'required|string',
        ]);

        // Retrieve the logged-in user ID
        $userId = Auth::id();

        // Generate a unique invoice number
        $invoiceNumber = $this->generateInvoiceNumber();

        // Create a new invoice record
        Invoice::create([
            'optician' => $request->input('optician'),
            'user_id'  => $userId,
            'invoice'  => $invoiceNumber,
            'clerk'    => $request->input('clerk'),
        ]);

        return back()->with('success', "invoice created" );
    } 

    private function generateInvoiceNumber()
    {
        $prefix = 'INV';
        $lastInvoice = Invoice::orderBy('id', 'desc')->first();
        $lastNumber = $lastInvoice ? intval(substr($lastInvoice->invoice, 3)) : 0;
        $newNumber = $lastNumber + 1;

        return $prefix . str_pad($newNumber, 7, '0', STR_PAD_LEFT);
    }
    
}
