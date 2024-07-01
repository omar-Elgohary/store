<?php
namespace App\Http\Controllers;
use App\Models\Background;
use App\Models\Submit;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function ContactUs()
    {
        return view('site.contacts');
    }

    public function sendContactUs(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|min:4',
                'email' => 'required|email',
                'message' => 'required|min:20',
            ]);

            ContactUs::create($request->all());
        return redirect()->route('ContactUs')->with('success', 'Contact-us Sent successfully');
        }catch(\Exception $e){
            return back()->with('error', 'There is an error: ' . $e->getMessage());
        }
    }

    public function aboutUs()
    {
        $background = Background::where('type', 'about')->first();
        return view('site.about', compact('background'));
    }

    public function sendSubmit(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|min:4',
                'email' => 'required|email',
            ]);

            Submit::create($request->all());
        return redirect()->route('home')->with('success', 'Submit Sent successfully');
        }catch(\Exception $e){
            return back()->with('error', 'There is an error: ' . $e->getMessage());
        }
    }
}
