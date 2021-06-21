<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments = Departments::all();
        
        return view('departments.list', compact('departments','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('departments.create');
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
   
        ]);

        $customer = new departments([
            'name' => $request->get('name')
        ]);

        $customer->save();
        return redirect()->route('departments.create')->with('success', 'departments has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(departments $customer)
    {
        //
        return view('departments.view',compact('departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(departments $customer)
    {
        //
        return view('departments.edit',compact('departments'));
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


        $customer = departments::find($id);
        $customer->first_name = $request->get('txtFirstName');
        $customer->last_name = $request->get('txtLastName');
        $customer->address = $request->get('txtAddress');

        $customer->update();

        return redirect('/departments')->with('success', 'departments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(departments $customer)
    {
        //
        $departments->delete();
        return redirect()->route('departments.destroy')->with('departments', 'departments deleted successfully');
    }
}
?>