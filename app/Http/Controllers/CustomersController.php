<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customers::all();
        
        return view('customers.list', compact('customers','customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
  
        //
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'gsm_no' => 'required',
            'department_id' => 'required'
        ]);

        $customer = new Customers([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'gsm_no'=> $request->get('gsm_no'),
            'department_id'=> $request->get('department_id'),            
            'delet_status'=> $request->get('delet_status')
        ]);

        $customer->save();
        return redirect()->route('customers.create')->with('success', 'Customers has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customer)
    {
     


        //
        return view('customers.view',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customer)
    {
        //
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'txtFirstName'=>'required',
            'txtLastName'=> 'required',
            'txtAddress' => 'required'
        ]);


        $customer = Customers::find($id);
        $customer->first_name = $request->get('txtFirstName');
        $customer->last_name = $request->get('txtLastName');
        $customer->address = $request->get('txtAddress');

        $customer->update();

        return redirect('/customers')->with('success', 'Customers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customer)
    {
        //
        $customers->delete();
        return redirect()->route('customers.destroy')->with('customers', 'Customers deleted successfully');
    }
}
?>