<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::paginate(10);
        return view('app.tenants.index', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = request()->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
            'logo' => 'required',

        ]);
        $tenant = new Tenant();
        $tenant->name = $request->input('name');
        $tenant->code = $request->input('code');
        $tenant->logo = $request->input('logo');
        $tenant->description = $request->input('description');
        $tenant->status = 'active';

        $tenant->save();

        return to_route('tenants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tenant = Tenant::findOrFail($id);
        return view('app.tenants.show', compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
