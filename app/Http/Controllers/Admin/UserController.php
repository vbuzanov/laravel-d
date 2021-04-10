<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consumer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderByDesc('created_at')->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consumers = Consumer::all()->pluck('name', 'id');
        $roles = Role::all()->pluck('name', 'id');
        // dd($roles);
  
        return view('admin.user.create', compact('consumers', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'max:20',
            'email' => 'required|email|unique:users|max:255',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->avatar = $request->avatar;
        $user->consumer_id = $request->consumer_id;
        $user->confirmed = $request->confirmed;
        $user->password = Hash::make($request->password);
        $user->save();

        $role_id = Role::find($request->role_id)->id;
        $user->roles()->sync($role_id);

        return redirect('/admin/user')->with('success', 'Thank! User added!');
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
        $user = User::findOrFail($id);
        $consumers = Consumer::all()->pluck('name', 'id');
        $roles = Role::all()->pluck('name', 'id');
        // dd($roles);
  
        return view('admin.user.edit', compact('user', 'consumers', 'roles'));
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
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'max:20',
            'email' => 'required|email|unique:users,email,'.$id.'|max:255',
        ]);
        $user = User::findOrFail($id);
    
        $user->update( $request->all() );

        $role_id = Role::find($request->role_id)->id;
        $user->roles()->sync($role_id);


        return redirect('/admin/user')->with('success', 'Thank! User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/admin/user')->with('danger', 'Thank! User deleted!');
    }
}
