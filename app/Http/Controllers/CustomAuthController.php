<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  

    public function Customlogin(Request $request) {
        
       $login = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        
        if(!auth()->attempt($request->only('username','password'))) {
            return back()->with('status','Invalid Credentials');
        }
        return redirect('home');
    }
    public function register()
    {
       
        return view('auth.register');
    }
      
    public function customRegistration(Request $request)
    {
        
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return view('auth.logIn');
    }

  
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        
        Auth::logout();
        return redirect('/');
    }

}
