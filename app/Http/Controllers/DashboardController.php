<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Submit;
use App\Models\Background;
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

    public function backgrounds()
    {
        return view('dashboard.theme.index');
    }

    public function changeBackground(Request $request)
    {
        try{
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|string|min:4',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('backgrounds'), $imageName);
            }

            if($request->type == 'home'){
                Background::create([
                    'image' => $imageName,
                    'title' => $request->title,
                    'type'  => 'home'
                ]);
            }else{
                Background::create([
                    'image' => $imageName,
                    'title' => $request->title,
                    'type'  => 'about'
                ]);
            }

            return redirect()->route('backgrounds')->with('success', 'Background Uploaded successfully');
        }catch(\Exception $e){
            return back()->with('error', 'There is an error: ' . $e->getMessage());
        }
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

    public function submits()
    {
        $submits = Submit::get();
        return view('dashboard.submits.index', get_defined_vars());
    }
}
