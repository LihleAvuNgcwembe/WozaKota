<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if (Auth::guard('admin')->attempt([
            'email' => $check['email'],
            'password' => $check['password']
        ])) {
            return redirect()->route('admin.dashboard')->with('error', 'admin Login Successfull');
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }

    public function AdminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error', 'logged out successfully');
    }

    public function AdminRegister()
    {
        return view('admin.admin_register');
    }

    public function AdminRegisterCreate(Request $request)
    {
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now()
        ]);

        return redirect()->route('login_form')->with('error', 'Registration Successfull');
    }

    public function show()
    {
        $admin = Admin::paginate(5);
        return view('admin.admin.admin_admin', compact('admin'));
    }

    public function create()
    {
        return view('admin.admin.admin_admin_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:225'],
            'email' => ['required', 'email', 'max:225', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', 'min:3']
        ]);

        $newAdmin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
            'updated_at' => carbon::now()
        ]);

        if (!$newAdmin) {
            return redirect()->back()->with('error', 'something happend');
        }
        return redirect()->route('admin.admin')->with('success','new admin added');
    }

    public function edit($id){
        $oldAdmin = Admin::where('id',$id)->first();
        return view('admin.admin.admin_admin_edit',compact('oldAdmin'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => ['required', 'string', 'max:225'],
            'email' => ['required', 'email', 'max:225'],
            'password' => ['required', 'confirmed', 'min:3']
        ]);

        $admin = Admin::where('id',$id)->first();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->updated_at = Carbon::now();
        $admin->save();

        return back()->with('success','admin been updated');

    }

    public function destroy($id){
        $admin = Admin::where('id',$id)->first();
        $admin->delete();

        return back()->with('success','admin successfully removed');
    }
}
