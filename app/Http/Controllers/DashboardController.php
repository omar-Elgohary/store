<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function loginPage()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Email or password is invalid');
        }

        Auth::login($admin);
        return redirect()->route('dashboard')->with('success', 'Login Successful!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginPage');
    }

    public function resetPasswordPage()
    {
        return view('dashboard.resetPassword');
    }

    public function resetPassword(Request $request)
    {
        // $request->validate([
        //     'email'            => 'required|email',
        //     'password'         => 'required|min:8',
        //     'confirm-password' => 'required|min:8|same:password',
        // ]);

        $admin = Admin::where('email', $request->email)->first();
    
        if (!$admin) {
            return back()->with('error', 'Email Not Found');
        }
    
        if ($request->password === $request->confirm_password) {
            $admin->password = Hash::make($request->password);
            $admin->save();
        }else{
            return back()->with('error', 'Password Not Match');
        }
    
        return redirect()->route('login')->with('success', 'Password reset successfully');
    }
    
    
}
