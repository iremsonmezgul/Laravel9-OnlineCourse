@extends('layouts.adminwindow')

@section('title', 'Course Image Gallery')

@section('content')

    <h3>{{$course->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store' , ['cid'=>$course->id])}}" method="post" enctype="multipart/form-data">
        </div>
        </div>
        <form>
            @csrf
            <div class="input-group">

                <label>Title</label>
                <input class="form-control" type="text" name="title" placeholder="Title">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <input class="input-group-text" type="submit" value="Upload">
                </div>
            </div>


        </form>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Course Image List</h4>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.destroy',['cid'=>$course->id,'id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Are you sure ?')">Delete</a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="collapse collapse-box" id="border-table">
                        <div class="code-box">

                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                </div>
@endsection


