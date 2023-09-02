<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{

    public function index() : View {
        return view('login');
    }

    public function registration() : View {
        return view('registration');

    }

    public function home() {
        return view('homepage');
    }

    public function postLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $token = Auth::attempt($credentials);

        if(!$token) {
            return response()->json([
                'message' => 'Unauthrized',
            ]);
        }

        $user = Auth::user();

        return response()->json([
            'user' => $user,
            'authrization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);

    }

    public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard()
    {
        if(auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => $data['role']
      ]);
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
  
        return redirect('login');
    }
    
}
