<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.admin_user', compact('users'));
    }

    public function create(): View
    {

        return view('admin.user.admin_user_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
         
        $newItem = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if (!$newItem) {
            return redirect()->back()->with('error', 'Could not create user');
        }
        return redirect()->route('admin.user')->with('success', 'new user created');
    }

    public function edit($id){
        $oldUser = User::where('id',$id)->first();
        
        return view('admin.user.admin_user_edit', compact('oldUser'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:225'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        $newData = User::where('id', $id)->first();
        $newData->name = $request->name;
        $newData->email = $request->email;
        $newData->password = $request->password;
        $newData->updated_at = Carbon::now();
        $newData->save();

        return back()->with('success','User info has been updated');
        
    }

    public function destroy($id){
        $user = User::where('id',$id)->first();
        $user->delete();

        return back()->with('success','user record has been deleted');
    }

}
