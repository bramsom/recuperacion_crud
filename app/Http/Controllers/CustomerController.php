<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create (){
        return view('clientes.create');
    }
    public function store(Request $request){

        $customer = new Customer();
        $customer->code=$request->code;
        $customer->phone=$request->phone;
        $customer->num_social=$request->num_social;
        $customer->home=$request->home;
        $customer->save();
        return $request;
     }

     public function index(){

        $customers = Customer::orderBy('id', 'desc')->get();
        return view('clientes.index', compact('customers'));
    }
    public Function show ($id){

        $customer=Customer::find($id);
        return view('clientes/mostrar', compact('customer'));

    }

    public function destroy($id) {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('cliente.index');
    }
    public function edit (Customer $customer)
    {
        return view('clientes/editar', compact('customer'));
    }
    public function update(Request $request, Customer $customer)
    {

        $customer->code=$request->code;
        $customer->phone=$request->phone;
        $customer->num_social=$request->num_social;
        $customer->home=$request->home;
        $customer->save();

    return redirect()->route('cliente.index');
}
}
