<?php

namespace App\Http\Controllers;

use App\Models\Configurations;
use App\Models\Tenant;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configurations = Configurations::paginate(10);
        $tenants = Tenant::all();
        return view('app.configurations.index', ['configurations' => $configurations, 'tenants' => $tenants]);
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
        $validated = $request->validate([
            'tenant_id' => 'required',
            'key' => 'required',
            'value' => 'required',
            'description' => 'required',
        ]);
        $conf = new Configurations();
        $conf->key = $validated['key'];
        $conf->value = $validated['value'];
        $conf->description = $validated['description'];
        $conf->tenant_id = $validated['tenant_id'];
        $conf->save();
        return to_route('configurations.index');
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
