<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $providers = Provider::when($request->term, function ($query, $term) {
            $query->where('name', 'LIKE', '%' . $term . '%')
                  ->orWhere('email', 'LIKE', '%' . $term . '%')
                  ->orWhere('ruc', 'LIKE', '%' . $term . '%');
        })->paginate(8);;
        return Inertia::render('Admin/Providers/Index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Providers/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'ruc' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $response = Provider::create($data);
        return redirect()->route('admin.providers.index', $response)->with('message', 'El proveedor se registró correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return Inertia::render('Admin/Providers/Edit', compact('provider') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'ruc' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $response = $provider->update($data);
        return redirect()->route('admin.providers.index', $response)->with('message', 'El proveedor se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('admin.providers.index')->with('message', 'El proveedor se eliminó correctamente');
    }
}
