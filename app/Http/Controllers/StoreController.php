<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stores = Store::all();
        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'store_code' => 'required|alphanumeric|max:255',
            'store_name' => 'required|string|max:255',
            'location_address' => 'required|string|max:255',
            'manager_id' => 'required|exists:employee,emp_id',
            'is_active' => 'required|bool'
        ]);
        Store::create($validatedData);
        return redirect()->route('stores.index')->with('success', 'Added');
     
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
    public function edit(Store $store)
    {
        //
        $employee = Employee::all();
        return view('stores.edit', compact('employee', 'stores'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $stores)
    {
        //
        $validatedData = $request->validate([
        'store_code' => 'required|alphanumeric|max:255',
        'store_name' => 'required|string|max:255',
        'location_address' => 'required|string|max:255'
    ]);

        $stores ->update($validatedData);
        return redirect()->route('stores.index')->with('success', 'Stores Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $stores)
    {
        //
        $stores->delete();
        return redirect()->route('stores.index')->with('success', 'Store deleted!');

    }
}
