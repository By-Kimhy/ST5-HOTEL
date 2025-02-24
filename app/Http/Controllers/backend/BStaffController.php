<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class BStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs= Staff::all();
        return view('backend.staff.index')
        ->with('staffs',$staffs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'staff_contact' => ['required'],
            'staff_shift' => ['required'],
            'position' => ['required'],
        ]);

        $input=$request->input();
        Staff::create($input,$validated);
        return redirect('/staff')
        ->with('flash_message','Staff Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staffs=Staff::find($id);
        return view('backend.staff.edit')
        ->with('staffs',$staffs);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'staff_contact' => ['required'],
            'staff_shift' => ['required'],
            'position' => ['required'],
        ]);

        $staffs=Staff::find($id);
        $input=$request->all();
        $staffs->update($input, $validated);

        return redirect('/staff')
        ->with('flash_message','Staff Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Staff::destroy($id);
        return redirect('/staff')
        ->with('flash_message','Staff Delete!');
    }
}
