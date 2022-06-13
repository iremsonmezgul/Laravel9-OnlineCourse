<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("admin.index");
    }

    public function settings()
    {

        $data= Setting::first();
        if ($data==null)
        {
            $data = new Setting();
            $data->title='Course Title';
            $data->save();
            $data= Setting::first();
        }

        return view("admin.settings",['data'=>$data]);
    }
    public function settingsUpdate(Request $request)
    {
        //dd($request);
        $id=$request->input('id');

        $data= Setting::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->company=$request->input('company');
        $data->address=$request->input('address');
        $data->phone=$request->input('phone');
        $data->fax=$request->input('fax');
        $data->email=$request->input('email');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtppassword=$request->input('smtppassword');
        $data->smtpport=$request->input('smtpport');
        $data->facebook=$request->input('facebook');
        $data->instagram=$request->input('instagram');
        $data->twitter=$request->input('twitter');
        $data->aboutus=$request->input('aboutus');
        $data->contact=$request->input('contact');
        $data->references=$request->input('references');
        if ($request->file('icon')){
            $data->icon= $request->file('icon')->store('images');
        }
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin.settings');
    }
}
