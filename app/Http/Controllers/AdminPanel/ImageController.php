<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cid)
    {
        //
        $course= Course::find($cid);
        //$images =Image::where('course_id',$cid);
        $images = DB::table('images')->where('course_id',$cid)->get();
        return view('admin.image.index',[
            'course' => $course,
            'images' => $images,


        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$cid)
    {
        $data= new Image();
        $data->course_id = $cid;
        $data->title = $request->title;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.image.index', ['cid'=>$cid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$cid, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid,$id)
    {
        $data= Image::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('admin.image.index', ['cid'=>$cid]);

    }
}
