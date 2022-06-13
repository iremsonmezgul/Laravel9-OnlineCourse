<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index()
    {
        $page='home';
        $sliderdata=Course::limit(4)->get();
        $courselist1=Course::limit(6)->get();
        $settings= Setting::first();

        return view('home.index',[
            'page'=>$page,
            'settings'=>$settings,
            'sliderdata'=>$sliderdata,
            'courselist1'=>$courselist1

        ]);
    }

    public function course($id)
    {

        $data= Course::find($id);
        $images = DB::table('images')->where('course_id',$id)->get();
        return view('home.course',[
            'data'=>$data,
            'images'=>$images
        ]);

    }
    public function courses()
    {

        $data= Course::all();
        return view('home.cources',[
            'data'=>$data
        ]);
    }

    public function about()
    {

        $settings= Setting::first();
        return view('home.about',[
            'settings'=>$settings,

        ]);
    }

    public function references()
    {

        $settings= Setting::first();
        return view('home.references',[
            'settings'=>$settings,

        ]);
    }

    public function contact()
    {

        $settings= Setting::first();
        return view('home.contact',[
            'settings'=>$settings,

        ]);
    }
    public function faq()
    {
        $settings= Setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'settings'=>$settings,
            'datalist'=>$datalist


        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data= new Message();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->phone= $request->input('phone');
        $data->subject= $request->input('subject');
        $data->message= $request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent,Thank you.');

    }
    public function storecomment(Request $request)
    {
        //dd($request);
        $data= new Comment();
        $data->user_id= Auth::id();
        $data->course_id= $request->input('course_id');
        $data->subject= $request->input('subject');
        $data->review= $request->input('review');
        $data->rate= $request->input('rate');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent,Thank you.');

    }


    public function categorycourses($id)
    {

        $category= Category::find($id);
        $courses = DB::table('courses')->where('category_id',$id)->get();
        return view('home.categorycourses',[
            'category'=>$category,
            'courses'=>$courses
        ]);

    }

    public function test()
    {
        return view("home.test");
    }

    public function param($id,$number)
    {
        //echo "Parameter 1:", $id;
        //echo "<br>Parameter 2:", $number;
        //echo "<br>Sum Parameters :", $id+$number;
        return view('home.test2',
            [
                'id' => $id,
                'number' =>$number

            ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function save(Request $request)
    {
        //echo "Save Function<br>";
        //echo "First Name: ",$_REQUEST["fname"];
        //echo "Last Name: ",$_REQUEST["lname"];
        //return view('home.test2',
        //    [
        //        'fname' => $_REQUEST["fname"],
        //        'lname' =>$_REQUEST["lname"]

        //    ]);
    }
}
