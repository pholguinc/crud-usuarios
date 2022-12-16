<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::where('status', ['Activo'])
            ->when($request->term, function ($query, $term) {
                $query->where('name', 'LIKE', '%' . $term . '%')
                    ->orWhere('lastname', 'LIKE', '%' . $term . '%');
            })->paginate(8);
        //return $users;
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
        $data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'dni' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
            'status' => 'required'
        ]);

        $response = User::create($data);
        //return Inertia::render('Admin/Users/Create')->with('status', true);
        return redirect()->route('admin.users.index', $response)->with('message', 'El usuario se registró correctamente');
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

    public function edit(User $user)
    {
        return Inertia::render('Admin/Users/Edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->only('name', 'lastname', 'email',
                                'dni', 'phone', 'address', 'status');

        if(trim($request->password) == ''){
            $data = $request->except('password');
        }else{
            $data = $request->all();
            $data['password']= $request->password;
        }

        $user->update($data);
        return redirect()->route('admin.users.index')->with('message', 'El usuarió se actualizó correctamente');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('message', 'El usuarió se eliminó correctamente');
    }


    public function inactive(Request $request)
    {

        $users = User::where('status', ['Inactivo'])
            ->when($request->term, function ($query, $term) {
                $query->where('name', 'LIKE', '%' . $term . '%')
                    ->orWhere('lastname', 'LIKE', '%' . $term . '%');
            })->paginate(8);

        return Inertia::render('Admin/Users/InactiveUsers', compact('users'));
    }

}
