<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return View::make('customers', compact('customers'));
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return View::make('customer', compact('customer'));
    }

    public function invoice($id)
    {
        $customer = Customer::findOrFail($id);

        // TODO: Create invoice for customer

        return Redirect::action(self::class.'@show',['id' => $id]);
    }
}
