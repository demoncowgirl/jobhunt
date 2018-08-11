<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SettingController extends Controller
{
    public function index() {
    	if (\Auth::user()->is_admin) {
	    	$settings = \App\SiteSettings::first();
	    	if (!$settings) {
		    	$settings = new \App\SiteSettings;
	    	}
	    	return view('settings.index', compact('settings'));
	    }
    	return redirect()->route('contacts');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'jobtitle' => 'required',
            'company' => 'required',
            'contactname'=>'required',
            'contactphone'=>'required',
            'email'=>'required'
        ]);

    	$settings = new \App\SiteSettings;
    	$settings->job_title = $request->input('jobtitle');
    	$settings->company = $request->input('company');
    	$settings->contact_name = $request->input('contactname');
    	$settings->contact_phone = $request->input('contactphone');
    	$settings->email = $request->input('email');

    	$settings->save();
        $request->session()->flash('status', 'Contact added!');
        return redirect()->route('home');
    }
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'jobtitle' => 'required',
            'company' => 'required',
            'contactname'=>'required',
            'contactphone'=>'required',
            'email'=>'required'
        ]);

    	$settings = \App\SiteSettings::find($id);
    	$settings->job_title = $request->input('jobtitle');
    	$settings->company = $request->input('company');
    	$settings->contact_name = $request->input('contactname');
    	$settings->contact_phone = $request->input('contactphone');
    	$settings->email = $request->input('email');
    	$settings->save();
        $request->session()->flash('status', 'Contact updated!');
        return redirect()->route('home');
    }
}
?>
