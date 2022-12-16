<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::when($request->term, function ($query, $term) {
            $query->where('name', 'LIKE', '%' . $term . '%')
                  ->orWhere('lastname', 'LIKE', '%' . $term . '%')
                  ->orWhere('dni', 'LIKE', '%' . $term . '%');
        })->latest('id')->paginate(8);;
        return Inertia::render('Admin/Clients/Index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Clients/Create');
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
            'lastname' => 'required',
            'email' => 'required',
            'dni' => 'required',
            'phone' => 'required',
        ]);

        $response = Client::create($data);
        return redirect()->route('admin.clients.index', $response)->with('message', 'El cliente se registró correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return Inertia::render('Admin/Clients/Edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'dni' => 'required',
            'phone' => 'required',
        ]);

        $response =  $client->update($data);
        return redirect()->route('admin.clients.index', $response)->with('message', 'El cliente se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index')->with('message', 'El cliente se eliminó correctamente');
    }
}
