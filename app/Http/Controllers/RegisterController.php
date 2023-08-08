<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    public function create()
    {
        $role = Role::latest()->get();
       
        return view('session.register', compact('role'));
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
        
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );
        // $atrributes->assignRole($request->input('role'));
        
            
        session()->flash('success', 'Your account has been created.');
        $user = User::create($attributes);
        // $role = Role::latest()->get();
        $user->assignRole($request->input('role'));
        Auth::login($user); 
        return redirect('/dashboard');
    }
}
