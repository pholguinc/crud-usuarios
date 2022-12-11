<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::where('status', ['Activo'])
        ->when($request->term, function($query, $term){
            $query->where('name', 'LIKE', '%'. $term. '%')
                  ->orWhere('lastname', 'LIKE', '%'. $term. '%');
        })->paginate(8);
        /*return $users;*/
        return Inertia::render('Admin/Users/Index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Users/Create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function inactive(Request $request){
        /*$users = User::
        when($request->term, function($query, $term){
            $query->where('name', 'LIKE', '%'. $term. '%')
                  ->orWhere('lastname', 'LIKE', '%'. $term. '%');
        })->paginate(8);*/
        $users = User::where('status', ['Inactivo'])
        ->when($request->term, function($query, $term){
            $query->where('name', 'LIKE', '%'. $term. '%')
                  ->orWhere('lastname', 'LIKE', '%'. $term. '%');
        })->paginate(8);


        return Inertia::render('Admin/Users/InactiveUsers', compact('users'));


    }

}
